<?php

class GalleryController extends BaseController {

    public $return_data = [];

    public function getIndex()
    {
        $this->return_data['entries'] = Entry::where('approved', true)->take(10)->get();

        return View::make('gallery', $this->return_data);
    }
}
