<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'chapter_id'
    ];

    public function chapter()
    {
        return $this->belongsTo(chapter::class);
    }

    public function grade()
    {
        return $this->hasMany(grade::class);
    }
}
