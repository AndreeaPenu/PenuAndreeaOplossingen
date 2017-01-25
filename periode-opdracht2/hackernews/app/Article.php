<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $fillable = [
        'title',
        'url'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }


    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public static $rules = [
        'title'=>'required',
        'url' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'
    ];
}
