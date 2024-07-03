<?php

namespace App\Http\Controllers;

use App\Models\MinatBaca;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

// class EndpointController extends Controller
// {
//     public function selectdataJeniskelamin(Request $request)
//     {
//         // Validasi input
//         $request->validate([
//             'jenis_kelamin' => 'required|string',
//             'api_key' => 'required|string',
//         ]);

//         // Ambil pengguna berdasarkan API key
//         $user = User::where('api_key', $request->api_key)->first();

//         // Jika API key tidak valid
//         if (!$user) {
//             return response()->json([
//                 'code' => 401,
//                 'description' => 'API Key tidak valid',
//                 'message' => 'Unauthorized access. Invalid API key.'
//             ], 401);
//         }

//         // Ambil data berdasarkan jenis kelamin
//         $minatBacaJeniskelamin = MinatBaca::where('jenis_kelamin', $request->jenis_kelamin)->get();

//         // Jika data tidak ditemukan
//         if ($minatBacaJeniskelamin->isEmpty()) {
//             return response()->json([
//                 'code' => 404,
//                 'description' => 'Data tidak ditemukan',
//                 'message' => 'Data tidak ditemukan untuk jenis kelamin ' . $request->jenis_kelamin
//             ], 404);
//         }

//         // Jika data ditemukan
//         return response()->json([
//             'code' => 200,
//             'description' => 'Data berhasil ditampilkan',
//             'message' => 'Data berhasil ditampilkan untuk jenis kelamin ' . $request->jenis_kelamin,
//             'data' => $minatBacaJeniskelamin
//         ]);
//     }

//     public function selectdataKampus(Request $request)
//     {
//         // Validasi input
//         $request->validate([
//             'nama_perguruan_tinggi' => 'required|string',
//             'api_key' => 'required|string',
//         ]);

//         // Ambil pengguna berdasarkan API key
//         $user = User::where('api_key', $request->api_key)->first();

//         // Jika API key tidak valid
//         if (!$user) {
//             return response()->json([
//                 'code' => 401,
//                 'description' => 'API Key tidak valid',
//                 'message' => 'Unauthorized access. Invalid API key.'
//             ], 401);
//         }

//         // Ambil data berdasarkan nama perguruan tinggi
//         $minatBacaKampus = MinatBaca::where('nama_perguruan_tinggi', $request->nama_perguruan_tinggi)->get();

//         // Jika data tidak ditemukan
//         if ($minatBacaKampus->isEmpty()) {
//             return response()->json([
//                 'code' => 404,
//                 'description' => 'Data tidak ditemukan',
//                 'message' => 'Data tidak ditemukan untuk nama perguruan tinggi ' . $request->nama_perguruan_tinggi
//             ], 404);
//         }

//         // Jika data ditemukan
//         return response()->json([
//             'code' => 200,
//             'description' => 'Data berhasil ditampilkan',
//             'message' => 'Data berhasil ditampilkan untuk nama perguruan tinggi ' . $request->nama_perguruan_tinggi,
//             'data' => $minatBacaKampus
//         ]);
//     }

//     public function selectdatasemester(Request $request)
//     {
//         // Validasi input
//         $request->validate([
//             'semester' => 'required|string',
//             'api_key' => 'required|string',
//         ]);

//         // Ambil pengguna berdasarkan API key
//         $user = User::where('api_key', $request->api_key)->first();

//         // Jika API key tidak valid
//         if (!$user) {
//             return response()->json([
//                 'code' => 401,
//                 'description' => 'API Key tidak valid',
//                 'message' => 'Unauthorized access. Invalid API key.'
//             ], 401);
//         }

//         // Ambil data berdasarkan semester
//         $minatBacaSemester = MinatBaca::where('semester', $request->semester)->get();

//         // Jika data tidak ditemukan
//         if ($minatBacaSemester->isEmpty()) {
//             return response()->json([
//                 'code' => 404,
//                 'description' => 'Data tidak ditemukan',
//                 'message' => 'Data tidak ditemukan untuk semester ' . $request->semester
//             ], 404);
//         }

//         // Jika data ditemukan
//         return response()->json([
//             'code' => 200,
//             'description' => 'Data berhasil ditampilkan',
//             'message' => 'Data berhasil ditampilkan untuk semester ' . $request->semester,
//             'data' => $minatBacaSemester
//         ]);
//     }

// }

