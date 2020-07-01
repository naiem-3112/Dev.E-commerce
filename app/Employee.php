<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'contact', 'password', 'designation', 'emp_nic', 'salary', 'emp_dob', 'status'
    ];
}
