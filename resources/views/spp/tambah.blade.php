@extends('layouts.secondary')	

@section('content')
	<form action="{{ url('spp') }}" method="post">
		@csrf
		
		<div
			class="text-3xl text-gray-700 font-semibold mb-10">
			<p>Tambah Data SPP</p>
		</div>
		<x-alert-error />
		<div
		class="border-2 border-gray-100 shadow-xl rounded-lg py-8 px-10">
		<div
		class="grid grid-cols-2">
		<div
			class="mb-5">
				<label 	
					for="siswa"
					class="block font-medium text-lg text-gray-500">Siswa
				</label>
				<select 
					name="siswa" 
					id="siswa"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"
					>

					@foreach ($siswa as $data)
						<option
							name="siswa" id="siswa"
							class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2"
							value={{$data->nisn}}>{{$data->nama}}</option>
					@endforeach
					
				</select>
			</div>
			<div
				class="">
				<label 
					for="tahun"
					class="block font-medium text-lg text-gray-500">
						Tahun
				</label>
				<input 
					type="text" 
					name="tahun" 
					id="tahun"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
			</div>
			<div
				class="mb-5">
				<label 
					for="bulan"
					class="block font-medium text-lg text-gray-500">
						Bulan
				</label>
				<input 
					type="text" 
					name="bulan" 
					id="bulan"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2">
			</div>
			<div
				class="mb-5">
				<label 
					for="nominal"
					class="block font-medium text-lg text-gray-500">
						Nominal
				</label>
				<input 
					type="text" 
					name="nominal" 
					id="nominal"
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