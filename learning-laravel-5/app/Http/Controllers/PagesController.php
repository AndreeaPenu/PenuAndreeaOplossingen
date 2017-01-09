<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){
        $name = 'Andreea Penu';
        $people = [
            'Taylor','Daryl','Zoe'
        ];

        return view('pages.about',compact('name','people'));
    }

    public function contact(){
        return view('pages.contact');
    }

}
