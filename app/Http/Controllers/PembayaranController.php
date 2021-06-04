<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;
use App\Models\Siswa;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::where('nisn', $id)->first();

        $spp = Spp::where('nisn', $id)->get();
        $no = 0;
        return view('transaksi.detail', [
            'siswa' => $siswa,
            'spp' => $spp,
            'no' => $no,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function bayar($id)
    {
        $spp = Spp::find($id);
        $spp->isBayar = True;
        $spp->update();

        return redirect('transaksi/'. $spp->nisn)->with('toast_success', 'Siswa Telah Berhasil Membayar SPP');
    }
}
