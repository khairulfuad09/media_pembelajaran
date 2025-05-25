<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use function Laravel\Prompts\progress;

class chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'title',
        'kkm',
    ];
    public function grade()
    {
        return $this->hasMany(grade::class);
    }
    public function essay()
    {
        return $this->hasMany(essay::class);
    }
    public function progress()
    {
        return $this->hasMany(progress::class);
    }
    // public function subject()
    // {
    //     return $this->belongsTo(subject::class);
    // }
}
