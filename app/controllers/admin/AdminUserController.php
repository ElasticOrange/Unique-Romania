<?php

class AdminUserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = Admin::all();
    
        return View::make('admin.user.index')->withUsers($users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
        $user = Admin::where('username', '=', Input::get('username'))->get();
        
        if($user->count() < 1)
        {
            $user = new Admin;
            $user->username = Input::get('username');
            $user->password = md5(Input::get('password'));

            $user->save();
            
            return Response::json(array(
                  'status' => 'OK'
                , 'message' => 'Userul nu exista'
            ));
        }
        else
        {
            return Response::json(array(
                  'status' => 'not OK'
                , 'message' => 'Userul exista'
            ));
        }
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = Admin::find($id);

        return View::make('admin.user.edit', [ 'user' => $user ]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = Admin::find($id);
 
        $user->username = Input::get('username');
        $user->password = md5(Input::get('password'));
 
        $user->save();
 
        return Redirect::to('/admin/user');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Admin::destroy($id);
 
        return Redirect::to('/admin/user');
	}

}
