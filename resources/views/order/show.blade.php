@extends('layouts.base')
@section('body')
    @if ($order->vehicle == 'bus')
        <section id="heros" class="mb-10 bg-sky-700">
            <div class="mb-6 text-white card bg-sky-700 sm:flex sm:justify-center">
                <h1 class="mt-10 text-3xl sm:mt-10">
                    Terimakasih telah Mendaftar</h1>
            </div>
            <div class="mb-6 text-white card bg-sky-700 sm:flex sm:justify-center">
                <div class="max-w-sm p-6 bg-cover rounded-lg shadow-lg bg-blue dark:bg-neutral-700">
                    <h5
                        class="mb-6 text-xl font-medium leading-tight text-center text-white text-neutral-800 dark:text-neutral-50">
                        Detail Pembayaran
                    </h5>
                    <p class="mb-4 text-base text-white text-neutral-600 dark:text-neutral-200">
                        Nama : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        {{ $order->name }}
                    </p>
                    <hr class="mb-4">
                    <p class="mb-4 text-base text-white text-neutral-600 dark:text-neutral-200">
                        WA :
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;

                        {{ $order->phone }}
                    </p>
                    <hr class="mb-4">
                    <p class="mb-4 text-base text-white text-neutral-600 dark:text-neutral-200">
                        Peserta :
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $order->qty }} Orang
                    </p>
                    <hr class="mb-4">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-white text-neutral-800 dark:text-neutral-50">
                        Total
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        @currency($order->qty * 60000)
                    </h5>
                    <h1></h1>
                </div>
            </div>
            </div>
            <p class="mb-6 font-light text-center text-white lg:mb-8 md:text-lg lg:text-2xl">Kirim pembayaran ke No rekening
                :
            </p>
            <div class="mb-6 text-white card bg-sky-700 sm:flex sm:justify-center">
                <div class="items-center border-2 sm:flex sm:flex-row sm:justify-center sm:border-2"
                    style="text-align: center;">
                    <img src="{{ asset('img/bsi.png') }}" class="items-center scale-50 bg-center bg-cover sm:scale-50"
                        style="display: inline-block;" alt="mockup">
                    <p class="p-2 mx-0 mb-4 font-light text-white lg:mb-8 md:text-lg lg:text-2xl">Bank Syariah Indonesia
                        <br>an. Nurana Puji Susanto
                        <br>Kode Bank 451 - 716.779.778.9
                    </p>
                </div>
            </div>
            <p class="mt-4 mb-6 font-light text-center text-white lg:mb-8 md:text-lg lg:text-2xl">Konfrimasai bukti transef
                di
                kirim ke :</p>
            <div class="text-white card bg-sky-700 sm:flex sm:justify-center">
                <div class="items-center p-4 mb-2 border-2 sm:flex sm:flex-row sm:justify-center sm:border-2"
                    style="text-align: center;">
                    <img src="{{ asset('img/icon_phone.png') }}"
                        class="items-center scale-50 bg-center bg-cover sm:scale-75" style="display: inline-block;"
                        alt="mockup">
                    <p class="mx-0 font-light text-white lg:mb-8 md:text-lg lg:text-2xl"> 085220522000 (Nana)</p>
                </div>
            </div>

        </section>
        <div class="fixed z-50 flex items-center bottom-4 right-4">
            <a href="https://wa.me/+6285220522000" class="flex items-center p-2 bg-green-500 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 6l3 9a5 5 0 007 3m4 0a5 5 0 01-5 5H8a5 5 0 01-5-5V8a5 5 0 015-5h9a5 5 0 015 5v9a5 5 0 01-5 5h-3">
                    </path>
                </svg>
                <span class="text-white">Hubungi Kami</span>
            </a>
        </div>
    @elseif($order->vehicle == 'private')
        <section id="heros" class="w-full h-screen mb-10 bg-sky-700">
            <div
                class="flex items-center justify-center h-screen sm:justify-center sm:h-screen sm:flex sm:items-center bg-sky-700">
                <h1 class="text-white md:text-4xl">Terimakasih telah Mendaftar,<br>
                    <p>Kami tunggu kedatangan anda</p>
                </h1>
            </div>
        </section>
        <div class="fixed z-50 flex items-center bottom-4 right-4">
            <a href="https://wa.me/+6285220522000" class="flex items-center p-2 bg-green-500 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 6l3 9a5 5 0 007 3m4 0a5 5 0 01-5 5H8a5 5 0 01-5-5V8a5 5 0 015-5h9a5 5 0 015 5v9a5 5 0 01-5 5h-3">
                    </path>
                </svg>
                <span class="text-white">Hubungi Kami</span>
            </a>
        </div>
    @endif
@endsection
