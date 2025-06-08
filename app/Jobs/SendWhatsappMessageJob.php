<?php

namespace App\Jobs;

use App\Models\WhatsappMessage;
use App\Services\WhatsappHandleService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWhatsappMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $backoff = 10;
    public $tries = 3;

    public $message;

    public function __construct(WhatsappMessage $message)
    {
        $this->message = $message;
    }

    public function handle(WhatsappHandleService $waService)
    {
        if ($this->message->send_type === 'later') {
            $waService->sendMessage($this->message);
            $this->message->update(['status' => 'sent']);
        }
    }
}
