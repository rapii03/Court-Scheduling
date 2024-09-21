<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class StudentData extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'academic_adviser',
        'supervisor_1',
        'supervisor_2',
        'thesis_title',
        'semester',
        'image',
        'year',
        'nim',
        'kk',

        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
