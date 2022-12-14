<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opti extends Model
{
    use HasFactory;

    protected $fillable = [
        'fio',
        'phone',
        'city',
        'review'
    ];

    const OPTI_TO_EMAIL = 'opti@email.com';
}
