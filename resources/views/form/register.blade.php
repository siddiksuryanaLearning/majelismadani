<form wire:submit.prevent="submit">
    <div class="py-2">
        <h2 class="mb-2 font-bold text-2xl">Form Pemesanan Tiket</h2>
        <p>Nama Pemesan Harus dimasukan di kolom Peserta</p>
        {{ $this->form }}
    </div>
    <p class="text-sm">*Catatan : untuk peserta dengan kendaraan naik bus, akan dikoordinasi terlebih dahulu oleh tim panitia</p>

    <div class="my-5 w-full flex justify-center">
        <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mr-2 mb-2">
            Daftar Sekarang
        </button>
    </div>

</form>
