<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class stock extends Controller
{


    public function index (){

    	$table=DB::table('stock');

		$id= $table->select('id')->value('id');	
		$name=$table->select('name')->value('name');
		$prix=$table->select('prix')->value('prix');
		$quantité=$table->select('quantité')->value('quantité');

        return view('index')->with('id',$id)
                            ->with('name',$name)
                            ->with('prix',$prix)
                            ->with('quantité',$quantité);
    }

    public function addQuant (){
        DB::table('stock')->increment('quantité', 1);  
        return redirect()->back();
    }

    public function delQuant (){
          DB::table('stock')->decrement('quantité', 1);
          return redirect()->back();  
          
    }

}
