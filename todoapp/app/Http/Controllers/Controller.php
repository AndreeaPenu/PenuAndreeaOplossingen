<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function getIndex(){
       $items = Auth::user()->items;

        return view('home', array(
            'items' => $items
        ));
    }

    public function postIndex(){
        $id =  Input::get('id');
        $item = Item::findOrFail($id);
        

        if($item->owner_id == Auth::user()->id){ //als owner id en user id overeen komen enkel dan aanduiden
            $item->mark();
        }

        return Redirect::route('home');
    }


    public function getNew(){

        return view('new');
    }

    public function postNew(){

        $rules=array('name'=>'required|min:3|max:255');
        $validator = Validator::make(Input::all(),$rules);


        if($validator->fails()){
                return Redirect::route('new')->withErrors($validator);
        }

        $item = new Item;
        $item->name=Input::get('name');
        $item->owner_id=Auth::user()->id;
        $item->save();


        return Redirect::route('home');

    }


    public function getDelete(Item $task){
        if($task->owner_id == Auth::user()->id){
            $task->delete();
        }

        return Redirect::route('home');
    }

    public function getLogin(){
        return view('login');
    }

    public function postLogin(){
        $rules = array('username' => 'required', 'password' => 'required');
        $validator = validator(Input::all(),$rules);

        if($validator->fails()){
            return Redirect::route('login')->withErrors($validator);
        }

        $auth = Auth::attempt(array(
            'name' => Input::get('username'),
            'password' => Input::get('password')
        ),false);

        if(!$auth){
            return Redirect::route('login')->withErrors(array(
                'Invalid credentials were provided'
            ));
        }
        return Redirect::route('home');
    }

}


