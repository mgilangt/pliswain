<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class WhatsappMessage extends Model
{
    use SoftDeletes, HasUuids;

    // UUID primary key
    public $incrementing = false;
    protected $keyType = 'string';

    // Mass assignment
    protected $fillable = [
        'id',
        'sender_name',
        'sender_number',
        'sender_ip',
        'recipient_name',
        'recipient_number',
        'original_content',
        'whatsapp_text',
        'message_type',
        'send_type',
        'scheduled_at',
        'sent_at',
        'is_success',
        'response_log',
    ];

    // Date casting
    protected $dates = [
        'scheduled_at',
        'sent_at',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    // Generate UUID saat creating
    // protected static function booted()
    // {
    //     static::creating(function ($model) {
    //         if (empty($model->id)) {
    //             $model->id = (string) Str::uuid();
    //         }
    //     });
    // }
}
