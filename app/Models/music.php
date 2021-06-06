<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'user_id',
        'music',
        'exhibit_id'
    ];
}
