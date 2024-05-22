<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'address',
        'phone',
        'image',
        'nidn',
        'nip',
        'kk',

        'email',
        'name',
    ];
}
