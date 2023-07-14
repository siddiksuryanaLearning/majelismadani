<form wire:submit.prevent="submit">
    <div class="py-2">
        <h1 class="mb-2 text-2xl font-bold text-center sm:text-4xl sm:my-6 ">Form Pemesanan Tiket</h1>
        <p class="my-2 text-md text-slate-500">Nama Pemesan Harus dimasukan di kolom Peserta</p>
        {{ $this->form }}
    </div>
    <p class="text-sm text-slate-500">*Catatan : untuk peserta dengan kendaraan naik bus, akan dikoordinasi
        terlebih dahulu oleh tim panitia</p>

    <div class="flex justify-center w-full my-5">
        <button type="submit"
            class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-2 mb-2">
            Daftar Sekarang
        </button>
    </div>

</form>
