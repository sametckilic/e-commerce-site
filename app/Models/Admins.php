<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as authenticatable;

class Admins extends authenticatable
{
    use HasFactory;
    protected $table = 'admins';
}
