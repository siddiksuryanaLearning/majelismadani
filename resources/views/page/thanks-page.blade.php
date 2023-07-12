<head>
    @extends('layouts.user')
    @section('css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
    @endsection
    <style>
        .icon {
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
        <section class="bg-blue-900 dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-12">
                    <h1
                        class="mb-4 text-2xl text-orange-600 font-extrabold tracking-tight leading-none md:text-5xl xl:text-4xl text-center text-orange-600">
                        Terimakasih telah Mendaftar</h1>
                    <p class="font-light mb-6 lg:mb-8 md:text-lg lg:text-2xl text-white">Berikut data yang telah anda
                        masukan</p>
                    <p class="font-light mb-6 lg:mb-8 md:text-lg lg:text-2xl text-white">Kirim pembayaran ke No rekening :
                    </p>
                    <div class="sm:flex sm:flex-row sm:justify-center sm:border-2 items-center border-2"
                        style="text-align: center;">
                        <img src="img/bsi.png" class="bg-cover bg-center sm:scale-75 items-center scale-50"
                            style="display: inline-block;" alt="mockup">
                        <p class="font-light mb-4 mx-0 lg:mb-8 md:text-lg lg:text-2xl text-white">Bank Syariah Indonesia
                            <br>an. Nurana Puji Susanto
                            <br>Kode Bank 451 - 716.779.778.9
                        </p>
                    </div>
                    <p class="font-light mt-4 mb-6 lg:mb-8 md:text-lg lg:text-2xl text-white">Konfrimasai bukti transef di
                        kirim ke :</p>
                    <div class="sm:flex sm:flex-row sm:justify-center sm:border-2 items-center border-2"
                        style="text-align: center;">
                        <img src="img/icon_phone.png" class="bg-cover bg-center sm:scale-75 items-center scale-50"
                            style="display: inline-block;" alt="mockup">
                        <p class="font-light mb-4 mx-0 lg:mb-8 md:text-lg lg:text-2xl text-white"> 085220522000 (Nana)</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Section Card Pengajuan --}}
        {{-- <center><h3 class="mt-4"><i class="bi bi-check2-circle">Terima kasih, kami tunggu kehadiran anda di acara kami!.</i></h3>


    <a href="/" type="button" class="btn btn-success">Back?</a>
</center>
 --}}
        {{-- Footer --}}
        <div class="">
            <hr>
            <div class="logo-wa ">
                <img src="{{ asset('img/logo wa.png') }}" alt="description of myimage" width="50" height="50"><a
                    href="https://wa.me/+62816628323">Narahubung WhatsApp</a>
            </div>
        </div>



    @section('js')

    @endsection
</body>
