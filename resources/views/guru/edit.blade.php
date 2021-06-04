@extends('layouts.secondary')

@section('content')
	<form action="{{ url('/guru', $guru->id) }}" method="post" enctype="multipart/form-data">
		@csrf
		@method('put')

		
			<div
			class="text-3xl text-gray-700 font-semibold mb-10">
			<p>Ubah Data Guru</p>
		</div>
		<x-alert-error />
		<div
			class="border-2 border-gray-100 shadow-xl rounded-lg py-8 px-10">
		<div
			class="grid grid-cols-2">
			<div
				class="mb-4">
				<label 
					for="nama"
					class="block font-medium text-lg text-gray-500">
						Nama Guru
				</label>
				<input 
					type="text" 
					name="nama" 
					id="nama"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"
					value={{$guru->nama}}>
				
			</div>

			<div
				class="mb-4">
				<label 
				for="mapel"
				class="block font-medium text-lg text-gray-500">
					Mata Pelajaran
				</label>
				<input 
					type="text" 
					name="mapel" 
					id="mapel"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"
					value={{$guru->mapel}}>
				
			</div>

			<div>
				<label 
				for="alamat"
				class="block font-medium text-lg text-gray-500">Alamat</label>
					<textarea 
					name="alamat" 
					id="alamat"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">{{$guru->alamat}}</textarea>
			</div>

			<div
				class="mb-4">
				<label 
				for="profile"
				class="block font-medium text-lg text-gray-500">
					Profile
				</label>
				<input 
					type="file" 
					name="profile" 
					id="profile"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">

			</div>


		</div>
		<div`
			class="flex justify-end">
			<button
			type="submit"
			class="flex items-center bg-blue-400 px-2 py-2 rounded-md text-white hover:bg-blue-300 mt-10 justify-center">

				<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" style="fill:white" viewBox="0 0 24 24"><path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/></svg>
				<p
					class="ml-3">
					Ubah
				</p>
			</button>
		</div>
	</div>

		
	</form>
@endsection