<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class essay extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'subject_id',
        'chapter_id',
        'exercise_id',
        'jawaban',
        'nilai',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subject()
    {
        return $this->belongsTo(subject::class);
    }
    public function chapter()
    {
        return $this->belongsTo(chapter::class);
    }
    public function exercise()
    {
        return $this->belongsTo(exercise::class);
    }
}
