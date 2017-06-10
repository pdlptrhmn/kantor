<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coba;
class CobaController extends Controller
{
    //
    public function test()
    {
    	$a = coba::all();
    	return $a;
    }
    public function test1($id)
    {
    	$a = coba::find($id);
    	return $a;
    }


    public function indexx($id)
    {
    	$tampilan = coba::find($id);
    	return $tampilan;
    }

    public function indexxx($id)
    {
        $tampilan = coba::where('jurusan','like','%'.$id.'%')-> ORwhere('nama','like','%'.$id.'%')->get();

        return $tampilan;
    }



        public function ulang()
    {
    	$data = ['ali', 'ari', 'ani', 'andri', 'andra'];
    	return view('index', compact('data'));
    }







            public function ff($ata)
    {
    	$koplak = ['bintang' => ['kadal', 'buaya', 'biawak', 'bunglon'],
    				'kendaraan' => ['mobil', 'motor', 'sepeda', 'bus'],
    				'laptop' => ['polytron', 'lg', 'asus', 'acer']

    			];
    			$ddd = $koplak[$ata];
    	
    	return view('campur', compact('ddd'));
    }




}