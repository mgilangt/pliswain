<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhatsappServiceConfig extends Model
{
    use HasUuids, SoftDeletes;

    // protected $table = 'whatsapp_service_configs';

    protected $fillable = [
        'name',
        'slug',
        'api_key',
        'secret_key',
    ];

    public function messageConfigs()
    {
        return $this->hasMany(WhatsappMessageConfig::class, 'whatsapp_service_id');
    }
}
