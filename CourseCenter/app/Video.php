<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Model can cooperates with table
class Video extends Model
{
    // Enable fields for users
    protected $fillable = [
        'title',
        'url',
        'description'
    ];
    // Table ^
}
