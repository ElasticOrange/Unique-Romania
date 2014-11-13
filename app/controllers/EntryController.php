<?php

class EntryController extends BaseController {

    public $return_data = [];

    private $picture_path = '';

    public function __construct()
    {
        $this->picture_path = storage_path() .'/pictures/';
    }

    public function getIndex()
    {
        return View::make('entry', $this->return_data);
    }

    public function postImage()
    {
        $picture = Input::file('picture');
        $new_name = md5(microtime()) .'.png';

        $picture->move($this->picture_path, $new_name);

        return Response::json([
            'name' => $new_name
        ]);
    }

    public function getSmallImage($name)
    {
        $name = str_replace('..', '', $name);
        $name = str_replace('/', '', $name);

        $image_path = $this->picture_path . $name;
        $image = Image::make($image_path)->fit(210, 140);

        return $image->response('png');
    }

    public function getBigImage($name)
    {
        $name = str_replace('..', '', $name);
        $name = str_replace('/', '', $name);

        $image_path = $this->picture_path . $name;
        $image = Image::make($image_path);

        return $image->response('png');
    }
}
