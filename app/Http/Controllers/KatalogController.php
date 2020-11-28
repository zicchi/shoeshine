<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KatalogController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
		$katalog = DB::table('katalog')->get();
		
 
    	// mengirim data pegawai ke view index
    	return view('home',['katalog' => $katalog]);
 
    }
}
