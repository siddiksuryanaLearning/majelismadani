<head>
    @extends('layouts.user')

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @endsection

    <style>
        .logo-wa {
            text-align: center;
            margin-bottom: 30px;
        }

        .container {
            justify-content: center;
            background-color: #ecf0fe;
        }

        }
    </style>

    @section('title', 'Form Peserta')
</head>

<body>
    @section('content')

        {{-- Section Header --}}
        {{-- <section class="container header bg-info">
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

        
    </section> --}}
        {{-- Section Card Pengajuan --}}
        {{-- <div class="mt-1 row justify-content-center">
        <div class="text-center bg-primary lh-lg">
            <h4 class="mt-3 text-white lh-lg">Silaturahmi Akbar Peresmian Masjid Al-Muttaqien Madrasah
            Karya Madani dan Gerakan shodaqoh biaya pendidikan</h4>
            <img class="mx-1 img-fluid rounded-circle" src="{{ asset('img/poster.jpeg') }}" alt="description of myimage">
            <h6 class="mt-1 italic text-white medium">Bersama : </h6>
            <p class="italic text-white">Ust.Dudi Mutaqin - Ust. Handy Bonny - Hengky Kurniawan - Ust.Evie Effendi</p>
            <h5 class="mt-3 text-white medium" >Sabtu, 29 Juli 2023 Jam 06:00 - Selesai</h5>
            <p class="italic text-white">Jl. Sindangsari, Kabupaten Bandung Barat</p>
            <p class="mx-2 italic text-white lh-lg">Kami dengan hormat ingin mengundang anda untuk hadir dalam acara peresmian Masjid dan Gerakan shodaqoh biaya pendidikan<br>Silahkan isi form berikut.</p>
            
            


            
        </div>
        <div class="col-lg-8 col-12 col">
            <div class="shadow content">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form action="{{ route('store-participant') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p>Keterangan Pengisian : <br>- 1 Pendaftar untuk 1 orang 
                    <br>- Bagi peserta yang akan menggunakan Bus, dikenakan biaya 60.000 rb / Orang
                    <br> - Pembayaran :
                    <br>Bank Syariah Indonesia - BSI an. Nurana Puji Susanto 
                    <br>Kode Bank 451 - 716.779.778.9
                    <br>( bukti transfer di kirim ke nana 085220522000 ) 
                </p>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama*</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{old('name')}}" required >
                        <div id="emailHelp" class="form-text">Masukan nama</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">WA / Telephone*</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" value="{{old('phone')}}" required />
                        <div id="emailHelp" class="form-text">Masukan nomor WA atau Telephone</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat*</label>
                        <input type="text" class="form-control {{ $errors->has('alamat') ? 'error' : '' }}" name="alamat" id="alamat" value="{{old('alamat')}}" required />
                        <div id="emailHelp" class="form-text">Masukan Alamat</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kontak Keluarga*</label>
                        <input type="text" class="form-control {{ $errors->has('family_phone') ? 'error' : '' }}" name="family_phone" id="family_phone" value="{{old('family_phone')}}" required />
                        <div id="emailHelp" class="form-text">Kontak keluarga yang bisa dihubungi</div>
                    </div>
                    {{-- <div class="form-group">
                    <label>Nama*</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{old('name')}}" required placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>No. Wa/Telephone*</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" value="{{old('phone')}}" required placeholder="Masukkan No.Telp"/>
                    </div>
                    <div class="form-group">
                        <label>Alamat*</label>
                        <input type="text" class="form-control {{ $errors->has('alamat') ? 'error' : '' }}" name="alamat" id="alamat" value="{{old('alamat')}}" required placeholder="Masukkan Alamat"/>
                    </div>
                    <div class="form-group">
                        <label>Kontak Keluarga yang bisa dihubungi*</label>
                        <input type="text" class="form-control {{ $errors->has('family_phone') ? 'error' : '' }}" name="family_phone" id="family_phone" value="{{old('family_phone')}}" required placeholder="Masukkan kontak keluarga"/>
                    </div> --}}
        {{-- <label class="mb-3">Kendaraan*</label> --}}
        {{-- <div class="form-group>
                        <div class="col-sm-9">
                            <input type="radio" name="kendaraan" value="Kendaraan Pribadi"> Kendaraan Pribadi
                        </div>
                        <div class="col-sm-9">
                            <input type="radio" class="" name="kendaraan" value="Naik Bus"> Naik Bus
                        </div>
                    </div> --}}
        {{-- <div class="mb-2 form-check">
                    <input class="form-check-input" type="radio" name="kendaraan" value="Kendaraan Pribadi" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Kendaraan Pribadi
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="kendaraan" value="Naik Bus">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Naik Bus
                    </label>
                    </div>
                    <button type="submit" class="mt-2 btn btn-custom bg-primary">Kirim</button>
                    <p class="mt-3">*Catatan : Bagi peserta naik Bus dikenakan biaya 60 rb/orang, dan akan dikoordinasi terlebih dahulu oleh tim panitia</p>
                </form>
                </div>
        </div>

    </div> --}}
        {{-- Footer --}}
        {{-- <div class="w-screen h-screen">
        <img class="object-cover w-full h-full img-fluid" src="{{ asset('img/Frame.png') }}" alt="description of myimage">
        
    </div> --}}
        <section class="bg-white dark:bg-gray-900" style="background-image: url('img/Frame.jpg')">
            <div class="grid max-w-screen-xl px-4 py-2 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1
                        class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-8xl">
                        Silaturahmi <br>Akbar</h1>
                    <p class="max-w-2xl mb-6 font-bold text-orange-400 lg:mb-8 md:text-lg lg:text-4xl dark:text-gray-400">
                        Peresmian Masjid Al-Muttaqien Madrasah
                        Karya Madani dan Gerakan shodaqoh biaya pendidikan</p>
                    {{-- <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> --}}
                    <a href="#input-form"
                        class="inline-flex items-center justify-center px-4 py-2 text-center text-white bg-orange-600 border border-orange-300 rounded-lg font-large text-white-900 hover:bg-orange-100 focus:ring-4 focus:ring-orange-100 dark:text-orange dark:border-orange-700 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
                        Daftar
                    </a>
                </div>
                <div class="mt-4 lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="img/Background.jpeg"  
                        class="bg-center bg-cover sm:scale-100 sm:bg-top md:bg-left lg:bg-right xl:bg-bottom "
                        alt="mockup">
                </div>
            </div>
        </section>

        {{-- Tentang acara --}}
        <section class="bg-blue-900 dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-12">
                    <h1
                        class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-center text-orange-400 md:text-5xl xl:text-4xl">
                        Tentang Acara</h1>
                    <p class="mb-6 font-light text-center text-white lg:mb-8 md:text-lg lg:text-2xl">Kami dengan hormat
                        ingin mengundang anda untuk hadir dalam acara peresmian Masjid dan Gerakan shodaqoh biaya pendidikan
                    </p>
                    <p class="mb-6 text-center text-white lg:mb-8 md:text-lg lg:text-2xl">Sabtu, 29 Juli 2023 Jam 06:00 s/d
                        Selesai
                        <br>Jl. Sindangsari, Kabupaten Bandung Barat
                    </p>
                    <div class="flex justify-center mt-4 lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="img/maps.png"
                            class="justify-center bg-center bg-cover sm:scale-100 sm:bg-top md:bg-left lg:bg-right xl:bg-bottom "
                            alt="mockup">
                    </div>
                    <p class="mt-2 mb-6 font-light text-center text-white lg:mb-8 md:text-lg lg:text-2xl"> maps : <a
                            class="font-bold text-white"
                            href="https://goo.gl/maps/jyMto8McUgRn9cte7">https://goo.gl/maps/jyMto8McUgRn9cte7</a></p>


                </div>
                {{-- <div class="mt-4 lg:mt-0 lg:col-span-5 lg:flex">
            <img src="img/Background.jpeg" class="bg-center bg-cover sm:scale-100 sm:bg-top md:bg-left lg:bg-right xl:bg-bottom " alt="mockup">
        </div>                 --}}
            </div>
        </section>

        {{-- Pemateri --}}
        <section class="bg-blue-900 dark:bg-gray-900" style="background-image: url('img/Frame.jpg')">
            <div class="grid max-w-screen-xl mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="lg:mt-0 lg:col-span-12 lg:scale-100">
                    <img src="img/pemateri.png"
                        class="bg-center bg-cover sm:scale-100 sm:bg-top md:bg-left lg:bg-right xl:bg-bottom "
                        alt="mockup">
                </div>
            </div>
        </section>

        {{-- Cara ikut --}}
        <section class="bg-blue-900 dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-12">
                    <h1
                        class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-center text-orange-400 md:text-5xl xl:text-4xl">
                        Cara Daftar</h1>
                    <p class="mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">1. Isi Formuliar Pendaftaran pada
                        link https://madani.scaleupiman.com</p>
                    <p class="mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">2. Bagi peserta yang menggukana
                        BUS, dikenakan biaya sebesar <span class="font-bold"> 60.000/orang </span> & silahkan transfer nomor
                        rekening di bawah ini :</p>
                    <div class="items-center border-2 sm:flex sm:flex-row sm:justify-center sm:border-2"
                        style="text-align: center;">
                        <img src="img/bsi.png" class="items-center scale-50 bg-center bg-cover sm:scale-75"
                            style="display: inline-block;" alt="mockup">
                        <p class="mx-0 mb-4 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">Bank Syariah Indonesia
                            <br>an. Nurana Puji Susanto
                            <br>Kode Bank 451 - 716.779.778.9
                        </p>
                    </div>
                    <p class="mt-4 mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">3. Setelah itu kirim bukti
                        transfer ke nana 085220522000 (Untuk kendaraan Bus)</p>
                </div>
            </div>

            {{-- Form Pendaftaran --}}
        </section>

        <section class="flex items-center justify-center h-screen bg-indigo-50">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <form id="input-form" class="w-full p-6 rounded-lg sm:w-1/2 bg-white-100"
                action="{{ route('store-participant') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group" id="input-container">
                    <h1 class="mt-5 mb-3 text-center">Formulir Pendaftaran</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama*</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name"
                            id="name" value="{{ old('name') }}" required>
                        <div id="emailHelp" class="form-text">Masukan nama</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">WA / Telephone*</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone"
                            id="phone" value="{{ old('phone') }}" required />
                        <div id="emailHelp" class="form-text">Masukan nomor WA atau Telephone</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat*</label>
                        <input type="text" class="form-control {{ $errors->has('alamat') ? 'error' : '' }}"
                            name="alamat" id="alamat" value="{{ old('alamat') }}" required />
                        <div id="emailHelp" class="form-text">Masukan Alamat</div>
                    </div>
                    <label class="mb-3">Kendaraan*</label>
                    <div class="mb-2 form-check">
                        <input class="form-check-input" type="radio" name="kendaraan" value="Kendaraan Pribadi" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Kendaraan Pribadi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kendaraan" value="Naik Bus">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Naik Bus
                        </label>
                    </div>
                    <div class="mt-2 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kontak Keluarga*</label>
                        <input type="text" class="form-control {{ $errors->has('family_phone') ? 'error' : '' }}"
                            name="family_phone" id="family_phone" value="{{ old('family_phone') }}" required />
                        <div id="emailHelp" class="form-text">Kontak keluarga yang bisa dihubungi</div>
                    </div>
                </div>
                <button type="submit" class="px-4 py-2 mb-5 btn btn-primary">Kirim</button>
            </form>

            {{-- </div>   
        </div> --}}
        </section>
        {{-- Frequently Asked Question (FAQ) --}}
        <!-- ====== FAQ Section Start -->
        <section x-data="{
            openFaq1: false,
            openFaq2: false,
            openFaq3: false,
            openFaq4: false,
            openFaq5: false,
            openFaq6: false
        }"
            class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
            <div class="container mx-auto">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                            <span class="block mb-2 text-lg font-semibold text-primary">
                                FAQ
                            </span>
                            <h2 class="mb-4 text-2xl font-bold text-dark sm:text-4xl md:text-[40px]">
                                Hal hal yang sering ditanyakan
                            </h2>
                            <p class="text-base text-body-color">
                                Berikut adalah pertanyaan yang sering di tanyakaan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 lg:w-1/2">
                        <div
                            class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                            <button class="flex w-full text-left faq-btn" @click="openFaq1 = !openFaq1">
                                <div
                                    class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-blue-900 bg-opacity-5 text-primary">
                                    <svg width="17" height="10" viewBox="0 0 17 10" class="fill-current icon">
                                        <path
                                            d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                            fill="#3056D3" stroke="#3056D3" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-lg font-semibold text-black">
                                        Apakah ada biaya jika memilih kendaraan BUS ?
                                    </h4>
                                </div>
                            </button>
                            <div x-show="openFaq1" class="faq-content pl-[62px]">
                                <p class="py-3 text-base leading-relaxed text-body-color">
                                    Ya, Setiap orang di kenakan biaya 60.000/orang untuk kendaraan BUS
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <div
                            class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                            <button class="flex w-full text-left faq-btn" @click="openFaq2 = !openFaq2">
                                <div
                                    class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-blue-900 bg-opacity-5 text-primary">
                                    <svg width="17" height="10" viewBox="0 0 17 10" class="fill-current icon">
                                        <path
                                            d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                                            fill="#3056D3" stroke="#3056D3" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-lg font-semibold text-black">
                                        Apa ada alamat lengkap ?
                                    </h4>
                                </div>
                            </button>
                            <div x-show="openFaq2" class="faq-content pl-[62px]">
                                <p class="py-3 text-base leading-relaxed text-body-color">
                                    Ya, silahkan klik link yang berada di gambar map (diatas). atau klik link tersebut
                                    otomatis akan membuka google maps
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 right-0 z-[-1]">
                <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                        fill="url(#paint0_linear)" />
                    <defs>
                        <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#3056D3" stop-opacity="0.36" />
                            <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                            <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </section>
        <!-- ====== FAQ Section End -->

        <div class="fixed z-50 flex items-center bottom-4 right-4">
            <a href="https://wa.me/+6285220522000" class="flex items-center p-2 bg-green-500 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 6l3 9a5 5 0 007 3m4 0a5 5 0 01-5 5H8a5 5 0 01-5-5V8a5 5 0 015-5h9a5 5 0 015 5v9a5 5 0 01-5 5h-3">
                    </path>
                </svg>
                <span class="text-white">Hubungi Kami</span>
            </a>
        </div>


    @section('js')

    @endsection
</body>
