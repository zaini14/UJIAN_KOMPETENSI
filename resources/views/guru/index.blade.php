@extends('layouts.secondary')

@section('content')
	 	<x-tabel :allData="$guru" :no="$no" :jenis="$jenis" :row="$row"/>
	 	{{$guru->links()}}
@endsection