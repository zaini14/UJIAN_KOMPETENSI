<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
use App\Models\Kelas;
use File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $jenis = 'siswa';
    public $row = [
        'no',
        'nisn',
        'nis',
        'nama',
        'kelas',
        'alamat',
        'no telp',
        'aksi'
    ];
    public function index()
    {
        $batas = 5;
        $siswa = Siswa::orderBy('created_at', 'desc')->paginate($batas);
        $no = $batas * ($siswa->currentPage() - 1);
        return view('siswa.index', [
            'siswa' => $siswa,
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
        return view('siswa.tambah', [
            'kelas' => Kelas::all()
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
            'nisn' => ['required', 'unique:siswa'],
            'nis' => ['required', 'integer'],
            'nama' => ['required', 'string'],
            'kelas' => ['required'],
            'alamat' => ['required'],
            'no_telp' => ['required'],
            'profile' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            'password' => ['required', 'min:5']
        ]);

        $siswa = new Siswa();
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->kelas;
        $siswa->no_telp = $request->no_telp;
        $siswa->alamat = $request->alamat;
        $password = Hash::make($request->password);
        $siswa->password = $password;
        $gambar = $request->profile;


        // Custom Nama File Gambar
        $namaFile = time() .'.'. $gambar->getClientOriginalExtension();
        // Memindahkan Gambar
        $gambar->move('img/user/', $namaFile);

        $siswa->profile = $namaFile;


        $siswa->save();
        return redirect('siswa')->with('toast_success', 'Data Berhasil Ditambahkan');
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

        return view('siswa.detail', [
            'siswa' => $siswa
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
        $siswa = Siswa::where('nisn', $id)->first();

        return view('siswa.edit', [
            'siswa' => $siswa,
            'kelas' => Kelas::all()
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
                'nisn' => ['required', 'integer'],
                'nis' => ['required', 'integer'],
                'nama' => ['required', 'string'],
                'kelas' => ['required'],
                'alamat' => ['required'],
                'no_telp' => ['required'],
            ]);
        $siswa = Siswa::where('nisn', $id)->first();

        if($request->file('profile')) {
             $this->validate($request, [
                 'profile' => ['required', 'image', 'mimes:jpg,jpeg,png']
             ]);


            $fileLama = $siswa->profile;
            File::delete('img/user/'. $fileLama);

            
            $siswa->nisn = $request->nisn;
            $siswa->nis = $request->nis;
            $siswa->nama = $request->nama;
            $siswa->id_kelas = $request->kelas;
            $siswa->no_telp = $request->no_telp;
            $siswa->alamat = $request->alamat;

            // Menghapus File Lama


            $gambar =    $request->profile;


            // Custom Nama File Gambar
            $namaFile = time() .'.'. $gambar->getClientOriginalExtension();
            // Memindahkan Gambar
            $gambar->move('img/user/', $namaFile);

            $siswa->profile = $namaFile;
        } else {

            $siswa->nisn = $request->nisn;
            $siswa->nis = $request->nis;
            $siswa->nama = $request->nama;
            $siswa->id_kelas = $request->kelas;
            $siswa->no_telp = $request->no_telp;
            $siswa->alamat = $request->alamat;
        }


        $siswa->update();
        return redirect('siswa')->with('toast_success', 'Data Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::where('nisn', $id)->first();
        $namaFile = $siswa->profile;
        File::delete('img/user/'. $namaFile);
        $siswa->delete();

        return redirect('siswa')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
