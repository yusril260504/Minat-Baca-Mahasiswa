<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dokumentasiController extends Controller
{
    public function dokumentasi(){
        return view("dokumentasi");
    }
}
