<?php

class ProfileController extends BaseController {

    private $id;

    function __construct()
    {
        $this->beforeFilter('auth');
        $this->id = Auth::user()->id;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $profile = User::find($this->id);
        $this->layout->content =  View::make('profile.index')->with('profile', $profile);
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

        if (Request::ajax())
        {
            return Response::json(array('success' => true));
        }

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
	 * @return Response
	 */
	public function edit()
	{
        $profile = User::find($this->id);
        $this->layout->content = View::make('profile.edit')->with('profile', $profile);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update()
	{
        $profile = User::find($this->id);

        //$profile->title = Input::get('login');
        $profile->password = Input::get('password');

        $profile->save();
        return Redirect::route('profile.index');
	}




}
