<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class LectureData extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'phone_number',
        'address',
        'image',
        'nidn',
        'nip',
        'kk',

        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
