<?php namespace Margaron\Blog;

class DbBlogRepository implements BlogRepositoryInterface
{

    public function getAll()
    {
        return Blog::all()->sortBy('created_at', 0, true);
    }

    public function find($id)
    {
        return Blog::findOrFail($id);
    }
}