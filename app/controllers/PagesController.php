<?php

use Margaron\Pages\Page;

class PagesController extends BaseController {


    function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('show')));
    }

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
        $pages = Page::all();
        $pages = $pages->sortBy('created_at', 0, true);
        $this->layout->content =  View::make('pages.index', compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pages/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->layout->content = View::make('pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pages
	 *
	 * @return Response
	 */
	public function store()
	{
        $files = Input::file('files');
//        foreach($files as $file) {
//            $rules = array(
//                'file' => 'required|mimes:png,gif,jpeg|max:20000'
//            );
//            $validator = \Validator::make(array('file' => $file), $rules);
//
//            if($validator->passes()) {
//                $ext = $file->guessClientExtension();
//                $filename = $file->getClientOriginalName();
//                $file->move('uploads/', $filename);
//            }
//            else{
//                return Redirect::back()
//                    //->with('error', '<i class="fa fa-exclamation-triangle fa-lg"></i> Something went wrong! ')
//                    ->withErrors($validator)
//                    ->withInput();
//            }
//        }
        $page = new Page();
        $page->title = Input::get('title');
        $page->slug = Input::get('slug');
        $page->content = Input::get('content');
        $page->save();
        return Redirect::route('pages.index')->with('success','Page created');
	}

	/**
	 * Display the specified resource.
	 * GET /{slug}
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
        $page = Page::where('slug', '=', $slug)->first();
        if(!$page){
            App::abort(404);
        }
        $this->layout->content = View::make('pages.show', array('page' => $page));
    }

	/**
	 * Show the form for editing the specified resource.
	 * GET /pages/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $page = Page::findOrFail($id);
        $this->layout->content = View::make('pages.edit')->with('page', $page);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $page = Page::find($id);
        $page->title = Input::get('title');
        $page->slug = Input::get('slug');
        $page->content = Input::get('content');
        $page->save();
        return Redirect::route('page.show', $page->slug);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Page::destroy($id);
        return Redirect::route('pages.index');
	}

}