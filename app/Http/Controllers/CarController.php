<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jualmobil;
use App\Merk;
use App\Type;
use App\Tahun;

class CarController extends Controller
{
    function show()
    {
    	$jualMobilAll 		= Jualmobil::where('status','Ya')->get();
    	$jmlBaris 			= Jualmobil::get()->count();
    	$merkMobil 			= Merk::get();
    	$type_mobil 		= Type::get();
    	$tahun 				= Tahun::orderBy('tahun','asc')->get();
    	$jualMobilTerbaru 	= Jualmobil::where('status','Ya')
    	->orderBy('created_at', 'DESC')
    	->offset(0) //mulai dari record 
    	->limit(4)	//akhir dari record
    	->get();
        $jualMobilPopular   = Jualmobil::where('status','Ya')
        ->orderBy('lihat', 'DESC')
        ->offset(0) //mulai dari record 
        ->limit(7)  //akhir dari record
        ->get();

    	return view('buy')
    	->with('carAll',$jualMobilAll)
    	->with('carTerbaru',$jualMobilTerbaru)
    	->with('carTotals',$jmlBaris)
    	->with('carMerks',$merkMobil)
    	->with('carTypes',$type_mobil)
    	->with('tahun',$tahun)
        ->with('carPopular',$jualMobilPopular);
    }
    function showWhereId($id)
    {
    	$jualmobil = Jualmobil::find($id);
    	if ($jualmobil != null) {
	    	return view('detailBuy')
	    	->with('car',$jualmobil);
    	}
    }
    function showIndex()
    {
        $listCar = Jualmobil::where('status','Ya')
        ->orderBy('created_at', 'DESC')
        ->offset(0) //mulai dari record
        ->limit(6)  //akhir dari record
        ->get();
    
        return view('index')
        ->with('listCar',$listCar);
    }
}
