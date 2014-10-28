<?php namespace Margaron\Blog;

interface BlogRepositoryInterface
{
    public function getAll();

    public function find($id);
}