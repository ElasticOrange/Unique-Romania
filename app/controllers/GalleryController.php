<?php

class GalleryController extends BaseController {

    public $return_data = [
        'per_page' => 10
    ];

    public function getIndex()
    {
        $this->return_data['entries'] = Entry::with('user')->where('approved', true)->take($this->return_data['per_page'])->get();

        return View::make('gallery', $this->return_data);
    }

    public function getPage($Page, $Search_term = '')
    {
        // If there is a search term specified simulate the whereHas method because Moloquent does not have it implemented
        if (!empty($Search_term))
        {
            $users = User::where('name', 'like', "%$Search_term%")->get();
            $uids = array();
            foreach($users as $u)
            {
                $uids[] = $u->_id;
            }
        }

        $entries_query = Entry::where('approved', true);
        if (!empty($Search_term))
        {
            $entries_query->whereIn('user_id', $uids);
        }

        $entries = $entries_query
            ->skip($this->return_data['per_page'] * $Page)
            ->take($this->return_data['per_page'])
            ->get();

        $this->return_data['page'] = $Page;
        $this->return_data['html'] = '';
        $this->return_data['entries'] = $entries->toArray();
        foreach($entries as $entry)
        {
            $this->return_data['html'] = $this->return_data['html'] . View::make('partials.gallery.entry', ['entry' => $entry])->render();
        }

        $this->return_data['page'] = $Page;
        $this->return_data['search_term'] = $Search_term;

        return Response::json($this->return_data);
    }
}
