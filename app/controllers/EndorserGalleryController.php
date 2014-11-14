<?php

class EndorserGalleryController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /endorsergallery
     *
     * @return Response
     */
    public function getIndex()
    {
        //
        return View::make('endorsergallery');
    }

}
