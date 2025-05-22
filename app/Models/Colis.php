<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    protected $fillable = [
        'trackingNumber',
        'senderName',
        'receiverName',
        'weight',
        'fee',
        'state',
        'D_Deposite',
        'D_Delivery'
    ];
}
