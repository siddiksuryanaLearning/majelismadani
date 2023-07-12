@extends('layouts.base')
@section('body')
    <section id="heros" class="text-white" style="background-image: url('{{ asset('img/bg-heros.png') }}');">
        <div class="mx-auto max-w-4xl flex">
            <div class="w-1/2 flex flex-col items-center justify-center">
                <div>
                    <h1 class="text-4xl font-bold pb-2">Silaturahim Akbar</h1>
                    <p class="pb-5">Peresmian Masjid Al-Muttaqien Madrasah Karya Madani dan Gerakan shodaqoh biaya pendidikan</p>
                    <button class="my-5 bg-orange-500 text-white px-4 py-2 font-bold rounded-xl">Daftar Sekarang</button>
                </div>
            </div>
            <div class="w-1/2 flex flex-row-reverse">
                <img src="{{ asset('img/poster.jpeg') }}" alt="Cover" class="h-4/5">
            </div>
        </div>
    </section>
    <section id="about" class="bg-sky-700 text-white">
        <div class="mx-auto max-w-4xl py-10">
            <h1>Tentang Acara</h1>
            <p>Kami dengan hormat ingin mengundang anda untuk hadir dalam acara peresmian Masjid dan Gerakan shodaqoh biaya pendidikan</p>
        </div>
    </section>
    <section id="speakers" class="bg-sky-700 text-white">
        <div class="mx-auto max-w-4xl py-10">
            <h1>Pemateri</h1>
        </div>
    </section>
    <section id="how" class="bg-sky-700 text-white">
        <div class="mx-auto max-w-4xl py-10">
            <h1>Cara Ikutan</h1>
        </div>
    </section>
    <section id="form" class="bg-white">
        <div class="mx-auto max-w-md py-10">
            <livewire:register-component />
        </div>
    </section>
    <section id="faq" class="bg-sky-700 text-white">
        <div class="mx-auto max-w-4xl py-10">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
            <dl class="mt-10 space-y-8 divide-y divide-gray-900/10">
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">What's the best thing about Switzerland?</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                    </dd>
                </div>
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">How do you make holy water?</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aut tempora vitae odio inventore fuga aliquam nostrum quod porro. Delectus quia facere id sequi expedita natus.</p>
                    </dd>
                </div>
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">What do you call someone with no body and no nose?</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, voluptas ipsa quia excepturi, quibusdam natus exercitationem sapiente tempore labore voluptatem.</p>
                    </dd>
                </div>
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">Why do you never see elephants hiding in trees?</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                    </dd>
                </div>
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">Why can't you hear a pterodactyl go to the bathroom?</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">Because the pee is silent. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quas voluptatibus ex culpa ipsum, aspernatur blanditiis fugiat ullam magnam suscipit deserunt illum natus facilis atque vero consequatur! Quisquam, debitis error.</p>
                    </dd>
                </div>
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">Why did the invisible man turn down the job offer?</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-white">He couldn't see himself doing it. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet perspiciatis officiis corrupti tenetur. Temporibus ut voluptatibus, perferendis sed unde rerum deserunt eius.</p>
                    </dd>
                </div>

            </dl>
        </div>
    </section>
@endsection
