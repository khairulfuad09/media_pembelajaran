<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'title',
    ];
    public function exercise()
    {
        return $this->hasMany(exercise::class);
    }
    public function subject()
    {
        return $this->belongsTo(subject::class);
    }
}
