<?php

class GalleryController extends BaseController {

    public $return_data = [
        'per_page' => 10
    ];

    public function getIndex()
    {
        $this->return_data['entries'] = Entry::where('approved', true)->take($this->return_data['per_page'])->get();

        return View::make('gallery', $this->return_data);
    }

    public function getPage($Page)
    {
        sleep(25);

        $entries = Entry::where('approved', true)
            ->skip($this->return_data['per_page'] * $Page)
            ->take($this->return_data['per_page'])
            ->get();

        $this->return_data['page'] = $Page;
        $this->return_data['html'] = '';
        foreach($entries as $entry)
        {
            $this->return_data['html'] = $this->return_data['html'] . View::make('partials.gallery.entry', ['entry' => $entry])->render();
        }

        return Response::json($this->return_data);
    }
}
