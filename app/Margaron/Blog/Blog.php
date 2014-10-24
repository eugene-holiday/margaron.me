<?php namespace Margaron\Blog;


class Blog extends \Eloquent
{
    protected $table = 'blogs';

    protected $fillable = array('title', 'intro', 'content');

    public function user()
    {
        return $this->belongsTo('Margaron\Users\User');
    }

} 