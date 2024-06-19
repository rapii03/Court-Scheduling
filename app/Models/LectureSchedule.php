<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LectureSchedule extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'time_id',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function time(): BelongsTo
    {
        return $this->belongsTo(TimeList::class);
    }
}
