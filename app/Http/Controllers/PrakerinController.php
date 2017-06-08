<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
	{
    //
    public function percobaan()
    {
    	$a = "Padil Paturohman ";
    	$b = "jajang nurjaman";
    	return view('index', compact ('a', 'b'));
    }
    public function param($id)
    {
    	return view('welcome');
    }
    public function parameter($f)
    {

    	return view('hallo', compact('f'));
    }
}

