<?php

class PagesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
        foreach($files as $file) {
            $rules = array(
                'file' => 'required|mimes:png,gif,jpeg|max:20000'
            );
            $validator = \Validator::make(array('file' => $file), $rules);

            if($validator->passes()) {
                $ext = $file->guessClientExtension();
                $filename = $file->getClientOriginalName();
                $file->move('uploads/', $filename);
            }
            else{
                return Redirect::back()
                    //->with('error', '<i class="fa fa-exclamation-triangle fa-lg"></i> Something went wrong! ')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
        return Redirect::route('pages.index')->with('success','Page created');
	}

	/**
	 * Display the specified resource.
	 * GET /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		//
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
		//
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
		//
	}

}