@extends('layouts.base')
@section('body')
    <section id="heros" class="bg-sky-700 text-white">
        <div class="mx-auto max-w-4xl py-10 flex">
            #Order Details {{ $order->name }}
        </div>
    </section>
@endsection
