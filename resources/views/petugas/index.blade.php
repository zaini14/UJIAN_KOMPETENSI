@extends('layouts.secondary')


@section('content')
	<x-tabel :allData="$petugas" :no="$no" :row="$row" :jenis="$jenis" />
	{{$petugas->links()}}
@endsection