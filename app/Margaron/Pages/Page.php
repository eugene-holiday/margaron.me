<?php namespace Margaron\Pages;

class Page extends \Eloquent {
	protected $fillable = ['slug', 'title', 'content'];
}