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

    /**
     * List id categories
     */
     public function getCategoryListBAttribute()
     {
         return $this->categories->pluck('id')->all();
     }

    //

    /**
     * Course - author
     */
    public function user()
    {
        return $this->belongsTo('App\User');  // this course belongs to User
    }

    /**
     * Video n-m Category
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
}
