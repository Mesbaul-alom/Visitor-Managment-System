<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'designation',
        'comment',
        'employee_role',
    ];
}
