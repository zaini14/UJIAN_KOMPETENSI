<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;
use App\Models\Siswa;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $jenis = 'spp';
    public $row = [
        'No',
        'Siswa',
        'bulan',
        'tahun',
        'Nominal',
        'Aksi'
    ];  


    public function index()
    {
        $batas = 5;
        $spp = Spp::orderBy('id', 'desc')
                ->paginate($batas);
        $no = $batas * ($spp->currentPage() - 1);
        return view('spp.index', [
           'spp' => $spp,
           'no' => $no,
           'jenis' => $this->jenis,
           'row' => $this->row

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spp.tambah', [
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'siswa' => ['required'],
            'bulan' => ['required', 'string'],
            'tahun' => ['required', 'string'],
            'nominal' => ['required', 'integer']
        ]);

        $spp = new Spp();
        $spp->nisn = $request->siswa;
        $spp->bulan = $request->bulan;
        $spp->tahun = $request->tahun;
        $spp->nominal = $request->nominal;
        $spp->isBayar = False;
        $spp->save();

        return redirect('/spp')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spp = Spp::find($id);
        return view('spp.edit', [
            'spp' => $spp,
            'siswa' => Siswa::all(),
        ]);
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
        $this->validate($request, [
            'siswa' => ['required'],
            'bulan' => ['required', 'string'],
            'tahun' => ['required', 'string'],
            'nominal' => ['required', 'integer']
        ]);

        $spp = Spp::find($id);
        $spp->nisn = $request->siswa;
        $spp->bulan = $request->bulan;
        $spp->tahun = $request->tahun;
        $spp->nominal = $request->nominal;
        $spp->isBayar = False;
        $spp->update();

        return redirect('/spp')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spp = Spp::find($id);
        $spp->delete();
        return redirect('spp')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
