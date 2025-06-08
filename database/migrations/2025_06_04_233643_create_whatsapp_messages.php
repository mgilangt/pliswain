<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('whatsapp_messages', function (Blueprint $table) {
            $table->uuid('id')->primary();               // id
            $table->string('sender_name')->nullable();               // nama pengirim
            $table->string('sender_number')->nullable();             // nomor pengirim
            $table->ipAddress('sender_ip');             // ip user sender
            $table->string('recipient_name');            // nama penerima
            $table->string('recipient_number');          // nomor penerima
            $table->longText('original_content');        // isi pesan (HTML)
            $table->longText('whatsapp_text');           // hasil convert ke format WhatsApp (markdown-like)
            $table->enum('message_type', ['text', 'image', 'file']);      // tipe pesan (bisa dikembangkan nanti)
            $table->enum('send_type', ['now', 'later']); // pengiriman: sekarang atau nanti
            $table->timestamp('scheduled_at')->nullable(); // waktu pengiriman kalau nanti
            $table->timestamp('sent_at')->nullable();    // waktu pesan benar-benar dikirim
            $table->boolean('is_success')->default(false); // status pengiriman
            $table->text('response_log')->nullable();    // log response dari API
            $table->timestamps();                       //timestapms
            $table->softDeletes();                      // softdeletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whatsapp_messages');
    }
};
