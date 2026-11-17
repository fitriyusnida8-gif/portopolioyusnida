<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class_name',
        'major',
        'description',
        'skill_badge',
        'image',
        'cv_file'
    ];
}