<?php

class Admin extends \Moloquent {
    protected $fillable = [];

    static public function login($Username, $Password)
    {
        $admin = Admin::where('username', $Username)->where('password', md5($Password))->first();

        return $admin;
    }
}
