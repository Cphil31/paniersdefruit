<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class stock extends Controller
{


    public function index (){
    	$table=DB::table('stock');
		$id= $table->select('id')->value('id');	
        return view('index')->with('id',$id);
    }
}
