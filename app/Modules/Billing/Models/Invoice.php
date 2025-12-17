<?php

namespace App\Modules\Billing\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $connection = 'billing';

    protected $table = 'invoices';

    protected $fillable = [
        'user_id',
        'amount',
        'status',
    ];
}
