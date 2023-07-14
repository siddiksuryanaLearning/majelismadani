@extends('layouts.base')
@section('body')
    <section id="heros" class="w-full text-white" style="background-image: url('{{ asset('img/bg-heros.png') }}');">
        <div class="flex flex-col items-center justify-center max-w-4xl mx-auto sm:flex">

            <h1 class="flex pb-2 text-4xl font-bold sm:mt-10 py-14 px-7 sm:py-0 sm:px-0">Silaturahmi Akbar</h1>
            <p class="px-6 pb-5 text-xl text-center sm:py-4 sm:px-0">Peresmian Masjid Al-Muttaqien Madrasah Karya Madani
                <br>dan Gerakan
                Shodaqoh
                Biaya
                Pendidikan
            </p>
            <div class="flex flex-row-reverse sm:w-1/2 sm:mx-12 sm:mt-6">
                <img src="{{ asset('img/pemater_terupdate.png') }}" alt="Cover" class="h-4/5">
            </div>
            <div class="flex justify-center px-6 mt-10 mb-4 sm:pl-0 sm:flex">

                <a href="#form"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                    <span
                        class="relative text-2xl px-10  py-2.5 transition-all ease-in duration-75 bg-gradient-to-r from-orange-500 to-pink-500 hover:bg-gradient-to-bl dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Daftar Sekarang
                    </span>
                </a>
            </div>
        </div>




        </div>
    </section>

    <section id="about" class="text-white bg-blue-900 px-7">


        <div class="flex flex-col items-center justify-center max-w-4xl py-10 mx-auto text-center">
            <h1
                class="mb-6 text-3xl font-extrabold leading-none tracking-tight text-center text-white md:text-5xl xl:text-4xl">
                Tentang Acara</h1>
            <ul class="space-y-4 text-left text-white dark:text-gray-400">
                <li class="flex items-center space-x-3">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span class="text-xl">Peresmian Mesjid Al-Muttaqien</span>
                </li>
                <li class="flex items-center space-x-3 just">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span class="text-xl">Tausiyah dan Tholabul Ilmi </span>
                </li>
                <li class="flex items-center space-x-3">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span class="text-xl">Silaturahmi</span>
                </li>
                <div class="container max-w-full mt-6 ml-8 font-sans text-base">


                </div>

        </div>


        <style>
            .custom-label input:checked+svg {
                display: block !important;
            }
        </style>


        <div class="flex flex-row justify-center">
            <img src="{{ asset('img/calendar.png') }}" alt="Cover" class="w-10 h-10 sm:w-20 sm:h-20">


            <p class="py-2 mx-2 mb-6 text-xl text-center text-white sm:py-7 font-lght lg:mb-8 md:text-lg lg:text-2xl">Sabtu,
                29 Juli
                2023
                Jam
                06:00
                s/d
                Selesai
            </p>
        </div>
        <div class="flex flex-row justify-center">
            <img src="{{ asset('img/map.png') }}" alt="Cover" class="w-10 h-10 sm:w-20 sm:h-20">


            <p class="py-2 mx-2 mb-6 text-xl text-center text-white sm:py-7 font-lght lg:mb-8 md:text-lg lg:text-2xl">
                Jl. Sindangsari, Kabupaten Bandung Barat
            </p>
        </div>


        <div class="flex justify-center">
            <a href="https://goo.gl/maps/jyMto8McUgRn9cte7"
                class="text-white mb-6 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-2xl px-6 py-2.5 text-center mr-2">
                Lihat Lokasi
            </a>
        </div>






        </div>
    </section>
    <section id="speakers" class="text-white bg-center bg-cover"
        style="background-image: url('{{ asset('img/Frame.jpg') }}');">
        <div class="max-w-4xl mx-auto">
            <h1
                class="py-6 text-2xl font-extrabold leading-none tracking-tight text-center text-white md:text-5xl xl:text-4xl">
                Pemateri</h1>
            <img src="{{ asset('img/pemateri_update.png') }}"
                class="w-3/4 mx-auto bg-center bg-cover sm:scale-100 sm:bg-top md:bg-left lg:bg-right xl:bg-bottom "
                alt="mockup">
        </div>
    </section>
    <section id="how" class="text-white bg-blue-900">

        <div class="max-w-4xl px-4 py-10 mx-auto">

            <h1
                class="mb-8 text-2xl font-extrabold leading-none tracking-tight text-center text-white md:text-5xl xl:text-4xl">
                Cara Hadir</h1>
            <p class="mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">1. Pada halaman formulir
                pendaftaran,
                Masukkan Nama anda.</p>
            <p class="mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">2. Masukkan No.WA/Telepon anda yang
                bisa
                dihubungi.</p>
            <p class="mt-4 mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">3. Masukkan Alamat tempat
                tinggal
                anda.</p>
            <p class="mt-4 mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">4. Pilih jenis kendaraan (Bisa
                membawa
                kendaraan pribadi / Ikut serta dengan menggunakan kendaraan bus dan dikenakan biaya tambahan).</p>
            <p class="mt-4 mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">5. Pada label peserta, klik
                tombol
                Tambah peserta dan masukkan kembali Nama, No.Telepon serta tentukkan jumlah peserta yang akan hadir dalam
                acara ini.</p>
            <p class="mt-4 mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">6. Jika sudah selesai mengisi
                formulir, klik "Daftar Sekarang".</p>
            <p class="mt-4 mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">7. Anda akan diarahkan ke
                halaman
                Konfirmasi Pembayaran untuk memeriksa kembali formulir yang anda isi dan keterangan pembayaran (Akan
                langsung selesai apabila anda memilih kendaraan pribadi).</p>
            <p class="mt-4 mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">8. Silahkan Transfer total
                pembayaran
                anda ke No.Rekening Bank yang sudah tertera.</p>
            <p class="mt-4 mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">9. Setelah itu, konfirmasi
                pembayaran
                anda melalui tombol "Konfirmasi Pembayaran" dan kirim bukti berupa Screenshot bukti transaksi telah
                berhasil.</p>
            <p class="mt-4 mb-6 text-lg font-light text-white lg:mb-8 md:text-lg lg:text-2xl">10. Data sudah kami terima,
                tunggu konfirmasi dari pihak panitia</p>
            <div class="flex justify-center px-6 mb-4 sm:ml-0 sm:pl-0 sm:flex">

                <a href="#form"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                    <span
                        class="relative text-xl px-6  py-2.5 transition-all ease-in duration-75 bg-gradient-to-r from-orange-500 to-pink-500 hover:bg-gradient-to-bl dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Isi Formulir Sekarang
                    </span>
                </a>
            </div>
        </div>
    </section>
    <section id="form" class="bg-white">
        {{-- <div class="grid max-w-screen-xl px-4 py-2 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
             --}}
        <div class="max-w-4xl px-4 py-10 mx-auto">
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
                        <h2 class="mb-4 text-xl font-bold text-dark sm:text-4xl md:text-[32px]">
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
                                Acara ini tidak dikenakan biaya apapun. <span class="italic">(Kecuali untuk peserta yang
                                    menggunakan
                                    kendaraan bus ).</span> </p>
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
                                tidak terjadi hal yang tidak diinginkan. <span class="italic">( Misalnya Tersesat ).</span>
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

    <div class="fixed bottom-0 right-0 z-50 flex items-center sm:right-4 sm:bottom-4">
        <a href="https://wa.me/+6285220522000"
            class="flex items-center w-full px-2 py-2 m-3 rounded-full shadow-lg sm:px-6 sm:w-full bg-gradient-to-r from-blue-500 to-green-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">
            <img src="{{ asset('img/whatsapp1.png') }}" class="w-7">
            &nbsp;&nbsp;
            <span class="w-full text-white text-md sm:text-xl">Hubungi Kami</span>
        </a>
    </div>

    </dl>
    </div>
    </section>
@endsection
