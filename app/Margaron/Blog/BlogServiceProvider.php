<?php namespace Margaron\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Margaron\Blog\BlogRepositoryInterface', 'Margaron\Blog\DbBlogRepository');
    }
}