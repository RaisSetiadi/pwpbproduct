<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruby extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'deskripsi',
        'content',
    ];
}
