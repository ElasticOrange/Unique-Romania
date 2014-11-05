<?php

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

class HomeController extends BaseController {

    public $return_data = [];

    public function postIndex()
    {
        // User is not logged in
        $helper = new FacebookRedirectLoginHelper(Config::get('facebook.redirect_url'));
        $this->return_data['loginUrl'] = $helper->getLoginUrl();

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
        $user = Session::get('facebook-user');

        print_r($user->asArray());
    }
}
