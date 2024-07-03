<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User; // Pastikan model User diimport

class DashboardController extends Controller
{
    public function dashboard()
    {
        $apiKey = session('api_key'); // Mengambil api_key dari session
        $name = session('user_name'); // Mengambil user_name dari session

        return view('dashboard', compact('apiKey', 'name'));
    }

    public function generateToken(Request $request)
    {
        // Asumsikan user terautentikasi
        $user = Auth::user();
        $newApiKey = Str::random(32); // Membuat API key baru

        // Simpan API key baru di database
        $user->api_key = $newApiKey;
        $user->save();

        // Update session
        session(['api_key' => $newApiKey]);

        return response()->json(['apiKey' => $newApiKey]);
    }
}
