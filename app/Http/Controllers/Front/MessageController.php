<?php

namespace App\Http\Controllers\Front;

use App\Helpers\WhatsAppHelpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use App\Models\IpWhatsappLimit;
use App\Models\IpWhatsappLog;
use App\Services\WhatsappHandleService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // public function saveMessage(SendMessageRequest $request)
    // {
    //     $request->all();

    //     $message = $request->content;
    //     $convertWhatsApp = WhatsAppHelpers::convertHtml($request->content);

    //     dd($message, $convertWhatsApp);
    // }
    public function saveMessage(Request $request, WhatsappHandleService $waService)
    {
        $validated = $request->validate([
            'sender_name'      => 'nullable|string|max:100',
            'sender_number'    => 'nullable|numeric|digits_between:8,15',
            'recipient_name'   => 'required|string|max:100',
            'recipient_number' => 'required|numeric|digits_between:8,15',
            'original_content' => 'required|string',
            // 'g-recaptcha-response' => 'required|recaptchav3:register,0.5',
            // 'send_type'        => 'required|in:now,later',
            // 'scheduled_time'   => 'nullable|date|after:now',
        ]);

        // dd($validated['g-recaptcha-response']);
        
        $validated['ip'] = $request->ip();
        $validated['send_type'] = 'now';
        $validated['recipient_number'] = '62' . $request->recipient_number;;
        $validated['sender_number'] = '62' . $request->sender_number;;
        $validated['message_type'] = 'text';
        
        // dd($validated);
        // Simpan ke database
        $message = $waService->store($validated);

        // Jika langsung kirim
        if ($validated['send_type'] === 'now') {
            // Check ip
            $userLimit = IpWhatsappLimit::where('ip', $validated['ip'])->first();
            $log = IpWhatsappLog::where('ip', $validated['ip'])->first();
            
            $dailyLimit = $userLimit ? $userLimit->daily_limit : 3; 
            $sendCount = $log ? $log->count : 0;

            if($sendCount >= $dailyLimit)
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Maaf kamu sudah mencapai limit pengiriman hari ini. Coba lagi besok ya.'
                ], 429);
            }

            $waService->sendMessage($message);
        }

        return back()->with('success', 'Pesan berhasil diproses.');
    }
}
