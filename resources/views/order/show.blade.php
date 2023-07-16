@extends('layouts.base')
@section('body')
    @if ($order->vehicle == 'bus')
        <section id="heros" class="mb-10 bg-white-700">
            <div class="max-w-md px-6 py-8 mx-auto mt-8 bg-white border rounded-lg shadow-lg">
                <h1 class="my-4 text-2xl font-bold text-center text-gray-600">Detail Pembayaran</h1>
                <hr class="mb-2">
                <div class="flex mb-6">
                    <h1 class="text-lg font-bold"></h1>
                    <div class="text-gray-700">
                        <div>Tanggal: {{ $order->created_at }}</div>
                    </div>
                </div>
                <div class="mb-8">
                    <h2 class="mb-4 text-lg font-bold">Data Pembayaran :</h2>
                    <div class="mb-2 text-gray-700">{{ $order->name }}</div>
                    <div class="mb-2 text-gray-700">{{ $order->address }}</div>
                    <div class="mb-2 text-gray-700">{{ $order->phone }}</div>
                </div>
                <table class="w-full mb-8 leading-8">
                    <thead>
                        <tr class="">
                            <th class="text-lg font-bold text-left text-gray-700">
                                Deskripsi
                            </th>
                            <th class="text-lg font-bold text-right text-gray-700">Jumlah</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="text-lg text-left text-gray-700">
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">Peserta

                            </td>
                            <td class="text-lg text-right text-gray-700">
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">{{ $order->qty }}
                                Orang
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-xl text-left text-gray-700 mb-3font-bold">
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">Total
                            </td>
                            <td class="text-xl font-bold text-right text-gray-700">
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray"> @currency($order->qty * 60000)
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="mb-4 text-lg text-gray-700">Metode Pembayaran : </div>

                <div
                    class="flex flex-col items-center py-4 mb-4 text-center text-gray-700 border-2 border-gray-400 shadow-lg bg-green-50 rounded-2xl">
                    <img src="{{ asset('img/bsi.png') }}" class="items-center w-1/5 bg-center bg-cover sm:scale-25"
                        style="display: inline-block;" alt="mockup"></td>

                    <span class="mt-2 text-lg font-light text-gray-900">Bank
                        Syariah
                        Indonesia

                    </span>
                    <span class="text-2xl font-bold">an. Nurana Puji Susanto</span>
                    <span class="text-2xl font-bold">716.779.778.9<span>

                </div>
                <div class="flex justify-center">
                    <svg class="w-10 h-10 hover:scale-150" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5A3.375 3.375 0 006.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0015 2.25h-1.5a2.251 2.251 0 00-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 00-9-9z" />
                    </svg>

                    <button id="btnCopy"
                        class="px-4 py-2 font-bold text-gray-800 bg-white border-2 border-black rounded drop-shadow-2xl hover:bg-black hover:text-white">Salin
                        Nomor Rekening</button>
                </div>
                <p class="py-4 text-center text-gray-500">Kirim bukti pembayaran atau screenshoot melalui whatsapp, dengan
                    menekan
                    tombol di bawah
                </p>
                <div class="flex flex-col items-center justify-center">

                    <a href="https://wa.me/+6285220522000"
                        class=" text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xl px-4 py-2.5 text-center mr-2 mb-2">
                        Konfirmasi Pembayaran
                    </a>
                    <a href="https://daftar.majelismadani.id/"
                        class="items-center justify-center text-xl text-center text-black underline">
                        kembali
                    </a>

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
    @elseif($order->vehicle == 'private')
        <section id="heros" class="w-full h-screen mb-10 bg-sky-700">
            <div
                class="flex flex-col items-center justify-center h-screen py-2 sm:justify-center sm:h-screen sm:flex sm:items-center bg-sky-700">
                <h1 class="text-2xl text-center text-white sm:text-4xl">Terimakasih telah Mendaftar,<br>
                    <p>Kami tunggu kedatangan anda</p>
                </h1>
                <div class="flex justify-center py-16">

                    <a href="https://wa.me/+6285220522000"
                        class="text-xl text-white bg-gradient-to-r px-24 from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-md py-2.5 text-center mr-2 mb-2">
                        Narahubung
                    </a>

                </div>
                <a href="https://daftar.majelismadani.id/" class="text-2xl text-white underline">
                    kembali
                </a>
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
    @endif
@endsection
