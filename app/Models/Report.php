<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'jenis',
        'kategori',
        'regulator',
        'pembuat',
        'pengirim',
        'deadline',
        'format',
        'notes',
        'image_path',
        'image_uploaded',
    ];

}
