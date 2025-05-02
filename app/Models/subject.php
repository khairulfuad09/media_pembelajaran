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

    public function chapter()
    {
        return $this->hasMany(chapter::class);
    }
}
