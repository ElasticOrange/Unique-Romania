<?php

class AdminLoginController extends \BaseController {

    public function getIndex()
    {
        return View::make('admin.login.index');
    }

    public function postIndex()
    {
        $admin = Admin::login(Input::get('username'), Input::get('password'));

        if ($admin)
        {
            Session::put('admin', $admin);
            return Redirect::to('/admin/entry');
        }
        else
        {
            return Redirect::to('/admin/login');
        }
    }

    public function getLogout()
    {
        Session::forget('admin');

        return Redirect::to('/admin/login');
    }

}
