<?php namespace Margaron\Admin;

class Dashboard
{
    public $entities;

    function __construct()
    {
        $this->entities = ['Blog', 'Page', 'User'];
    }

    public function menu()
    {
        return ['User' => ['List', 'Add'], 'Pages' => ['List', 'Add'], 'Blog' => ['List', 'Add']];
    }

}