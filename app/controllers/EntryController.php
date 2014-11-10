<?php

class EntryController extends BaseController {

    public $return_data = [];

    public function getIndex()
    {
        return View::make('entry', $this->return_data);
    }
}
