<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolios extends Model
{
    use HasFactory, HasUuids;

    public $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'link',
    ];
}
