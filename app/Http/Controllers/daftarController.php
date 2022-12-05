<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class daftarController extends Controller
{
    public function index (){
        $data = daftar::all();
        return view ('datapelanggan',compact('data'));
    }
}
