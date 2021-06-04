@extends('layouts.secondary')

@section('content')
	 	<x-tabel :allData="$kelas" :no="$no" :jenis="$jenis" :row="$row"/>
	 	{{$kelas->links()}}
@endsection