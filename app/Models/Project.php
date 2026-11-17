<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Menggunakan guarded kosong artinya kamu memberikan izin penuh 
    // agar kolom title, description, dan image bisa langsung disimpan ke database.
    protected $guarded = [];
}