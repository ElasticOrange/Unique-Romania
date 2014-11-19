<?php

class EntryController extends BaseController {

    public $return_data = [];

    private $picture_path = '';

    public function __construct()
    {
        $this->picture_path = storage_path() .'/pictures/';
    }

    /* Display the 4 step form to enter text, pictures or video.
     *
     */
    public function getIndex()
    {
        $facebook_user = Session::get('facebook-user');
        $user = User::where('facebook_id', $facebook_user->getId())->first();

        if (!$user or !$facebook_user)
        {
            return Redirect::to('/');
        }

        $this->return_data['entry'] = $user->entry;
        return View::make('entry', $this->return_data);
    }

    /* Data that was posted for the entry
     *
     */
    public function postIndex()
    {
        $facebook_user = Session::get('facebook-user');
        $user = User::where('facebook_id', $facebook_user->getId())->first();

        // Get the current entry or create a new one
        if (count($user->entry))
        {
            $entry = $user->entry;
        }
        else
        {
            $entry = new Entry();
        }

        $entry->approved = true;
        $entry->article = [
            'content' => Input::get('article')
        ];
        $entry->pictures = Input::get('pictures');
        $entry->video = Input::get('video');
        $entry->name = Input::get('name');
        $entry->email = Input::get('email');
        $entry->phone = Input::get('phone');

        $user->entry()->save($entry);

        return Redirect::to('/final');
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
        $image = Image::cache(
            function ($img) use ($image_path)
            {
                return $img->make($image_path)->fit(210, 140);
            }
            , 1440
            , true
        );

        return $image->response('png');
    }

    public function getBigImage($name)
    {
        $name = str_replace('..', '', $name);
        $name = str_replace('/', '', $name);

        $image_path = $this->picture_path . $name;
        $image = Image::cache(
            function ($img) use ($image_path)
            {
                return $img->make($image_path)->resize(760, null, function($constraint)
                {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }
            , 1440
            , true
        );

        return $image->response('png');
    }

    public function getAvatarImage($user_id)
    {
        $image = Image::cache(
            function ($img) use ($user_id)
            {
                return $img->make("https://graph.facebook.com/$user_id/picture?type=normal")->fit(64, 64);
            }
            , 1440
            , true
        );

        return $image->response('png');
    }
}
