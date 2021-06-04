<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;
use File;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $jenis = 'petugas';
    public $row = [
        'no',
        'Nama Petugas',
        'Username',
        'level',
        'Aksi'
    ];

    public function index()
    {
        $batas = 5;
        $petugas = Petugas::orderBy('id', 'desc')
                            ->paginate($batas);
        $no = $batas * ($petugas->currentPage() - 1);
        return view('petugas.index', [
            'jenis' => $this->jenis,
            'row' => $this->row,
            'petugas' => $petugas,
            'no' => $no
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.tambah');
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
            'nama_petugas' => ['required', 'string'],
            'username' => ['required', 'unique:petugas'],
            'password' => ['required'],
            'level' => ['required'],
            'profile' => ['required', 'image', 'mimes:jpg,jpeg,png']
        ]);

        $petugas = new Petugas();
        $petugas->username = $req->username;
        $petugas->nama_petugas = $req->nama_petugas;
        $petugas->password = Hash::make($req->password);
        $petugas->level = $req->level;

        $gambar = $req->profile;

        $namaFile = time() .".". $gambar->getClientOriginalExtension();
        $gambar->move('img/user', $namaFile);

        $petugas->profile = $namaFile;


        $petugas->save();

        return redirect('/petugas')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugas = Petugas::find($id);
        return view('petugas.detail', [
            'petugas' => $petugas
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
        $petugas = Petugas::find($id);

        return view('petugas.edit', [
            'petugas' => $petugas
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
            'nama_petugas' => ['required', 'string'],
            'username' => ['required'],
            'level' => ['required'],
        ]);

        $petugas = Petugas::find($id);

        if ($req->file('profile')) {
            $this->validate($req, [
                'profile' => ['required', 'image', 'mimes:jpg,jpeg,png']
            ]);
            
            $petugas->nama_petugas = $req->nama_petugas;
            $petugas->username = $req->username;
            $petugas->level = $petugas->level;
            $fileLama = $petugas->profile;
            File::delete('img/user/'. $fileLama);

            $gambar = $req->profile;

            $namaFile = time() .".". $gambar->getClientOriginalExtension();
            $gambar->move('img/user', $namaFile);

            $petugas->profile = $namaFile;

        } else {

            $petugas->nama_petugas = $req->nama_petugas;
            $petugas->username = $req->username;
            $petugas->level = $petugas->level;
        }

        $petugas->update();
        return redirect('/petugas')->with('toast_success', 'Data Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = Petugas::find($id);
        $namaFile = $petugas->profile;
        File::delete('img/user/'. $namaFile);
        $petugas->delete();


        return redirect('/petugas')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
