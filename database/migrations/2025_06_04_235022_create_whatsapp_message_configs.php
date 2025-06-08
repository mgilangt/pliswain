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
        Schema::create('whatsapp_message_configs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('whatsapp_service_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type'); // e.g. 'text', 'image', 'template'
            $table->string('endpoint'); // e.g. '/send-message'

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('whatsapp_service_id')
                ->references('id')
                ->on('whatsapp_service_configs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whatsapp_message_configs');
    }
};
