<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhatsappMessageConfig extends Model
{
    use HasUuids, SoftDeletes;

    // protected $table = 'whatsapp_message_configs';

    protected $fillable = [
        'whatsapp_service_id',
        'name',
        'slug',
        'type',
        'endpoint',
    ];

    public function service()
    {
        return $this->belongsTo(WhatsappServiceConfig::class, 'whatsapp_service_id');
    }
}
