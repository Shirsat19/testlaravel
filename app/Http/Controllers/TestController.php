<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use View;
use App\Models\Test;
use Jenssegers\Agent\Agent;


class TestController extends Controller
{
    //
    public function __construct()
    {
        $this->agent = new Agent();
    }
    public function index(){
        return View::make("Home")
            ->with('a','dhjf h');
    }

    public function dynamic($test){
        dd($this->agent->isMobile());
        return View::make('Home')
            ->with('a',$test);
    }

    public function insert(Request $request){
        $name=$request->input('name');
        dd($name);

    }
    public function update(Request $request , $id){
        $name=$request->input('name');

        dd($name.' '.$id);

    }
}
