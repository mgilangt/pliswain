<?php

namespace App\Services;

use App\Models\WhatsappMessage;
use App\Services\WatzapService;
use Illuminate\Support\Str;
use App\Helpers\WhatsappFormatter;
use App\Helpers\WhatsAppHelpers;
use App\Jobs\SendWhatsappMessageJob;
use App\Models\IpWhatsappLimit;
use App\Models\IpWhatsappLog;
use App\Models\WhatsappMessageConfig;
use App\Models\WhatsappServiceConfig;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsappHandleService
{
    // protected WatzapService $watzap;

    // public function __construct(WatzapService $watzap)
    // {
    //     $this->watzap = $watzap;
    // }

    /**
     * Simpan pesan WhatsApp ke database.
     */
    public function store(array $data): WhatsappMessage
    {
        $whatsappText = WhatsAppHelpers::convertHtml($data['original_content']);

        return WhatsappMessage::create([
            'id'                => (string) Str::uuid(),
            'sender_name'       => $data['sender_name'],
            'sender_number'     => $data['sender_number'],
            'recipient_name'    => $data['recipient_name'],
            'recipient_number'  => $data['recipient_number'],
            'sender_ip'         => $data['ip'],
            'original_content'  => $data['original_content'],
            'whatsapp_text'     => $whatsappText,
            'message_type'      => $data['message_type'],
            'send_type'         => $data['send_type'],
            'scheduled_at'      => $data['send_type'] === 'later' ? $data['scheduled_time'] ?? null : null,
            'sent_at'           => null,
            'is_success'        => false,
            'response_log'      => null,
        ]);
    }

    /**
     * Kirim pesan WhatsApp langsung ke API.
     */
    // public function sendJob(WhatsappMessage $message): void
    // {
    //     $phone = '62' . $message->recipient_number;
    //     // $phone = '62' . ltrim($message->recipient_number, '0');

    //     $success = $this->sendMessage($phone, $message->whatsapp_text);

    //     $message->update([
    //         'sent_at' => now(),
    //         'is_success' => $success,
    //         'response_log' => $success ? 'sent' : 'failed',
    //     ]);
    // }

    public function sendMessage(WhatsappMessage $message): void
    {
        $phone = '62' . $message->recipient_number;
        // $phone = '62' . ltrim($message->recipient_number, '0');

        $provider = WhatsappServiceConfig::where('slug', 'watzap')->first();
        $setting = WhatsappMessageConfig::where('whatsapp_service_id', $provider->id)->where('type', $message->message_type)->first();
        // dd($message, $provider, $setting);

        $response = Http::post($setting->endpoint, [
            'api_key' => $provider->api_key,
            'number_key' => $provider->secret_key,
            'phone_no' => $message->recipient_number,
            'message' => $message->whatsapp_text,
            'wait_until_send' => "1"
        ]);

        // dd($response);

        $limit = IpWhatsappLimit::firstOrCreate(
            ['ip' => $message->sender_ip],
            ['daily_limit' => 3] // default new
        );

        $today = now()->toDateString(); // format: YYYY-MM-DD

        $ipLog = IpWhatsappLog::updateOrCreate(
            [
                'ip'   => $message->sender_ip,
                'date' => $today,
            ],
            [
                'count' => 1
            ]
        );

        $ipLog->increment('count');

        $message->update([
            'sent_at' => now(),
            'is_success' => $response->status() === 200,
            'response_log' => $response->json(),
        ]);
    }

    public function sendMessageScheduler(WhatsappMessage $message): void
    {
            $message->update([
                'status' => 'scheduled',
            ]);

            $delayTime = Carbon::parse($message->scheduled_at);
            $now = now();

            $delayInSeconds = $delayTime->greaterThan($now)
                ? $now->diffInSeconds($delayTime)
                : 0;
            
            // Absolute / Nilai mutlak untuk menghindari negatif
            $delayInMinutes = abs($delayInSeconds) / 60;

            SendWhatsappMessageJob::dispatch($message)->delay(now()->addMinutes($delayInMinutes));
    }

}
