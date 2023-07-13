@extends('layouts.base')
@section('body')
    <section id="heros" class="text-white" style="background-image: url('{{ asset('img/bg-heros.png') }}');">
        <div class="max-w-4xl mx-auto sm:flex">

            <div class="flex items-center justify-center mx-2 mb-6">
                <div>
                    <h1 class="flex pb-2 text-4xl font-bold py-14 px-7 sm:py-0 sm:px-0">Silaturahim Akbar</h1>
                    <p class="px-6 pb-5 sm:py-4 sm:px-0">Peresmian Masjid Al-Muttaqien Madrasah Karya Madani dan Gerakan
                        shodaqoh
                        biaya
                        pendidikan</p>
                    <div class="flex px-6 sm:pl-0 sm:flex">
                        <a href="#form"
                            class="text-white sm:flex w-2/3 justify-center bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-2xl py-2.5 text-center mr-2 mb-2">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-row-reverse sm:mt-6">
                <img src="{{ asset('img/Pematri_update.jpg') }}" alt="Cover" class="h-4/5">
            </div>

        </div>
    </section>

    <section id="about" class="text-white bg-blue-900">
        <div class="max-w-4xl py-10 mx-auto">
            <h1
                class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-center text-white md:text-5xl xl:text-4xl">
                Tentang Acara</h1>
            <p class="text-xl font-light text-center">Insyallah tausiyah nanti akan di isi oleh Ust. Dudi, Ust.Evi dan
                Ust.Handy Bony dalam rangka Silaturahmi Akbar Peresmian Masjid Al-Muttaqien Madrasah Karya Madani dan
                Gerakan shodaqoh biaya
                pendidikan
            </p><br>
            <p class="mb-6 text-xl text-center text-white font-lght lg:mb-8 md:text-lg lg:text-2xl">Sabtu, 29 Juli 2023 Jam
                06:00
                s/d
                Selesai
                <br>Jl. Sindangsari, Kabupaten Bandung Barat
            </p>
            <p class="mt-2 mb-6 font-light text-center text-white lg:mb-8 md:text-lg lg:text-2xl">Maps :</p>
            <div class="flex justify-center">
                <a href="https://goo.gl/maps/jyMto8McUgRn9cte7"
                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-2xl px-6 py-2.5 text-center mr-2 mb-2">
                    Buka Map
                </a>
            </div>

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
        <div class="max-w-4xl px-4 py-10 mx-auto">

            <h1
                class="mb-8 text-2xl font-extrabold leading-none tracking-tight text-center text-white md:text-5xl xl:text-4xl">
                Cara Hadir</h1>
            <p class="mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">1. Isi Formulir Pendaftaran pada
                link https://madani.scaleupiman.com</p>
            <p class="mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">2. Bagi peserta yang menggunakan
                BUS, dikenakan biaya sebesar <span class="font-bold"> 60.000/orang </p>
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
    <section x-data="{
        openFaq1: false,
        openFaq2: false,
        openFaq3: false,
        openFaq4: false,
        openFaq5: false,
        openFaq6: false
    }" class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                        <h2 class="mb-4 text-2xl font-bold text-dark sm:text-4xl md:text-[32px]">
                            Pertanyaan Yang Sering Diajukan
                        </h2>

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
                                    Jika sudah mendaftar, apakah saya perlu membayar untuk hadir dalam acara tersebut?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Acara ini tidak dikenakan biaya apapun. *Kecuali untuk peserta yang menggunakan
                                kendaraan bus*. </p>
                        </div>
                    </div>
                    <div
                        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq4 = !openFaq4">
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
                                    Saya sudah daftar dengan memilih kendaraan BUS, dimanakah titik kumpul keberangaktan ?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Keberangkatan dengan BUS akan dikoordinasi oleh tim Panitia, lebih lengkapnya anda bisa klik
                                "Hubungi Kami" </p>
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
                                    Apakah alamat lokasi tersebut sudah akurat?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Kami sarankan untuk membuka link yang telah tersedia untuk membuka google maps agar
                                tidak terjadi hal yang tidak diinginkan. *Misalnya Tersesat*
                            </p>
                        </div>
                    </div>
                    <div
                        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq3 = !openFaq3">
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
                                    Jika saya memiliki sebuah pertanyaan personal tentang acara ini, bagaimana cara saya
                                    menyampaikan pertanyaan tersebut?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Untuk pertanyaan lebih lanjut, silahkan tekan tombol "Hubungi Kami" agar ditangani lebih
                                lanjut oleh Tim kami.
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

    <div class="fixed z-50 flex items-center bottom-4 right-4">
        <a href="https://wa.me/+6285220522000"
            class="flex items-center px-6 py-2 m-4 rounded-full shadow-lg bg-gradient-to-r from-blue-500 to-green-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">
            <img src="{{ asset('img/icon_wa2.png') }}" class="w-12">
            &nbsp;&nbsp;
            <span class="text-2xl text-white">Hubungi Kami</span>
        </a>
    </div>

    </dl>
    </div>
    </section>
@endsection
