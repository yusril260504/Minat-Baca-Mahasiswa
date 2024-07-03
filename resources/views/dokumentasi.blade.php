@extends('main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dokumentasi API</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <button type="button" class="btn btn-block btn-danger" onclick="window.location.href='{{ route('logout') }}'">Logout</button>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card card-solid">
            <div class="card-body">
                <h7>Dokumentasi ini menjelaskan cara mengakses layanan API Data Minat Baca Mahasiswa.
                    Anda mendapatkan data mahasiswa yang memiliki beragam tingkat kegemaran membaca buku pada berbagai
                    kampus di seluruh Indonesia. Selain itu disertai juga dengan informasi alasan, durasi dan tempat membaca buku mahasiswa tersebut.</h7>
                <br><br>
                <h3><b>selectdata</b></h3>
                <h4>Ringkasan</h4>
                <h7>Method "selectdata" digunakan untuk menampilkan data minat baca mahasiswa dan juga bisa berdasarkan jenis kelamin, semester, dan nama perguruan tingginya</h7>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h4>Request</h4>
                        <!-- Navigation Tab 1 -->
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="request-tab" role="tablist">
                                <a class="nav-item nav-link active" id="request-desc-tab" data-toggle="tab" href="#request-desc" role="tab" aria-controls="request-desc" aria-selected="true">URL</a>
                                <a class="nav-item nav-link" id="request-comments-tab" data-toggle="tab" href="#request-comments" role="tab" aria-controls="request-comments" aria-selected="false">Parameter</a>
                                <a class="nav-item nav-link" id="request-example-tab" data-toggle="tab" href="#request-example" role="tab" aria-controls="request-example" aria-selected="false">Contoh Request (PHP)</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="request-tabContent">
                            <div class="tab-pane fade show active" id="request-desc" role="tabpanel" aria-labelledby="request-desc-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>GET</td>
                                                <td>http://127.0.0.1:13000/api/selectdata</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="request-comments" role="tabpanel" aria-labelledby="request-comments-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>Parameter</th>
                                                <th>Wajib</th>
                                                <th>Tipe</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>GET/HEAD</td>
                                                <td>api_key</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>API KEY</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>GET</td>
                                                <td>jenis_kelamin</td>
                                                <td>Tidak</td>
                                                <td>String</td>
                                                <td>jenis kelamin mahasiswa</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>GET</td>
                                                <td>semester</td>
                                                <td>Tidak</td>
                                                <td>String</td>
                                                <td>semester mahasiswa</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>GET</td>
                                                <td>nama_perguruan_tinggi</td>
                                                <td>Tidak</td>
                                                <td>String</td>
                                                <td>nama perguruan tinggi mahasiswa</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="request-example" role="tabpanel" aria-labelledby="request-example-tab">
                                <div class="card-body">
                                    <pre>
                                        <code>
                                            &lt;!DOCTYPE html&gt;
                                            &lt;html lang="en"&gt;
                                            &lt;head&gt;
                                            &lt;meta charset="UTF-8"&gt;
                                            &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                                            &lt;title&gt;Book Reading Preferences&lt;/title&gt;
                                            &lt;style&gt;
                                                body {
                                                    font-family: Arial, sans-serif;
                                                    background-color: #f0f0f0;
                                                    margin: 0;
                                                    padding: 0;
                                                }
                                                .container {
                                                    width: 80%;
                                                    margin: 0 auto;
                                                    padding: 20px;
                                                    border-radius: 10px;
                                                    background-color: #ffffff;
                                                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                                }
                                                h2 {
                                                    text-align: center;
                                                    color: #333333;
                                                    margin-bottom: 20px;
                                                }
                                                form div {
                                                    margin-bottom: 20px;
                                                }
                                                label {
                                                    display: block;
                                                    margin-bottom: 5px;
                                                    color: #555555;
                                                }
                                                input, select {
                                                    width: calc(100% - 22px);
                                                    padding: 10px;
                                                    margin-top: 5px;
                                                    box-sizing: border-box;
                                                    border: 1px solid #cccccc;
                                                    border-radius: 5px;
                                                    background-color: #f9f9f9;
                                                    color: #333333;
                                                }
                                                button {
                                                    width: 100%;
                                                    padding: 12px 15px;
                                                    background-color: #4CAF50;
                                                    color: white;
                                                    border: none;
                                                    border-radius: 5px;
                                                    cursor: pointer;
                                                    font-size: 16px;
                                                    transition: background-color 0.3s;
                                                }
                                                button:hover {
                                                    background-color: #45a049;
                                                }
                                                .message {
                                                    padding: 15px;
                                                    margin-top: 20px;
                                                    border-radius: 5px;
                                                    text-align: center;
                                                    font-weight: bold;
                                                }
                                                .error {
                                                    background-color: #f8d7da;
                                                    color: #721c24;
                                                    border: 1px solid #f5c6cb;
                                                }
                                                .success {
                                                    background-color: #d4edda;
                                                    color: #155724;
                                                    border: 1px solid #c3e6cb;
                                                }
                                                .table-container {
                                                    width: 100%;
                                                    overflow-x: auto;
                                                    margin-top: 20px;
                                                }
                                                table {
                                                    width: 100%;
                                                    border-collapse: collapse;
                                                }
                                                table, th, td {
                                                    border: 1px solid #dddddd;
                                                }
                                                th, td {
                                                    padding: 12px;
                                                    text-align: left;
                                                }
                                                th {
                                                    background-color: #f2f2f2;
                                                    color: #333333;
                                                }
                                                tr:nth-child(even) {
                                                    background-color: #f9f9f9;
                                                }
                                                tr:hover {
                                                    background-color: #f1f1f1;
                                                }
                                            &lt;/style&gt;
                                            &lt;/head&gt;
                                            &lt;body&gt;
                                            &lt;div class="container"&gt;
                                                &lt;h2&gt;Data Minat Baca Mahasiswa&lt;/h2&gt;
                                                &lt;form method="POST"&gt;
                                                    &lt;div&gt;
                                                        &lt;label for="jenis_kelamin"&gt;Jenis Kelamin:&lt;/label&gt;
                                                        &lt;select id="jenis_kelamin" name="jenis_kelamin"&gt;
                                                            &lt;option value=""&gt;Semua&lt;/option&gt;
                                                            &lt;!-- Jenis Kelamin Options from API --&gt;
                                                            &lt;?php
                                                            // Fetching data from the API
                                                            $url = 'http://127.0.0.1:13000/api/selectdata?api_key= your api_key';
                                                            $ch = curl_init();
                                                            curl_setopt($ch, CURLOPT_URL, $url);
                                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                                            $response = curl_exec($ch);
                                                            if (!curl_errno($ch)) {
                                                                $data = json_decode($response, true);
                                                                if (isset($data['data'])) {
                                                                    $jenis_kelamin_options = array_unique(array_column($data['data'], 'jenis_kelamin'));
                                                                    foreach ($jenis_kelamin_options as $option) {
                                                                        echo "&lt;option value=\"$option\"&gt;$option&lt;/option&gt;";
                                                                    }
                                                                }
                                                            }
                                                            curl_close($ch);
                                                            ?&gt;
                                                        &lt;/select&gt;
                                                    &lt;/div&gt;
                                                    &lt;div&gt;
                                                        &lt;label for="jurusan"&gt;Jurusan:&lt;/label&gt;
                                                        &lt;select id="jurusan" name="jurusan"&gt;
                                                            &lt;option value=""&gt;Semua&lt;/option&gt;
                                                            &lt;!-- Jurusan Options from API --&gt;
                                                            &lt;?php
                                                            if (isset($data['data'])) {
                                                                $jurusan_options = array_unique(array_column($data['data'], 'jurusan'));
                                                                foreach ($jurusan_options as $option) {
                                                                    echo "&lt;option value=\"$option\"&gt;$option&lt;/option&gt;";
                                                                }
                                                            }
                                                            ?&gt;
                                                        &lt;/select&gt;
                                                    &lt;/div&gt;
                                                    &lt;div&gt;
                                                        &lt;label for="semester"&gt;Semester:&lt;/label&gt;
                                                        &lt;select id="semester" name="semester"&gt;
                                                            &lt;option value=""&gt;Semua&lt;/option&gt;
                                                            &lt;!-- Semester Options from API --&gt;
                                                            &lt;?php
                                                            if (isset($data['data'])) {
                                                                $semester_options = array_unique(array_column($data['data'], 'semester'));
                                                                foreach ($semester_options as $option) {
                                                                    echo "&lt;option value=\"$option\"&gt;$option&lt;/option&gt;";
                                                                }
                                                            }
                                                            ?&gt;
                                                        &lt;/select&gt;
                                                    &lt;/div&gt;
                                                    &lt;div&gt;
                                                        &lt;button type="submit" name="filter"&gt;Filter&lt;/button&gt;
                                                        &lt;button type="submit" name="all"&gt;Tampilkan Semua&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/form&gt;


                                                &lt;?php
                                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                    $url = 'http://127.0.0.1:13000/api/selectdata?api_key= your api_key';
                                                    $ch = curl_init();
                                                    curl_setopt($ch, CURLOPT_URL, $url);
                                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                                    $response = curl_exec($ch);
                                                    if (!curl_errno($ch)) {
                                                        $data = json_decode($response, true);
                                                        if (isset($data['data'])) {
                                                            $results = $data['data'];
                                                            if (isset($_POST['filter'])) {
                                                                $filtered_results = array_filter($results, function ($item) {
                                                                    $jenis_kelamin = $_POST['jenis_kelamin'];
                                                                    $jurusan = $_POST['jurusan'];
                                                                    $semester = $_POST['semester'];

                                                                    return ($jenis_kelamin === '' || $item['jenis_kelamin'] === $jenis_kelamin) &&
                                                                           ($jurusan === '' || $item['jurusan'] === $jurusan) &&
                                                                           ($semester === '' || $item['semester'] === $semester);
                                                                });
                                                                $results = $filtered_results;
                                                            }

                                                            if (!empty($results)) {
                                                                echo "&lt;div class=\"table-container\"&gt;";
                                                                echo "&lt;table&gt;";
                                                                echo "&lt;thead&gt;";
                                                                echo "&lt;tr&gt;";
                                                                echo "&lt;th&gt;Nama&lt;/th&gt;";
                                                                echo "&lt;th&gt;Jenis Kelamin&lt;/th&gt;";
                                                                echo "&lt;th&gt;Nama Perguruan Tinggi&lt;/th&gt;";
                                                                echo "&lt;th&gt;Jurusan&lt;/th&gt;";
                                                                echo "&lt;th&gt;Semester&lt;/th&gt;";
                                                                echo "&lt;th&gt;Genre Buku yang Sering Dibaca&lt;/th&gt;";
                                                                echo "&lt;th&gt;Jumlah Buku yang Sering Dibaca dalam 1 Bulan&lt;/th&gt;";
                                                                echo "&lt;th&gt;Alasan Membaca Buku&lt;/th&gt;";
                                                                echo "&lt;th&gt;Tempat Membaca Buku&lt;/th&gt;";
                                                                echo "&lt;th&gt;Durasi Membaca Buku per Hari&lt;/th&gt;";
                                                                echo "&lt;th&gt;Tingkat Kegemaran Baca Buku&lt;/th&gt;";
                                                                echo "&lt;/tr&gt;";
                                                                echo "&lt;/thead&gt;";
                                                                echo "&lt;tbody&gt;";
                                                                foreach ($results as $result) {
                                                                    echo "&lt;tr&gt;";
                                                                    echo "&lt;td&gt;" . $result['nama'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['jenis_kelamin'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['nama_perguruan_tinggi'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['jurusan'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['semester'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['genre_buku_yang_sering_dibaca'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['jumlah_buku_yang_sering_dibaca_dalam_1bulan'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['alasan_membaca_buku'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['tempat_membaca_buku'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['durasi_membaca_buku_perhari'] . "&lt;/td&gt;";
                                                                    echo "&lt;td&gt;" . $result['tingkat_kegemaran_baca_buku'] . "&lt;/td&gt;";
                                                                    echo "&lt;/tr&gt;";
                                                                }
                                                                echo "&lt;/tbody&gt;";
                                                                echo "&lt;/table&gt;";
                                                                echo "&lt;/div&gt;";
                                                            } else {
                                                                echo "&lt;div class=\"message error\"&gt;No data found for the selected filters.&lt;/div&gt;";
                                                            }
                                                        } else {
                                                            echo "&lt;div class=\"message error\"&gt;Data not found&lt;/div&gt;";
                                                        }
                                                    } else {
                                                        echo "&lt;div class=\"message error\"&gt;Curl error: " . curl_error($ch) . "&lt;/div&gt;";
                                                    }
                                                    curl_close($ch);
                                                }
                                                ?&gt;
                                            &lt;/div&gt;
                                            &lt;/body&gt;
                                            &lt;/html&gt;
                                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h4>Response</h4>
                        <!-- Navigation Tab 2 -->
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="response-tab" role="tablist">
                                <a class="nav-item nav-link active" id="response-desc-tab" data-toggle="tab" href="#response-desc" role="tab" aria-controls="response-desc" aria-selected="true">Response Sukses</a>
                                <a class="nav-item nav-link" id="response-comments-tab" data-toggle="tab" href="#response-comments" role="tab" aria-controls="response-comments" aria-selected="false">Response Gagal</a>
                                <a class="nav-item nav-link" id="response-rating-tab" data-toggle="tab" href="#response-rating" role="tab" aria-controls="response-rating" aria-selected="false">Penjelasan Response</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="response-tabContent">
                            <div class="tab-pane fade show active" id="response-desc" role="tabpanel" aria-labelledby="response-desc-tab">
                                <style>
                                    .json-container {
                                        position: relative;
                                        background-color: #343a40;
                                        padding: 10px;
                                        border-radius: 5px;
                                        overflow-x: auto;
                                    }

                                    .json-container pre {
                                        color: #fff;
                                        padding-left: 40px; /* Membuat ruang di sisi kiri untuk nomor baris */
                                        white-space: pre-wrap; /* Memastikan teks dapat melintasi baris */
                                    }

                                    .line-number {
                                        position: absolute;
                                        left: 10px;
                                        top: 0;
                                        color: #888;
                                        font-size: 12px;
                                        line-height: 1.5;
                                    }
                                </style>
                                <div class="json-container">
                                    <pre><code>
{
    "code": 200,
    "description": "Data berhasil ditampilkan",
    "message": "Data berhasil ditampilkan untuk parameter yang diberikan",
    "data": [
    ]
}
                                    </code></pre>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="response-comments" role="tabpanel" aria-labelledby="response-comments-tab">
                                <style>
                                    .json-container {
                                        position: relative;
                                        background-color: #343a40;
                                        padding: 10px;
                                        border-radius: 5px;
                                        overflow-x: auto;
                                    }

                                    .json-container pre {
                                        color: #fff;
                                        padding-left: 40px; /* Membuat ruang di sisi kiri untuk nomor baris */
                                        white-space: pre-wrap; /* Memastikan teks dapat melintasi baris */
                                    }

                                    .line-number {
                                        position: absolute;
                                        left: 10px;
                                        top: 0;
                                        color: #888;
                                        font-size: 12px;
                                        line-height: 1.5;
                                    }
                                </style>
                                <div class="json-container">
                                    <pre><code>
                                        <style>
                                            .json-container {
                                                position: relative;
                                                background-color: #343a40;
                                                padding: 10px;
                                                border-radius: 5px;
                                                overflow-x: auto;
                                            }

                                            .json-container pre {
                                                color: #fff;
                                                padding-left: 40px; /* Membuat ruang di sisi kiri untuk nomor baris */
                                                white-space: pre-wrap; /* Memastikan teks dapat melintasi baris */
                                            }

                                            .line-number {
                                                position: absolute;
                                                left: 10px;
                                                top: 0;
                                                color: #888;
                                                font-size: 12px;
                                                line-height: 1.5;
                                            }
                                        </style>
                                        <div class="json-container">
                                            <pre><code>
{
    "code": 401,
    "description": "API Key tidak valid",
    "message": "Unauthorized access. Invalid API key."
}
                                    </code></pre>
                                        </div>
                                    </code></pre>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="response-rating" role="tabpanel" aria-labelledby="response-rating-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                          <tr>
                                            <th>Komponen</th>
                                            <th>Tipe</th>
                                            <th>Keterangan</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr data-widget="expandable-table" aria-expanded="true">
                                            <td>code</td>
                                            <td>int</td>
                                            <td>Code status response</td>
                                          </tr>
                                        </tbody>
                                        <tbody>
                                          <tr data-widget="expandable-table" aria-expanded="true">
                                            <td>description</td>
                                            <td>String</td>
                                            <td>Penjelasan dari kode status</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<br><br>
                <h3><b>selectdataProfile</b></h3>
                <h4>Ringkasan</h4>
                <h7>Method "selectdataProfile" digunakan untuk menampilkan data User.</h7>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h4>Request</h4>
                        <!-- Navigation Tab 1 -->
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="request1-tab" role="tablist">
                                <a class="nav-item nav-link active" id="request1-desc-tab" data-toggle="tab" href="#request1-desc" role="tab" aria-controls="request1-desc" aria-selected="true">URL</a>
                                <a class="nav-item nav-link" id="request1-comments-tab" data-toggle="tab" href="#request1-comments" role="tab" aria-controls="request1-comments" aria-selected="false">Parameter</a>
                                <a class="nav-item nav-link" id="request1-example-tab" data-toggle="tab" href="#request1-example" role="tab" aria-controls="request1-example" aria-selected="false">Contoh Request (PHP)</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="request1-tabContent">
                            <div class="tab-pane fade show active" id="request1-desc" role="tabpanel" aria-labelledby="request1-desc-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>GET</td>
                                                <td>http://127.0.0.1:13000/api/selectdata-profile</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="request1-comments" role="tabpanel" aria-labelledby="request1-comments-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>Parameter</th>
                                                <th>Wajib</th>
                                                <th>Tipe</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>GET/HEAD</td>
                                                <td>api_key</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>API KEY</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="request1-example" role="tabpanel" aria-labelledby="request1-example-tab">
                                <div class="card-body">
                                    <pre>
                                        <code>
&lt;?php
// URL API
$api_url = 'http://127.0.0.1:13000/api/selectdata-profile';

// Fungsi untuk mengambil data user dari API
function getUserData($api_key) {
    global $api_url;

    // Inisialisasi cURL
    $ch = curl_init();

    // Setel opsi cURL
    curl_setopt($ch, CURLOPT_URL, $api_url . '?api_key=' . urlencode($api_key));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Eksekusi permintaan dan simpan responsnya
    $response = curl_exec($ch);

    // Tutup cURL
    curl_close($ch);

    // Kembalikan hasil dalam bentuk array asosiatif
    return json_decode($response, true);
}

// Cek apakah api_key sudah diinputkan
$user_data = null;
if (isset($_GET['api_key'])) {
    $api_key = $_GET['api_key'];
    $api_response = getUserData($api_key);

    // Ambil data user dari respon API jika ada
    if (isset($api_response['data'])) {
        $user_data = $api_response['data'];
    }
}

function getValue($data, $key) {
    return isset($data[$key]) ? htmlspecialchars($data[$key]) : 'N/A';
}
?>

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;User Data&lt;/title&gt;
    &lt;style&gt;
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;User Data&lt;/h1&gt;
    &lt;form method="GET" action=""&gt;
        &lt;label for="api_key"&gt;API Key:&lt;/label&gt;
        &lt;input type="text" id="api_key" name="api_key" required&gt;
        &lt;button type="submit"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;

    &lt;?php if ($user_data !== null): ?&gt;
        &lt;?php if (!empty($user_data) && is_array($user_data)): ?&gt;
            &lt;table&gt;
                &lt;tr&gt;
                    &lt;th&gt;ID&lt;/th&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    &lt;th&gt;Email&lt;/th&gt;
                    &lt;th&gt;Phone Number&lt;/th&gt;
                    &lt;th&gt;Password&lt;/th&gt;
                    &lt;th&gt;Jenis Kelamin&lt;/th&gt;
                    &lt;th&gt;Alamat&lt;/th&gt;
                    &lt;th&gt;API Key&lt;/th&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;&lt;?php echo getValue($user_data, 'id'); ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?php echo getValue($user_data, 'name'); ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?php echo getValue($user_data, 'email'); ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?php echo getValue($user_data, 'phone_number'); ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?php echo getValue($user_data, 'password'); ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?php echo getValue($user_data, 'jeniskelamin'); ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?php echo getValue($user_data, 'alamat'); ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?php echo getValue($user_data, 'api_key'); ?&gt;&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/table&gt;
        &lt;?php else: ?&gt;
            &lt;p&gt;No data found for the provided API key or the data format is incorrect.&lt;/p&gt;
        &lt;?php endif; ?&gt;
    &lt;?php endif; ?&gt;
&lt;/body&gt;
&lt;/html&gt;

                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h4>Response</h4>
                        <!-- Navigation Tab 2 -->
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="response1-tab" role="tablist">
                                <a class="nav-item nav-link active" id="response1-desc-tab" data-toggle="tab" href="#response1-desc" role="tab" aria-controls="response1-desc" aria-selected="true">Response Sukses</a>
                                <a class="nav-item nav-link" id="response1-comments-tab" data-toggle="tab" href="#response1-comments" role="tab" aria-controls="response1-comments" aria-selected="false">Response Gagal</a>
                                <a class="nav-item nav-link" id="response1-rating-tab" data-toggle="tab" href="#response1-rating" role="tab" aria-controls="response1-rating" aria-selected="false">Penjelasan Response</a>
                            </div>
                        </nav>

                        <div class="tab-content p-3" id="response-tabContent">
                            <!-- Response Sukses -->
                            <div class="tab-pane fade show active" id="response1-desc" role="tabpanel" aria-labelledby="response1-desc-tab">
                                <div class="json-container">
                                    <pre><code>
                    {
                        "code": 200,
                        "description": "Data berhasil ditampilkan",
                        "message": "Data pengguna berhasil ditampilkan",
                        "data": [
                        ]
                    }
                                    </code></pre>
                                </div>
                            </div>

                            <!-- Response Gagal -->
                            <div class="tab-pane fade" id="response1-comments" role="tabpanel" aria-labelledby="response1-comments-tab">
                                <div class="json-container">
                                    <pre><code>
                    {
                        "code": 401,
                        "description": "API Key tidak valid",
                        "message": "Unauthorized access. Invalid API key."
                    }
                                    </code></pre>
                                </div>
                            </div>

                            <!-- Penjelasan Response -->
                            <div class="tab-pane fade" id="response1-rating" role="tabpanel" aria-labelledby="response1-rating-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Komponen</th>
                                                <th>Tipe</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>code</td>
                                                <td>int</td>
                                                <td>Code status response</td>
                                            </tr>
                                            <tr>
                                                <td>description</td>
                                                <td>String</td>
                                                <td>Penjelasan dari kode status</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .json-container {
                            position: relative;
                            background-color: #343a40;
                            padding: 10px;
                            border-radius: 5px;
                            overflow-x: auto;
                        }

                        .json-container pre {
                            color: #fff;
                            padding-left: 40px; /* Membuat ruang di sisi kiri untuk nomor baris */
                            white-space: pre-wrap; /* Memastikan teks dapat melintasi baris */
                        }

                        .line-number {
                            position: absolute;
                            left: 10px;
                            top: 0;
                            color: #888;
                            font-size: 12px;
                            line-height: 1.5;
                        }
                    </style>

                </div>

                <br><br>

                <h3><b>createdata</b></h3>
                <h4>Ringkasan</h4>
                <h7>Method "createdata" digunakan untuk menambah data minat baca mahasiswa.</h7>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h4>Request</h4>
                        <!-- Navigation Tab 1 -->
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="request2-tab" role="tablist">
                                <a class="nav-item nav-link active" id="request2-desc-tab" data-toggle="tab" href="#request2-desc" role="tab" aria-controls="request2-desc" aria-selected="true">URL</a>
                                <a class="nav-item nav-link" id="request2-comments-tab" data-toggle="tab" href="#request2-comments" role="tab" aria-controls="request2-comments" aria-selected="false">Parameter</a>
                                <a class="nav-item nav-link" id="request2-example-tab" data-toggle="tab" href="#request2-example" role="tab" aria-controls="request2-example" aria-selected="false">Contoh Request (PHP)</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="request2-tabContent">
                            <div class="tab-pane fade show active" id="request2-desc" role="tabpanel" aria-labelledby="request2-desc-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>http://127.0.0.1:13000/api/insertdata</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="request2-comments" role="tabpanel" aria-labelledby="request2-comments-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>Parameter</th>
                                                <th>Wajib</th>
                                                <th>Tipe</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>api_key</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>API KEY</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>nama</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>nama mahasiswa</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>jenis_kelamin</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>jenis kelamin mahasiswa</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>nama_perguruan_tinggi</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>nama perguruan tinggi</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>jurusan</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>jurusan</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>semester</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>semester</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>genre_buku_yang_sering_dibaca</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>genre buku yang sering dibaca</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>jumlah_buku_yang_sering_dibaca_dalam_1bulan</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>jumlah buku yang sering dibaca dalam 1 bulan</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>alasan_membaca_buku</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>alasan membaca buku</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>tempat_membaca_buku</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>tempat membaca buku</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>durasi_membaca_buku_perhari</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>durasi membaca buku per hari</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>POST</td>
                                                <td>tingkat_kegemaran_baca_buku</td>
                                                <td>Ya</td>
                                                <td>String</td>
                                                <td>tingkat kegemaran baca buku</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="request2-example" role="tabpanel" aria-labelledby="request2-example-tab">
                                <div class="card-body">
                                    <pre>
                                        <code>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Insert Data&lt;/title&gt;
    &lt;style&gt;
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px; /* Memberikan sedikit ruang di sekitar konten */
            box-sizing: border-box;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 0 auto; /* Memusatkan formulir */
            margin-bottom: 50px; /* Memberikan ruang di bagian bawah formulir */
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 0; /* Menghapus margin atas pada judul */
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        #message {
            margin-top: 20px;
            text-align: center;
        }

        #message p {
            margin: 0;
            padding: 10px;
            border-radius: 5px;
        }

        #message p.success {
            background-color: #d4edda;
            color: #155724;
        }

        #message p.error {
            background-color: #f8d7da;
            color: #721c24;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;form id="insertDataForm" method="POST" action="http://127.0.0.1:13000/api/insertdata?api_key= your apikey"&gt;
        &lt;h2&gt;Tambah Data&lt;/h2&gt;
        &lt;div&gt;
            &lt;label for="nama"&gt;Nama:&lt;/label&gt;
            &lt;input type="text" id="nama" name="nama" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="jenis_kelamin"&gt;Jenis Kelamin:&lt;/label&gt;
            &lt;select id="jenis_kelamin" name="jenis_kelamin" required&gt;
                &lt;option value=""&gt;Pilih Jenis Kelamin&lt;/option&gt;
                &lt;option value="Laki-laki"&gt;Laki-laki&lt;/option&gt;
                &lt;option value="Perempuan"&gt;Perempuan&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;!-- Tambahkan elemen formulir yang lain di sini --&gt;
        &lt;div&gt;
            &lt;label for="nama_perguruan_tinggi"&gt;Nama Perguruan Tinggi:&lt;/label&gt;
            &lt;input type="text" id="nama_perguruan_tinggi" name="nama_perguruan_tinggi" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="jurusan"&gt;Jurusan:&lt;/label&gt;
            &lt;input type="text" id="jurusan" name="jurusan" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="semester"&gt;Semester:&lt;/label&gt;
            &lt;input type="text" id="semester" name="semester" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="genre_buku_yang_sering_dibaca"&gt;Genre Buku yang Sering Dibaca:&lt;/label&gt;
            &lt;input type="text" id="genre_buku_yang_sering_dibaca" name="genre_buku_yang_sering_dibaca" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="jumlah_buku_yang_sering_dibaca_dalam_1bulan"&gt;Jumlah Buku yang Sering Dibaca dalam 1 Bulan:&lt;/label&gt;
            &lt;input type="text" id="jumlah_buku_yang_sering_dibaca_dalam_1bulan" name="jumlah_buku_yang_sering_dibaca_dalam_1bulan" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="alasan_membaca_buku"&gt;Alasan Membaca Buku:&lt;/label&gt;
            &lt;input type="text" id="alasan_membaca_buku" name="alasan_membaca_buku" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="tempat_membaca_buku"&gt;Tempat Membaca Buku:&lt;/label&gt;
            &lt;input type="text" id="tempat_membaca_buku" name="tempat_membaca_buku" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="durasi_membaca_buku_perhari"&gt;Durasi Membaca Buku per Hari:&lt;/label&gt;
            &lt;input type="text" id="durasi_membaca_buku_perhari" name="durasi_membaca_buku_perhari" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label for="tingkat_kegemaran_baca_buku"&gt;Tingkat Kegemaran Baca Buku:&lt;/label&gt;
            &lt;input type="text" id="tingkat_kegemaran_baca_buku" name="tingkat_kegemaran_baca_buku" required&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;button type="submit" name="add"&gt;Tambah Data&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;div id="message"&gt;&lt;/div&gt;

    &lt;script&gt;
        document.getElementById('insertDataForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                body: formData
            })
            .then(response =&gt; response.json())
            .then(data =&gt; {
                const messageDiv = document.getElementById('message');
                if (data.status === "200 OK") {
                    messageDiv.innerHTML = `&lt;p class="success"&gt;${data.message}&lt;/p&gt;`;
                } else {
                    messageDiv.innerHTML = `&lt;p class="error"&gt;Error: ${data.message}&lt;/p&gt;`;
                }
            })
            .catch(error =&gt; {
                const messageDiv = document.getElementById('message');
                messageDiv.innerHTML = `&lt;p class="success"&gt;Data berhasil di tambahkan&lt;/p&gt;`;
            });
        });
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;

                                        </code>
                                    </pre>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <h4>Response</h4>
                        <!-- Navigation Tab 2 -->
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="response1-tab" role="tablist">
                                <a class="nav-item nav-link active" id="response2-desc-tab" data-toggle="tab" href="#response2-desc" role="tab" aria-controls="response2-desc" aria-selected="true">Response Sukses</a>
                                <a class="nav-item nav-link" id="response2-comments-tab" data-toggle="tab" href="#response2-comments" role="tab" aria-controls="response2-comments" aria-selected="false">Response Gagal</a>
                                <a class="nav-item nav-link" id="response2-rating-tab" data-toggle="tab" href="#response2-rating" role="tab" aria-controls="response2-rating" aria-selected="false">Penjelasan Response</a>
                            </div>
                        </nav>

                        <div class="tab-content p-3" id="response-tabContent">
                            <!-- Response Sukses -->
                            <div class="tab-pane fade show active" id="response2-desc" role="tabpanel" aria-labelledby="response2-desc-tab">
                                <div class="json-container">
                                    <pre><code>
                    {
                        "message": "Data berhasil ditambahkan",
                        "status": "200 OK",
                        "data": {
                            (data yang di tambahkan)
                        }
                    }
                                    </code></pre>
                                </div>
                            </div>

                            <!-- Response Gagal -->
                            <div class="tab-pane fade" id="response2-comments" role="tabpanel" aria-labelledby="response2-comments-tab">
                                <div class="json-container">
                                    <pre><code>
                    {
                        "code": 401,
                        "description": "API Key tidak valid",
                        "message": "Unauthorized access. Invalid API key."
                    }
                                    </code></pre>
                                </div>
                            </div>

                            <!-- Penjelasan Response -->
                            <div class="tab-pane fade" id="response2-rating" role="tabpanel" aria-labelledby="response2-rating-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Komponen</th>
                                                <th>Tipe</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>code</td>
                                                <td>String</td>
                                                <td>Code status response</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>description</td>
                                                <td>String</td>
                                                <td>Penjelasan dari kode status</td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>status</td>
                                                <td>String</td>
                                                <td>Status response</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .json-container {
                            position: relative;
                            background-color: #343a40;
                            padding: 10px;
                            border-radius: 5px;
                            overflow-x: auto;
                        }

                        .json-container pre {
                            color: #fff;
                            padding-left: 40px; /* Membuat ruang di sisi kiri untuk nomor baris */
                            white-space: pre-wrap; /* Memastikan teks dapat melintasi baris */
                        }

                        .line-number {
                            position: absolute;
                            left: 10px;
                            top: 0;
                            color: #888;
                            font-size: 12px;
                            line-height: 1.5;
                        }
                    </style>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>
@endsection
