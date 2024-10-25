<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'location',
        'category',
        'price',
        'description',
        'reference',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
