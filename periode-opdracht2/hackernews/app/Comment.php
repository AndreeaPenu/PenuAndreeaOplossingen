<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    //

    use SoftDeletes;

    protected $dates = ['deleted at'];

    protected $fillable = [
        'article_id',
        'author',
        'body'
    ];


    public function article(){
        return $this->belongsTo('App\Article');
    }

    public static $rules = [
        'body'=>'required'
    ];
}
