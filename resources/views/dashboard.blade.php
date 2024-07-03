@extends('main')

@section('content')
<div class="content-wrapper">
    <div class="content-header bg-gradient-primary text-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">API KEY</h1>
                </div><!-- /.col -->
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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg mt-4 border-0">
                    <div class="card-header bg-info text-white rounded-top">
                        <h5 class="card-title">Selamat datang, <strong>{{ session('user_name') }}!</strong></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Berikut adalah API Key Anda:</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="apiKeyInput" value="{{ $apiKey }}" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-outline-info" type="button" id="copyButton">Salin</button>
                            </div>
                        </div>
                        <button class="btn btn-outline-warning mb-3" type="button" id="generateButton">Generate Token</button>
                        <small class="form-text text-muted mb-3">Pastikan untuk menjaga API key Anda tetap rahasia dan aman.</small>
                        <p class="card-text">
                            Gunakan API Key ini untuk menggunakan API Minat baca mahasiswa. Untuk informasi lebih lanjut mengenai cara menggunakan API Minat baca mahasiswa, silakan baca <a href="{{  route('dokumentasi')}}"> dokumentasi api.</a>.
                        </p>
                        <small id="copyMessage" class="form-text text-success" style="display: none;">API Key berhasil disalin ke clipboard!</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('copyButton').addEventListener('click', function() {
        var apiKeyInput = document.getElementById('apiKeyInput');
        apiKeyInput.select();
        apiKeyInput.setSelectionRange(0, 99999); // For mobile devices
        document.execCommand('copy');

        var copyMessage = document.getElementById('copyMessage');
        copyMessage.style.display = 'block';
        setTimeout(function() {
            copyMessage.style.display = 'none';
        }, 2000);
    });

    document.getElementById('generateButton').addEventListener('click', function() {
        fetch('{{ route('generate.token') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('apiKeyInput').value = data.apiKey;
        })
        .catch(error => console.error('Error:', error));
    });
</script>

<style>
    .content-header {
        padding: 20px;
        border-bottom: 1px solid #ddd;
        background: linear-gradient(45deg, #1d8cf8, #3358f4);
    }
    .card {
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .card-header {
        border-bottom: none;
        border-radius: 15px 15px 0 0;
        background: linear-gradient(45deg, #11cdef, #1171ef);
    }
    .card-title {
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }
    .btn-outline-info {
        border-color: #1171ef;
        color: #1171ef;
    }
    .btn-outline-info:hover {
        background-color: #1171ef;
        color: #fff;
    }
    .breadcrumb-item a {
        color: #ffc107;
        text-decoration: none;
    }
    .breadcrumb-item a:hover {
        text-decoration: underline;
    }
    .form-control {
        border-radius: 5px;
    }
</style>
@endsection
