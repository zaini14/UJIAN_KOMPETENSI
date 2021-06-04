@extends('layouts.secondary')


@section('content')
	<div>
		<div
		class="text-3xl font-semibold text-gray-800 bg-pallete2 bg-opacity-70 rounded-xl px-4 py-5">
			<p>Detail Siswa</p>
		</div>
		<div class="flex mt-14">
			<img 
			src="{{ asset('img/user/'. $siswa->profile ) }}" 
			alt=""
			class="w-56 h-72 object-cover">
			<div
			class="ml-8">
				<div
					class="grid grid-cols-2 gap-6">
					<div>
						<p
				     	class="text-lg font-semibold text-gray-400 mb-2">Nama Lengkap</p>
				
						<p
						class="text-lg font-semibold text-gray-400 mb-2">NISN</p>
						<p
						class="text-lg font-semibold text-gray-400 mb-2">NIS</p>
						<p
						class="text-lg font-semibold text-gray-400 mb-2">Alamat</p>
						<p
						class="text-lg font-semibold text-gray-400 mb-2">No Telpon</p>
						<p
						class="text-lg font-semibold text-gray-400 mb-2">Kelas</p>
					</div>
					<div>
						<p
							class="mb-2 text-lg text-gray-800">{{$siswa->nama}}</p>
						<p
							class="mb-2 text-lg text-gray-800">{{$siswa->nisn}}</p>
						<p
							class="mb-2 text-lg text-gray-800">{{$siswa->nis}}</p>
						<p
							class="mb-2 text-lg text-gray-800">{{$siswa->alamat}}</p>
						<p
							class="mb-2 text-lg text-gray-800">{{$siswa->no_telp}}</p>
						<p
							class="mb-2 text-lg text-gray-800">{{$siswa->kelas->tingkat ." ". $siswa->kelas->jurusan}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>																
@endsection