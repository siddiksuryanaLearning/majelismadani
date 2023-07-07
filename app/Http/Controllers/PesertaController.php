<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PesertaStoreRequest;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PesertaStoreRequest $request)
    {
        $peserta = Peserta::create($request->validated());

        return redirect('/thanks-page')->with('success', 'Terima kasih!, silahkan tunggu informasi lebih lanjut dari kami.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}
