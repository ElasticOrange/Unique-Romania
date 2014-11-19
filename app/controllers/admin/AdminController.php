<?php

class AdminController extends \BaseController {

    public function getIndex()
    {
        return Redirect::to('/admin/entry');
    }

}
