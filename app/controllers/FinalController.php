<?php

class FinalController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /final
     *
     * @return Response
     */
    public function getIndex()
    {
        //
        return View::make('final');
    }



}
