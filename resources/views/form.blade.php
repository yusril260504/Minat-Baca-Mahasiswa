<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <style>
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Minat Baca Mahasiswa</h2>
        <form action="{{ route('form') }}" method="POST">
            @csrf
            <div>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    @foreach($jenis_kelamin_options as $option)
                        <option value="{{ $option->jenis_kelamin }}">{{ $option->jenis_kelamin }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="nama_perguruan_tinggi">Nama Perguruan Tinggi:</label>
                <select id="nama_perguruan_tinggi" name="nama_perguruan_tinggi" required>
                    <option value="">Pilih Nama Perguruan Tinggi</option>
                    @foreach($nama_perguruan_tinggi_options as $option)
                        <option value="{{ $option->nama_perguruan_tinggi }}">{{ $option->nama_perguruan_tinggi }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="semester">Semester:</label>
                <select id="semester" name="semester" required>
                    <option value="">Pilih Semester</option>
                    @foreach($semester_options as $option)
                        <option value="{{ $option->semester }}">{{ $option->semester }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit">Search</button>
            </div>
        </form>

        @if(isset($error_message))
            <div class="message error">{{ $error_message }}</div>
        @endif

        @if(isset($success_message))
            <div class="message success">{{ $success_message }}</div>
        @endif

        @if(isset($results) && $results->isNotEmpty())
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Perguruan Tinggi</th>
                            <th>Jurusan</th>
                            <th>Semester</th>
                            <th>Genre Buku yang Sering Dibaca</th>
                            <th>Jumlah Buku yang Sering Dibaca dalam 1 Bulan</th>
                            <th>Alasan Membaca Buku</th>
                            <th>Tempat Membaca Buku</th>
                            <th>Durasi Membaca Buku per Hari</th>
                            <th>Tingkat Kegemaran Baca Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $result->nama }}</td>
                                <td>{{ $result->jenis_kelamin }}</td>
                                <td>{{ $result->nama_perguruan_tinggi }}</td>
                                <td>{{ $result->jurusan }}</td>
                                <td>{{ $result->semester }}</td>
                                <td>{{ $result->genre_buku_yang_sering_dibaca }}</td>
                                <td>{{ $result->jumlah_buku_yang_sering_dibaca_dalam_1bulan }}</td>
                                <td>{{ $result->alasan_membaca_buku }}</td>
                                <td>{{ $result->tempat_membaca_buku }}</td>
                                <td>{{ $result->durasi_membaca_buku_perhari }}</td>
                                <td>{{ $result->tingkat_kegemaran_baca_buku }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</body>
</html>
