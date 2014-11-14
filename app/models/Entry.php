<?php
class Entry extends \Moloquent {
    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
    ];
    // Don't forget to fill this array
    protected $fillable = [
        'approved'
        , 'article'
        , 'pictures'
        , 'video'
        , 'name'
        , 'email'
        , 'phone'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }
}
