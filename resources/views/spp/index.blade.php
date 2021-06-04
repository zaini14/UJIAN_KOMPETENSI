@extends('layouts.secondary')

@section('content')
	<x-tabel :allData="$spp" :jenis="$jenis" :row="$row" :no="$no" />
	{{$spp->links()}}
@endsection