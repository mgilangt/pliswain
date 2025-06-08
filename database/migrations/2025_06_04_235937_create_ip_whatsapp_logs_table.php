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
        Schema::create('ip_whatsapp_logs', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip');
            $table->date('date');
            $table->unsignedInteger('count')->default(0);

            $table->unique(['ip', 'date']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ip_whatsapp_logs');
    }
};
