<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seminar extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'supervisor_1',
        'supervisor_2',
        'thesis_title',
        'examiner_1',
        'examiner_2',
        'type',
        'sks',

        'seminar_attending_file',
        'lecture_approval_file',
        'approval_file',
        'guidance_file',
        'revision_file',
        'docs_file',
        'ppt_file',

        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
