@extends('main')

@section('content')
<div class="content-wrapper">
    <div class="content-header bg-gradient-primary text-white text-center py-5">
        <div class="container">
            <h1 class="m-0" style="font-size: 42px; font-weight: bold;">Selamat Datang di <span style="color: #ffdf00;">Apikey Data Minat Baca Mahasiswa</span></h1>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-between align-items-center carousel-content">
                                    <div class="carousel-text">
                                        <h5 class="font-weight-bold">Platform Data Terpadu</h5>
                                        <p>Apikey Data Minat Baca Mahasiswa adalah platform yang menyediakan data terpadu tentang minat baca mahasiswa dari berbagai institusi pendidikan. Kami berkomitmen untuk memberikan informasi yang berkualitas dan bermanfaat bagi seluruh pemangku kepentingan.</p>
                                    </div>
                                    <img src="{{ asset('img/bukuwisuda.png') }}" class="d-block w-100 floating-image" alt="First slide">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-between align-items-center carousel-content">
                                    <div class="carousel-text">
                                        <h5 class="font-weight-bold">Informasi Mendetail</h5>
                                        <p>
                                            API kami menyediakan informasi mendetail tentang 220 data minat baca mahasiswa yang ada di Indonesia. Mulai dari nama mahasiswa, genre buku yang sering dibaca, jumlah buku yang sering dibaca dalam satu bulan, hingga durasi membaca buku tersebut! 📔🗝️<br><br>

                                            Anda bisa mengeksplorasi data minat baca mahasiswa berdasarkan:
                                            <ul>
                                                <li>Nama: Nama lengkap dari mahasiswa.</li>
                                                <li>Jenis Kelamin: Jenis kelamin dari mahasiswa (contoh: laki-laki, perempuan, lainnya).</li>
                                                <li>Nama Perguruan Tinggi: Nama perguruan tinggi tempat mahasiswa belajar.</li>
                                                <li>Jurusan: Jurusan yang diambil oleh mahasiswa.</li>
                                                <li>Semester: Semester saat ini yang sedang ditempuh oleh mahasiswa.</li>
                                                <li>Genre Buku yang Sering Dibaca: Genre buku-buku yang sering dibaca oleh mahasiswa.</li>
                                                <li>Jumlah Buku yang Sering Dibaca dalam 1 Bulan: Jumlah buku yang sering dibaca oleh mahasiswa dalam satu bulan.</li>
                                                <li>Alasan Membaca Buku: Alasan atau motivasi mahasiswa dalam membaca buku.</li>
                                                <li>Tempat Membaca Buku: Tempat yang sering digunakan oleh mahasiswa untuk membaca buku.</li>
                                                <li>Durasi Membaca Buku per Hari: Durasi waktu yang dihabiskan oleh mahasiswa untuk membaca buku setiap harinya.</li>
                                                <li>Tingkat Kegemaran Baca Buku: Tingkat kegemaran atau minat mahasiswa terhadap kegiatan membaca buku.</li>
                                            </ul><br>

                                            Dengan API ini, Anda dapat menemukan profil mahasiswa pembaca yang sesuai dengan minat Anda, meneliti tren baca, atau bahkan mengintegrasikannya ke dalam aplikasi Anda sendiri. Jelajahi data, buat keputusan yang lebih baik, dan nikmati kekayaan literasi mahasiswa dengan cara baru yang menarik!
                                        </p>
                                    </div>
                                    <img src="{{ asset('img/logo1.png') }}" class="d-block w-100 floating-image" alt="Second slide">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
@parent
<style>
    .carousel-item img {
        max-height: 500px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .carousel-text {
        width: 50%;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .content-header {
        background: linear-gradient(45deg, #1d8cf8, #3358f4);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #ffdf00;
        border-radius: 50%;
        width: 30px;
        height: 30px;
    }

    .carousel-control-prev-icon:before,
    .carousel-control-next-icon:before {
        color: #000;
    }

    .floating-image {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .carousel-item:hover .floating-image,
    .carousel-item:hover .carousel-text {
        transform: scale(1.05);
    }
</style>
@endsection
