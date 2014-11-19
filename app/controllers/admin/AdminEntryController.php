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

        return View::make('admin.entry.index', array('entries' => $entries));
    }
    
    public function getDisapprove()
    {
        $entries = Entry::where('approved', true)->orderBy('created_at', 'desc')->get();

        return View::make('admin.entry.disapprove', array('entries' => $entries));
    }

    public function putApprove()
    {
        $entry = Entry::find(Input::get('id'));
        $entry->approved = true;
        $entry->save();

        return Response::json(array(
            'status' => 'OK'
            , 'error' => ''
            , 'id' => Input::get('id')
        ));
    }
    
    public function putDisapprove()
    {
        $entry = Entry::find(Input::get('id'));
        $entry->approved = false;
        $entry->save();

        return Response::json(array(
            'status' => 'OK'
            , 'error' => ''
            , 'id' => Input::get('id')
        ));
    }
}
