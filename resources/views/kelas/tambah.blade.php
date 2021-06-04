@extends('layouts.secondary')

@section('content')
	<form action="{{ url('kelas') }}" method="post">
		@csrf

		
			<div
			class="text-3xl text-gray-700 font-semibold mb-10">
			<p>Tambah Data Kelas</p>
		</div>
		<x-alert-error />
		<div
			class="border-2 border-gray-100 shadow-xl rounded-lg py-8 px-10">
		<div
			class="grid grid-cols-2">
			<div
				class="mb-4">
				<label 
					for="tingkat"
					class="block font-medium text-lg text-gray-500">
						Tingkat
				</label>
				<select 
					name="tingkat" 
					id="tingkat"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2 ml-5">
					<option 
						value="10">
							10
					</option>
					<option 
						value="11">
								11
					</option>
					<option 
						value="12">
								12
					</option>
				</select>
			</div>

			<div
				class="mb-4">
				<label 
				for="jurusan"
				class="block font-medium text-lg text-gray-500">
					Jurusan
				</label>
				<select 
					name="jurusan" 
					id="jurusan"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2 ml-5">
						Semester
				<option 
					value="RPL">
						Rekayasa Perangkat Lunak
				</option>
				<option 
					value="OTKP">
						Otomatisasi Tata Kelola Perkantoran
				</option>
				<option 
					value="AKL">
						Akutansi Keuangan dan Lembaga
				</option>
				</select>
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