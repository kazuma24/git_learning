<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public static $rules = [
        'age' => 'numeric|between:0,150'
    ];

    public function scopeEqualAge($query, $age) {
        return $query->where('age', $age);
    }

    public function boards() {
        return $this->hasMany(Board::class);
    }
}
