<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'student_code',
        'class',
        'faculty',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
