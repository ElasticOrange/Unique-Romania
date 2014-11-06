<?php

class GalleryController extends BaseController {

    public $return_data = [];

    public function getIndex()
    {
        return View::make('gallery', $this->return_data);
    }
}
