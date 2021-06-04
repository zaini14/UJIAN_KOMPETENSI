<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;
use PDF;

class RiwayatController extends Controller
{
    public function index()
    {
    	$spp = Spp::where('isbayar', '=', True)->get();
    	$no = 0;
    	return view('riwayat.index', [ 
    		'spp' => $spp,
    		'no' => $no
    	]);
    }
    public function cetakPdf()
    {
    	$spp = Spp::where('isBayar', '=', True)->get();
    	$no= 0;
    	$pdf = PDF::loadview('riwayat.cetak',
    					['spp'=>$spp,
    						'no' => $no
    					]);
		return $pdf->download('laporan-Spp-pdf');
		// return view('riwayat.cetak', [
		// 	'no' => $no,
		// 	'spp' => $spp
		// ]);
    }
}
