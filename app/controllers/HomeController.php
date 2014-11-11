<?php

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

class HomeController extends BaseController {

    public $return_data = [];

    public function postIndex()
    {
        // Check if the user is logged in
        $facebook_session = Session::get('facebook-session');
        $facebook_user = Session::get('facebook-user');

        if (!$facebook_session or !$facebook_user)
        {
            // User is not logged in
            $helper = new FacebookRedirectLoginHelper(Config::get('facebook.redirect_url'));
            $this->return_data['loginUrl'] = $helper->getLoginUrl();
            return Redirect::to($this->return_data['loginUrl']);
        }

        return View::make('home', $this->return_data);
    }

    public function getLogin()
    {
        $helper = new Facebook\FacebookRedirectLoginHelper(Config::get('facebook.redirect_url'));

        try
        {
            // Get and save the session
            $session = $helper->getSessionFromRedirect();
            Session::put('facebook-session', $session);

            // Get and save the user data
            $user_profile = (new FacebookRequest($session, 'GET', '/me'))->execute()->getGraphObject(GraphUser::className());
            Session::put('facebook-user', $user_profile);

            // Redirect to the first page
            return Redirect::to('/logged');
        }
        catch(\Exception $e)
        {
            return Redirect::to('/error');
        }
    }

    public function getLogged()
    {
        $facebook_user = Session::get('facebook-user');

        // If the user is already in the database, login him and go back to homepage
        $user = User::where('facebook_id', $facebook_user->getId())->first();
        if ($user)
        {
            Auth::login($user);
        }
        else
        {
            $new_user = [
                'facebook_id' => $facebook_user->getId()
                , 'name' => $facebook_user->getName()
            ];
            $user = User::create($new_user);

            Auth::login($user);
        }

        return Redirect::to('/');
    }
}
