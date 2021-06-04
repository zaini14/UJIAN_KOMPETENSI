<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $jenis = 'kelas';
    public $row = [
        'No',
        'Tingkat',
        'Jurusan',
        'Aksi'
    ];


    public function index()
    {
        $batas = 5;
        $kelas = Kelas::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($kelas->currentPage() - 1);
        return view('kelas.index', [
            'kelas' => $kelas,
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
        return view('kelas.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->validate($req, [
            'tingkat' => 'required',
            'jurusan' => 'required',
        ]);

        $kelas = new Kelas;
        $kelas->tingkat = $req->tingkat;
        $kelas->jurusan = $req->jurusan;
        $kelas->save();

        return redirect('/kelas')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('kelas.detail', [
            'kelas' => Kelas::find($id),
            'join' => Kelas::join('siswa', 'kelas.id', '=', 'siswa.id_kelas')
                        ->select('*')
                        ->where('id_kelas', '=', $id)
                        ->get()
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
        return view('kelas.edit', [
            'kelas' => Kelas::find($id)
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'tingkat' => 'required',
            'jurusan' => 'required',
        ]);

        $kelas = kelas::find($id);
        $kelas->tingkat = $req->tingkat;
        $kelas->jurusan = $req->jurusan;
        $kelas->update();

        return redirect('/kelas')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas')->with('toast_success', 'Data Berhasil Dihapus');
    }

}
