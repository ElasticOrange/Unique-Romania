<?php

class AdminEntryController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /adminentry.php
     *
     * @return Response
     */
    public function getIndex()
    {
        $entries = Entry::where('approved', false)->orderBy('created_at', 'desc')->get(); 
                
        //print_r($entries->toArray());
        
        
        return View::make('admin.entry.index', array('entries' => $entries));
    }
    public function put()
    {
        $entries = Entry::all();
        $entries->approved = true;
        $entries->save();
    }
}
