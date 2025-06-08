<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IpWhatsappLog extends Model
{
    protected $fillable = ['ip', 'date', 'count'];

    protected $dates = ['date'];
}
