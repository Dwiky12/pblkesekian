<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
    use HasFactory;

    protected $fillable = [
        'tingkatan' // Kolom yang dapat diisi
    ];

    public function akreditasi() {
        return $this->hasMany(Akreditasi::class);
    }
}