<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class stock extends Controller
{


    public function index (){
		$stock = DB::table('stock')->get();
        return view('index')->with('stock',$stock);
    }
}
