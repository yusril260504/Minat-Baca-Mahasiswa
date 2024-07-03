<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class berandaController extends Controller
{
    public function beranda(){
        return view("beranda");
    }
}
