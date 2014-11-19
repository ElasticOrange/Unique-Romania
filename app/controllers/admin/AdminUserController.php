<?php

class AdminUserController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /adminentry.php
     *
     * @return Response
     */
    public function getIndex()
    {
        $users = Admin::all();
        //
        return View::make('admin.user.index', array('users' => $users));
    }

}
