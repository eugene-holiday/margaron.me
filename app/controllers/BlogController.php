<?php

use Margaron\Blog\Blog;

class BlogController extends BaseController {

    function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = Blog::all();
        $posts = $posts->sortBy('created_at', 0, true);
        $this->layout->content =  View::make('blog.index', compact('posts'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('blog.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $post = new Blog();
        $post->title = Input::get('title');
        $post->intro = Input::get('intro');
        $post->content = Input::get('content');
        $post->user_id = Auth::user()->id;
        $post->save();

		return Redirect::home();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Blog::findOrFail($id);
        $this->layout->content = View::make('blog.show', array('post' => $post));

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $post = Blog::findOrFail($id);
        $this->layout->content = View::make('blog.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $post = Blog::find($id);
        $post->title = Input::get('title');
        $post->intro = Input::get('intro');
        $post->content = Input::get('content');
        $post->save();
        return Redirect::route('blog.show', $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Blog::destroy($id);
        return Redirect::route('blog.index');
	}


}
