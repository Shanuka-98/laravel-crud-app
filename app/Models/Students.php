<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{

    protected $fillable = [
        'student_id',
        'student_name',
        'student_age',
        'student_status',
        'img_name',
        'img_path'
    ];

    use HasFactory;
}
