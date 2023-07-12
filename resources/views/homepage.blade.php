@extends('layouts.base')
@section('body')
    <section id="heros" class="text-white" style="background-image: url('{{ asset('img/bg-heros.png') }}');">
        {{-- <div class="flex max-w-4xl mx-auto"> --}}
        <div class="grid max-w-screen-xl px-4 py-2 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">

                {{-- <div class="flex flex-col items-center justify-center w-1/2 "> --}}

                {{-- <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-8xl">
                    Silaturahmi <br>Akbar</h1> --}}
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-8xl">
                    Silaturahmi <br>Akbar</h1>
                {{-- <p class="pb-5">Peresmian Masjid Al-Muttaqien Madrasah Karya Madani dan Gerakan shodaqoh biaya
                    pendidikan</p> --}}
                <p class="max-w-2xl mb-6 font-bold text-white lg:mb-8 md:text-lg lg:text-4xl dark:text-gray-400">
                    Peresmian Masjid Al-Muttaqien Madrasah
                    Karya Madani dan Gerakan shodaqoh biaya pendidikan</p>
                <a href="#form" class="px-4 py-2 my-5 font-bold text-white bg-orange-500 rounded-xl">Daftar Sekarang</a>

            </div>
            <div class="mt-4 lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('img/poster.jpeg') }}"
                    class="bg-center bg-cover sm:scale-100 sm:bg-top md:bg-left lg:bg-right xl:bg-bottom " alt="mockup">
            </div>
            {{-- <div class="flex flex-row-reverse w-1/2">
                <img src="{{ asset('img/poster.jpeg') }}" alt="Cover" class="h-4/5">
            </div> --}}
        </div>
    </section>
    <section id="about" class="text-white bg-blue-900">
        <div class="max-w-4xl py-10 mx-auto">
            <h1
                class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-center text-white md:text-5xl xl:text-4xl">
                Tentang Acara</h1>
            <p class="text-xl font-light text-center">Kami dengan hormat ingin mengundang anda untuk hadir dalam acara
                peresmian Masjid dan Gerakan shodaqoh biaya pendidikan.</p><br>
            <p class="mb-6 text-center text-white font-lght lg:mb-8 md:text-lg lg:text-2xl">Sabtu, 29 Juli 2023 Jam 06:00
                s/d
                Selesai
                <br>Jl. Sindangsari, Kabupaten Bandung Barat
            </p>
            <div class="flex justify-center mt-4 lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('img/maps.png') }}"
                    class="justify-center bg-center bg-cover sm:scale-100 sm:bg-top md:bg-left lg:bg-right xl:bg-bottom "
                    alt="mockup">
            </div><br>
            <p class="mt-2 mb-6 font-light text-center text-white lg:mb-8 md:text-lg lg:text-2xl">Maps : <br><a
                    class="font-bold text-white"
                    href="https://goo.gl/maps/jyMto8McUgRn9cte7">https://goo.gl/maps/jyMto8McUgRn9cte7</a></p>
        </div>
    </section>
    <section id="speakers" class="text-white bg-center bg-cover"
        style="background-image: url('{{ asset('img/pemateri.png') }}');">
        <div class="max-w-4xl py-10 mx-auto">
            <img src="{{ asset('img/pemateri.png') }}"
                class="bg-center bg-cover opacity-0 sm:scale-100 sm:bg-top md:bg-left lg:bg-right xl:bg-bottom "
                alt="mockup">
        </div>
    </section>
    <section id="how" class="text-white bg-blue-900">
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
                <div class="text-white card sm:flex sm:justify-center">
                    <div class="items-center border-2 sm:flex sm:flex-row sm:justify-center sm:border-2"
                        style="text-align: center;">
                        <img src="img/bsi.png" class="items-center scale-50 bg-center bg-cover sm:scale-75"
                            style="display: inline-block;" alt="mockup">
                        <p class="p-4 mx-0 mb-4 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">Bank Syariah Indonesia
                            <br>an. Nurana Puji Susanto
                            <br>Kode Bank 451 - 716.779.778.9
                        </p>
                    </div>
                </div>
                <p class="mt-4 mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">3. Setelah itu kirim bukti
                    transfer ke nana 085220522000 (Untuk kendaraan Bus)</p>
            </div>
    </section>
    <section id="form" class="bg-white">
        {{-- <div class="grid max-w-screen-xl px-4 py-2 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
             --}}
        <div class="max-w-4xl px-4 py-2 py-10 mx-auto">
            <div class="flex items-center justify-center h-full mr-auto place-self-center lg:col-span-7">
                <livewire:register-component />
            </div>
        </div>
    </section>
    <section id="faq" class="text-white bg-blue-900">
        <div class="max-w-4xl px-4 py-10 mx-auto">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-orange-400">Frequently asked questions (FAQ)
            </h2>
            <dl class="mt-10 space-y-8 divide-y divide-gray-900/10">
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base text-2xl font-semibold leading-7 text-white lg:col-span-5">Jika sudah
                        mendaftar,
                        apakah saya perlu membayar untuk hadir dalam acara tersebut?</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">Acara ini tidak dikenakan biaya apapun. *Kecuali untuk
                            peserta yang menggunakan kendaraan bus*.</p>
                    </dd>
                </div>
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base text-2xl font-semibold leading-7 text-white lg:col-span-5">Apakah alamat lokasi
                        tersebut sudah akurat?</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">Kami sarankan untuk membuka link yang telah tersedia
                            untuk
                            membuka google maps agar tidak terjadi hal yang tidak diinginkan. *Misalnya Tersesat*</p>
                    </dd>
                </div>
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base text-2xl font-semibold leading-7 text-white lg:col-span-5">Jika saya memiliki
                        sebuah pertanyaan personal tentang acara ini, bagaimana cara saya menyampaikan pertanyaan
                        tersebut?
                    </dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">Untuk pertanyaan lebih lanjut, silahkan tekan tombol
                            "Hubungi Kami" agar ditangani lebih lanjut oleh Tim kami.</p>
                    </dd>
                </div>

                <div class="fixed z-50 flex items-center bottom-4 right-4">
                    <a href="https://wa.me/+6285220522000"
                        class="flex items-center p-2 bg-green-500 rounded-full shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 6l3 9a5 5 0 007 3m4 0a5 5 0 01-5 5H8a5 5 0 01-5-5V8a5 5 0 015-5h9a5 5 0 015 5v9a5 5 0 01-5 5h-3">
                            </path>
                        </svg>
                        <span class="text-white">Hubungi Kami</span>
                    </a>
                </div>

            </dl>
        </div>
    </section>
@endsection
