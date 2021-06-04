<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $jenis = 'guru';
    public $row = [
        'No',
        'Nama',
        'Mata Pelajaran',
        'Alamat',
        'Aksi'
    ];

    public function index()
    {
        $batas = 5;
        $guru = Guru::orderBy('id', 'desc')
                        ->paginate($batas);
        $no = $batas * ($guru->currentPage() - 1);

        return view('guru.index', [
            'jenis' => $this->jenis,
            'row' => $this->row,
            'guru' => $guru, 
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
        return view('guru.tambah');
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
            'nama' => ['required','string'],
            'mapel' => ['required'],
            'alamat' => ['required'],
            'profile' => ['required', 'image', 'mimes:jpg,jpeg,png']
        ]);

        $guru = New Guru();
        $guru->nama = $req->nama;
        $guru->mapel = $req->mapel;
        $guru->alamat = $req->alamat;

        $gambar = $req->profile;

        $namaFile = time() .'.'. $gambar->getClientOriginalExtension(); 
        $gambar->move('img/user', $namaFile);

        $guru->profile = $namaFile; 
        $guru->save();
        return redirect('/guru')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::find($id);
        return view('guru.detail', [
            'guru' => $guru
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
        $guru = Guru::find($id);
        return view('guru.edit', [
            'guru' => $guru
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
                'nama' => ['required', 'string'],
                'mapel' => ['required'],
                'alamat' => ['required', 'string'],
            ]);
        $guru = Guru::find($id);

        if($request->file('profile')) {
             $this->validate($request, [
                 'profile' => ['required', 'image', 'mimes:jpg,jpeg,png']
             ]);


            $fileLama = $guru->profile;
            File::delete('img/user/'. $fileLama);

            
            $guru->nama = $request->nama;
            $guru->mapel = $request->mapel;
            $guru->alamat = $request->alamat;

            // Menghapus File Lama


            $gambar =    $request->profile;


            // Custom Nama File Gambar
            $namaFile = time() .'.'. $gambar->getClientOriginalExtension();
            // Memindahkan Gambar
            $gambar->move('img/user/', $namaFile);

            $guru->profile = $namaFile;
        } else {

            $guru->nama = $request->nama;
            $guru->mapel = $request->mapel;
            $guru->alamat = $request->alamat;
        }


        $guru->update();
        return redirect('guru')->with('toast_success', 'Data Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        File::delete('img/user/'. $guru->profile);
        $guru->delete();

        return redirect('guru')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
