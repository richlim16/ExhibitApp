<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exhibit extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'startDate',
        'endDate',
        'theme',
        'title',
        'description',
        'user_id',
        'status',
        'referenceNum'
    ];

    public function art() {
        return $this->hasMany(art::class);
    }

    public function poetry() {
        return $this->hasMany(poetry::class);
    }
    public function user() {
        return $this->BelongsTo(User::class);
    }
}
