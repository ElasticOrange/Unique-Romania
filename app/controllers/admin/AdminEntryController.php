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
        //
        return View::make('admin.entry.index');
    }

}
