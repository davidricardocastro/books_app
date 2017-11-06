<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'author_id',
        'title',
        'published_at',
        'finished_reading_at',
        'my_review',
        'my_rating'        
    ];
    
    protected $guarded = [
        'id'
    ];

    public function author(){
        return $this->belongsTo('App\Author');

    }
}
