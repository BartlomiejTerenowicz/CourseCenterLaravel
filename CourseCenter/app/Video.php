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
        'description',
        'user_id'
    ];
    // Table ^
    //

    /**
     * Course - author
     */
    public function user()
    {
        return $this->belongsTo('App\User');  // this course belongs to User
    }
}
