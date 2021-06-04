@extends('layouts.secondary')	

@section('content')
	<form action="{{ url('siswa') }}" method="post" enctype="multipart/form-data">
		@csrf
		
		<div
			class="text-3xl text-gray-700 font-semibold mb-10">
			<p>Tambah Data Siswa</p>
		</div>
		<x-alert-error />
		<div
		class="border-2 border-gray-100 shadow-xl rounded-lg py-8 px-10">
		<div
		class="grid grid-cols-2">
			<div
				class="mb-5">
				<label 
					for="nisn"
					class="block font-medium text-lg text-gray-500">
						NISN
				</label>
				<input 
					type="text" 
					name="nisn" 
					id="nisn"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
			</div>
			<div
				class="mb-5">
				<label 
					for="nis"
					class="block font-medium text-lg text-gray-500">
						NIS
				</label>
				<input 
					type="text" 
					name="nis" 
					id="nis"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
			</div>
			<div
				class="mb-5">
				<label 
					for="nama"
					class="block font-medium text-lg text-gray-500">
						Nama
				</label>
				<input 
					type="text" 
					name="nama" 
					id="nama"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
			</div>
			<div>
				<label 	
					for="kelas"
					class="block font-medium text-lg text-gray-500">Kelas
				</label>
				<select 
					name="kelas" 
					id="kelas"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"
					>

					@foreach ($kelas as $data)
						<option
							name="kelas" id="kelas"
							class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"
							value={{$data->id}}>{{$data->tingkat ." ".  $data->jurusan}}</option>
					@endforeach
					
				</select>
			</div>
			<div>
				<label 
				for="alamat"
				class="block font-medium text-lg text-gray-500">Alamat</label>
					<textarea 
					name="alamat" 
					id="alamat"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"></textarea>
			</div>
			<div>
				<label 
				for="no_telp"
				class="block font-medium text-lg text-gray-500">No Telpon</label>
				<input 
				type="text" 
				name="no_telp"
				id="no_telp"
				class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
			</div>
			<div>
				<label 
				for="password"
				class="block font-medium text-lg text-gray-500">Password Akun Siswa</label>
				<input 
				type="text" 
				name="password"
				id="password"
				class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
			</div>
			<div
				class="mt-5">
				<label 
				for="profile"
				class="block font-medium text-lg text-gray-500">Foto Profil</label>
				<input 
				type="file" 
				name="profile"
				id="profile"
				class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
			</div>
	</div>
	<div
			class="flex justify-end">
			<button
			type="submit"
			class="flex items-center bg-blue-400 px-2 py-2 rounded-md text-white hover:bg-blue-300 mt-10 justify-center">

				<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" style="fill:white" viewBox="0 0 24 24"><path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/></svg>
				<p
					class="ml-3">
					Tambah
				</p>
			</button>
		</div>
	</div>
	</form>
@endsection