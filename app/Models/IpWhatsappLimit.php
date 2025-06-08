<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IpWhatsappLimit extends Model
{
    protected $primaryKey = 'ip';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['ip', 'daily_limit'];
}
