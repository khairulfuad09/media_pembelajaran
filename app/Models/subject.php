<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelajaran',
    ];

    public function grade()
    {
        return $this->hasMany(grade::class);
    }
    public function essay()
    {
        return $this->hasMany(essay::class);
    }
}
