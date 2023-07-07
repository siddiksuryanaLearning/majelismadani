<head>
@extends('layouts.user')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    @endsection
<style>
    .icon{
      margin: 250px;
    }
    .container {
            justify-content: center;
        }
    .logo-wa {
            text-align: center;
            margin-bottom: 30px;
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
    <center><h3 class="mt-4"><i class="bi bi-check2-circle">Terima kasih, kami tunggu kehadiran anda di acara kami!.</i></h3>


    <a href="/" type="button" class="btn btn-success">Back?</a>
</center>

    {{-- Footer --}}
    <div class="">
        <hr>
        <div class="logo-wa ">
            <img src="{{ asset('img/logo wa.png') }}" alt="description of myimage" width="50" height="50"><a href="https://wa.me/+62816628323">Narahubung WhatsApp</a>
        </div>
    </div>



    @section('js')

    @endsection
    </body>


