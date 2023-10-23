<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Java extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'deskripsi',
        'tanggal',
        'content',
    ];
}
