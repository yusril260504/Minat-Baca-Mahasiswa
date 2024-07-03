<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MinatBaca;

class FormController extends Controller
{
    public function form(Request $request)
    {
        $results = null;
        $error_message = null;
        $success_message = null;

        // Fetch distinct values for the select options
        $jenis_kelamin_options = MinatBaca::select('jenis_kelamin')->distinct()->get();
        $nama_perguruan_tinggi_options = MinatBaca::select('nama_perguruan_tinggi')->distinct()->get();
        $semester_options = MinatBaca::select('semester')->distinct()->get();

        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'jenis_kelamin' => 'required|string',
                'nama_perguruan_tinggi' => 'required|string',
                'semester' => 'required|string',
            ]);

            $results = MinatBaca::where('jenis_kelamin', $request->jenis_kelamin)
                ->where('nama_perguruan_tinggi', $request->nama_perguruan_tinggi)
                ->where('semester', $request->semester)
                ->get();

            if ($results->isNotEmpty()) {
                $success_message = "Data berhasil ditemukan.";
            } else {
                $error_message = "Data tidak ada.";
            }
        }

        return view('form', compact('results', 'jenis_kelamin_options', 'nama_perguruan_tinggi_options', 'semester_options', 'error_message', 'success_message'));
    }
}
