@extends('layouts.base')
@section('body')
    @if ($order->vehicle == 'bus')
        <section id="heros" class="mb-10 bg-white-700">
            <div class="max-w-md px-6 py-8 mx-auto mt-8 bg-white border rounded-lg shadow-lg">
                <h1 class="my-4 text-2xl font-bold text-center text-gray-600">Silaturahmi Akbar</h1>
                <hr class="mb-2">
                <div class="flex justify-between mb-6">
                    <h1 class="text-lg font-bold"></h1>
                    <div class="text-gray-700">
                        <div>Tanggal: {{ $order->created_at }}</div>
                    </div>
                </div>
                <div class="mb-8">
                    <h2 class="mb-4 text-lg font-bold">Pembayaran:</h2>
                    <div class="mb-2 text-gray-700">{{ $order->name }}</div>
                    <div class="mb-2 text-gray-700">{{ $order->address }}</div>
                    <div class="mb-2 text-gray-700">{{ $order->phone }}</div>
                </div>
                <table class="w-full mb-8">
                    <thead>
                        <tr>
                            <th class="font-bold text-left text-gray-700">Deskripsi</th>
                            <th class="font-bold text-right text-gray-700">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left text-gray-700">Peserta</td>
                            <td class="text-right text-gray-700">{{ $order->qty }} Orang</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="font-bold text-left text-gray-700">Total</td>
                            <td class="font-bold text-right text-gray-700">@currency($order->qty * 60000)</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="mb-2 text-gray-700">Tansfer ke : </div>

                <div class="flex flex-col items-center mb-4 text-center text-gray-700">
                    <img src="{{ asset('img/bsi.png') }}" class="items-center w-1/5 bg-center bg-cover sm:scale-25"
                        style="display: inline-block;" alt="mockup"></td>

                    <span class="mt-2 font-light text-gray-900">Bank
                        Syariah
                        Indonesia

                    </span>
                    <span class="font-bold">an. Nurana Puji Susanto</span>
                    <span>Kode Bank</span>
                    <span class="font-bold">451 - 716.779.778.9<span>


                </div>
                <div class="flex flex-col items-center">
                    <a href="https://wa.me/+6285220522000"
                        class=" text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-2 mb-2">
                        Konfirmasi Pembayaran
                    </a>
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
            <a href="https://wa.me/+6285220522000"
                class="flex items-center px-6 py-2 m-4 rounded-full shadow-lg bg-gradient-to-r from-blue-500 to-green-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">
                <img src="{{ asset('img/icon_wa2.png') }}" class="w-12">
                &nbsp;&nbsp;
                <span class="text-2xl text-white">Hubungi Kami</span>
            </a>
        </div>
    @endif
@endsection