class EndpointController extends Controller
{
    public function selectdata(Request $request)
    {
        // Validasi input umum
        $request->validate([
            'jenis_kelamin' => 'nullable|string',
            'nama_perguruan_tinggi' => 'nullable|string',
            'semester' => 'nullable|string',
            'api_key' => 'required|string',
        ]);

        // Ambil pengguna berdasarkan API key
        $user = User::where('api_key', $request->api_key)->first();

        // Jika API key tidak valid
        if (!$user) {
            return response()->json([
                'code' => 401,
                'description' => 'API Key tidak valid',
                'message' => 'Unauthorized access. Invalid API key.'
            ], 401);
        }

        // Ambil data berdasarkan parameter yang diberikan
        $query = MinatBaca::query();

        if ($request->has('jenis_kelamin')) {
            $query->where('jenis_kelamin', $request->jenis_kelamin);
        }
        if ($request->has('nama_perguruan_tinggi')) {
            $query->where('nama_perguruan_tinggi', $request->nama_perguruan_tinggi);
        }
        if ($request->has('semester')) {
            $query->where('semester', $request->semester);
        }

        $data = $query->get();

        // Jika data tidak ditemukan
        if ($data->isEmpty()) {
            return response()->json([
                'code' => 404,
                'description' => 'Data tidak ditemukan',
                'message' => 'Data tidak ditemukan untuk parameter yang diberikan'
            ], 404);
        }

        // Jika data ditemukan
        return response()->json([
            'code' => 200,
            'description' => 'Data berhasil ditampilkan',
            'message' => 'Data berhasil ditampilkan untuk parameter yang diberikan',
            'data' => $data
        ]);
    }


    public function selectdataProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'api_key' => 'required|string',
        ]);

        // Ambil pengguna berdasarkan API key
        $user = User::where('api_key', $request->api_key)->first();

        // Jika API key tidak valid
        if (!$user) {
            return response()->json([
                'code' => 401,
                'description' => 'API Key tidak valid',
                'message' => 'Unauthorized access. Invalid API key.'
            ], 401);
        }

        // Ambil data pengguna
        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'phone_number' => $user->phone_number,
            'password' => $user->password,  // Perhatikan: Tidak disarankan menampilkan password dalam response
            'jeniskelamin' => $user->jeniskelamin,
            'alamat' => $user->alamat,
        ];

        // Jika data ditemukan
        return response()->json([
            'code' => 200,
            'description' => 'Data berhasil ditampilkan',
            'message' => 'Data pengguna berhasil ditampilkan',
            'data' => $data
        ]);
    }

    public function create(Request $request) {
         // Ambil pengguna berdasarkan API key
         $user = User::where('api_key', $request->api_key)->first();

         // Jika API key tidak valid
         if (!$user) {
             return response()->json([
                 'code' => 401,
                 'description' => 'API Key tidak valid',
                 'message' => 'Unauthorized access. Invalid API key.'
             ], 401);
         }
        // Validation rules for required fields
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'nama_perguruan_tinggi' => 'required',
            'jurusan' => 'required',
            'semester' => 'required',
            'genre_buku_yang_sering_dibaca' => 'required',
            'jumlah_buku_yang_sering_dibaca_dalam_1bulan' => 'required',
            'alasan_membaca_buku' => 'required',
            'tempat_membaca_buku' => 'required',
            'durasi_membaca_buku_perhari' => 'required',
            'tingkat_kegemaran_baca_buku' => 'required',
            // Add more validation rules for other required fields
        ]);

        // If validation fails, return error 404 with validation errors
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Kolom yang wajib tidak terisi',
                'status' => '404 ERROR',
                'errors' => $validator->errors()->all()

            ], 404);
        }

        // If validation passes, create the record
        $create = MinatBaca::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_perguruan_tinggi' => $request->nama_perguruan_tinggi,
            'jurusan' => $request->jurusan,
            'semester' => $request->semester,
            'genre_buku_yang_sering_dibaca' => $request->genre_buku_yang_sering_dibaca,
            'jumlah_buku_yang_sering_dibaca_dalam_1bulan' => $request->jumlah_buku_yang_sering_dibaca_dalam_1bulan,
            'alasan_membaca_buku' => $request->alasan_membaca_buku,
            'tempat_membaca_buku' => $request->tempat_membaca_buku,
            'durasi_membaca_buku_perhari' => $request->durasi_membaca_buku_perhari,
            'tingkat_kegemaran_baca_buku' => $request->tingkat_kegemaran_baca_buku
        ]);

        // Prepare data for response
        $news = [
            'id' => $create->id,
            'Nama' => $create->nama,
            'Jenis Kelamin' => $create->jenis_kelamin,
            'Nama Perguruan Tinggi' => $create->nama_perguruan_tinggi,
            'Jurusan' => $create->jurusan,
            'Semester' => $create->semester,
            'Genre Buku yang Sering Dibaca' => $create->genre_buku_yang_sering_dibaca,
            'Jumlah Buku yang Sering Dibaca dalam 1 Bulan' => $create->jumlah_buku_yang_sering_dibaca_dalam_1bulan,
            'Alasan Membaca Buku' => $create->alasan_membaca_buku,
            'Tempat Membaca Buku' => $create->tempat_membaca_buku,
            'Durasi Membaca Buku per Hari' => $create->durasi_membaca_buku_perhari,
            'Tingkat Kegemaran Baca Buku' => $create->tingkat_kegemaran_baca_buku
        ];

        // Return success response
        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'status' => '200 OK',
            'data' => $news
        ], 200);
    }


}

