<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StripeUser extends Model
{
    protected $fillable = [
        'jid_id',
        'stripe_user_id'
    ];
}
