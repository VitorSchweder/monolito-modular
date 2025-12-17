<?php

namespace App\Modules\Users\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'users';

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
