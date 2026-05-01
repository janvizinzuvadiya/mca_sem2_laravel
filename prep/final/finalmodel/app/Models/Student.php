<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable =[
     
        'enrollment_no',
        'full_name',
        'email',
        'course',
        'joining_date',
        'status'
    ];
}