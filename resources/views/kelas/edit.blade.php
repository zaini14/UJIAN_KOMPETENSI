@extends('layouts.secondary')

@section('content')
	<form action="{{ url('kelas', $kelas->id) }}" method="post">
		@csrf
		@method('put')

		
			<div
			class="text-3xl text-gray-700 font-semibold mb-10">
			<p>Ubah Data Kelas</p>
		</div>
		@if (count($errors) > 0)		
			<ul
				class="py-3 px-5 bg-red-500 text-white rounded-lg mb-3 font-semibold">
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
		<div
			class="border-2 border-gray-100 shadow-xl rounded-lg py-8 px-10">
		<div
			class="grid grid-cols-2">
			<div
				class="mb-4">
				<label 
					for="tingkat"
					class="font-semibold text-gray-600">
						Tingkat
				</label>
				<select 
					name="tingkat" 
					id="tingkat"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2 ml-5">
					<option 
						value="10"
						@if ($kelas->tingkat == 10)
							selected
						@endif>
							10
					</option>
					<option 
						value="11"
						@if ($kelas->tingkat == 11)
							selected
						@endif>
								11
					</option>
					<option 
						value="12"
						@if ($kelas->tingkat == 12)
							selected
						@endif>
								12
					</option>
				</select>
			</div>

			<div
				class="mb-4">
				<label 
				for="jurusan"
				class="font-semibold text-gray-600">
					Jurusan
				</label>
				<select 
					name="jurusan" 
					id="jurusan"
					class="focus:border-pallete3 border-2 rounded-md border-gray-500 focus:ring-0 focus:border-2 ml-5">
						Semester
				<option 
					value="RPL"
					@if ($kelas->jurusan == 'RPL')
						selected 
					@endif>
						Rekayasa Perangkat Lunak
				</option>
				<option 
					value="OTKP"
					@if ($kelas->jurusan == 'OTKP')
						selected
					@endif>
						Otomatisasi Tata Kelola Perkantoran
				</option>
				<option 
					value="AKL"
					@if ($kelas->jurusan == 'AKL')
						selected
					@endif>
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
					Ubah
				</p>
			</button>
		</div>
	</div>

		
	</form>
@endsection