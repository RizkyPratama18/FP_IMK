<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller{
    
    public function viewJudul($judul){
    	$data=array(
    		'judul'=>$judul
    	);
	return view('Book',$data);
	}
}

