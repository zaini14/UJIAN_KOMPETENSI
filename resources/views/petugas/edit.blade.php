@extends('layouts.secondary')

@section('content')
	<form action="{{ url('petugas', $petugas->id) }}" method="post" enctype="multipart/form-data">
		@csrf
		@method('put')

		
			<div
			class="text-3xl text-gray-700 font-semibold mb-10">
			<p>Ubah Data Petugas</p>
		</div>
		<x-alert-error />
		<div
			class="border-2 border-gray-100 shadow-xl rounded-lg py-8 px-10">
		<div
			class="grid grid-cols-2">
			<div
				class="mb-4">
				<label 
					for="nama_petugas"
					class="block font-medium text-lg text-gray-500">
						Nama Petugas
				</label>
				<input 
					type="text" 
					name="nama_petugas" 
					id="nama_petugas"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"
					value="{{$petugas->nama_petugas}}">
				
			</div>

			<div
				class="mb-4">
				<label 
				for="username"
				class="block font-medium text-lg text-gray-500">
					Username
				</label>
				<input 
					type="text" 
					name="username" 
					id="username"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"
					value="{{$petugas->username}}">
				
			</div>

			<div
				class="mb-4">
				<label 
					for="level"
					class="block font-medium text-lg text-gray-500">
						Level
				</label>
				<select 
					name="level" 
					id="level"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
					<option 
						value="admin"
						@if ($petugas->level == 'admin')
							selected>
							Admin
					</option>
					<option 
						value="petugas"
						@else
						selected
						@endif>
								Petugas
					</option>
				</select>
			</div>

			<div
				class="mb-4">
				<label 
				for="profile"
				class="block font-medium text-lg text-gray-500">
					Password
				</label>
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
					Ubah
				</p>
			</button>
		</div>
	</div>

		
	</form>
@endsection