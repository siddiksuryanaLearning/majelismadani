<head>
    @extends('layouts.user')

    @section('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
    @endsection

    <style>
        .logo-wa {
            text-align: center;
            margin-bottom: 30px;
        }

        .container {
            justify-content: center;
        }
    </style>

    @section('title', 'Form Peserta')
    </head>
    <body>
    @section('content')
    {{-- Section Header --}}
    <section class="header">
        <nav class="bg-transparent navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <div class="bilek">
                
                    <a class="text-center navbar-brand" href="#">
                    </a>
                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="ml-auto text-center navbar-nav">
                            <li class="nav-item">
                            </li>
                        </ul>
                        <ul class="ml-auto text-center navbar-nav">
                            <li class="nav-item">
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>

        <div class="text-center">
            <h2 class="mt-3 text-white medium">Fomulir kehadiran peresmian masjid Al-Muttaqien</h2>
            <p class="italic text-white">Kami dengan hormat ingin mengundang anda untuk hadir dalam acara peresmian Masjid di Majelis Madani!<br>Silahkan isi form berikut.</p>
            <h6 class="italic text-white medium">Bersama : </h6>
            <p class="italic text-white">Ust.Dudi Mutaqin - Ust. Handy Bonny - Hengky Kurniawan - Ust.Evie Effendi</p>
            <h5 class="mt-3 text-white medium" >Sabtu, 29 Juli 2023 Jam 08:00 - Selesai</h5>
            <p class="italic text-white">Jl. Sindangsari, Kabupaten Bandung Barat</p>
            


            
        </div>
    </section>
    {{-- Section Card Pengajuan --}}
    <div class="mt-4 row justify-content-center">
        <div class="col-lg-6 col-10 col">
            <div class="shadow content">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form action="{{ route('store-participant') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label>Nama</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{old('name')}}" required placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>No. Wa/Telephone</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" value="{{old('phone')}}" required placeholder="Masukkan No.Telp"/>
                    </div>
                    <div class="form-group>
                        <label class="mt-2 col-sm-3 col-form-label">Kendaraan</label>
                        <div class="col-sm-9">
                            <input type="radio" name="kendaraan" value="Kendaraan Pribadi"> Kendaraan Pribadi
                        </div>
                        <div class="col-sm-9">
                            <input type="radio" class="" name="kendaraan" value="Naik Bus"> Naik Bus
                        </div>
                    </div>
                    <button type="submit" class="mt-2 btn btn-custom">Kirim</button>
                    <p class="mt-3">*Catatan : untuk peserta dengan kendaraan naik bus, akan dikoordinasi terlebih dahulu oleh tim panitia</p>
                </form>
                </div>
        </div>
    </div>
    {{-- Footer --}}
    <div class="mt-5">
        <hr>
        <div class="logo-wa">
            <img src="{{ asset('img/logo wa.png') }}" alt="description of myimage" width="50" height="50"><a href="https://wa.me/+6285220522000">Narahubung WhatsApp</a>
        </div>
    </div>



    @section('js')

    @endsection
    </body>
