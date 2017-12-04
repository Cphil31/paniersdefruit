<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stock extends Controller
{


    public function index (){
		$stock = DB::table('stock')->get();

        return view('home', ['stock' => $stock]);
    };
}
