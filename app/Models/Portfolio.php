<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title', 'klien', 'category', 'date', 'description', 'image', 'video', 'pdf', 'video_url'
    ];
}
