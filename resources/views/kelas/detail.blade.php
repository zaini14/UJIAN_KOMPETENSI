@extends('layouts.secondary')

@section('content')
	<div>
		<p
			class="text-3xl text-gray-700 mb-5 ">
		@if ($kelas->jurusan == 'RPL')
			Rekayasa Perangkat Lunak
		@elseif ($kelas->jurusan == 'OTKP')
			Otomatisasi Tata Kelola Perkantoran
		@else 
			Akuntansi Keuangan dan Lembaga
		@endif
	</p>
	</div>

	<div
		class="grid grid-cols-3 gap-2">
		<div
			class="py-14 text-center bg-gay-100 shadow-xl rounded-lg">
		<p
			class="text-5xl text-gray-600 font-bold">{{$kelas->tingkat}}</p>
		<p
			class="text-gray-600 text-lg font-semibold mt-3">Tingkat</p>
	</div>
	<div
		class="py-14 text-center bg-gay-100 shadow-xl rounded-lg">
		<p
			class="text-5xl text-gray-600 font-bold">{{count($join)}}</p>
		<p
			class="text-gray-600 text-lg font-semibold mt-3">Jumlah Siswa</p>
	</div>
	</div>
@endsection