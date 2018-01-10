<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;

class PelangganController extends Controller
{
    function insert(Request $request){
    	$pelanggan = new Pelanggan;

    		$pelanggan->nama = $request->nama;
    		$pelanggan->email = $request->email;
    		$pelanggan->nomer_handphone = $request->nomer_handphone;
    		$pelanggan->alamat = $request->alamat;
    		$pelanggan->password = $request->password;

    	$pelanggan->save();
        session_start();
        $_SESSION['username'] = $pelanggan->nama;
    	return redirect('/');
    }
}