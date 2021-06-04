@extends('layouts.secondary')	

@section('content')
	<x-tabel :allData="$siswa" :row="$row" :jenis="$jenis" :no="$no"/>
	{{$siswa->links()}}
@endsection