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
		@if ($spp)
			<div
		class="text-3xl font-semibold text-gray-800 bg-pallete2 bg-opacity-70 rounded-xl px-4 py-5 mt-10">
			<p>Detail Spp Siswa</p>
		</div>



		<div class="w-full">
                <div
                    class="flex justify-between">
                </div>
                @if (Session::has('toast_success'))
                        
                @endif
                <div class="bg-white shadow-md rounded my-6">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-lg leading-normal">
                                    <th class="py-3 px-6 text-center">No</th>
                                    <th class="py-3 px-6 text-center">Bulan</th>
                                    <th class="py-3 px-6 text-center">Tahun</th>
                                    <th class="py-3 px-6 text-center">Nominal</th>
                                    <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>

    <tbody class="text-gray-600 text-md font-light">
        @foreach ($spp as $data)
        	<tr class="border-b border-gray-200 hover:bg-gray-100">

            <td class="py-3 px-6 text-left whitespace-nowrap">
            <div class="flex items-center">
                <span class="font-medium">{{++$no}}</span>
            </div>
        </td>
        <td class="py-3 px-6 text-center">
           <div class="flex items-center">
                <p>{{$data->bulan}}</p>
            </div>
        </td>
        <td class="py-3 px-6 text-center">
           <div class="flex items-center">
                <p>{{$data->tahun}}</p>
            </div>
        </td>
        <td class="py-3 px-6 text-center">
           <div class="flex items-center">
                <p>{{$data->nominal}}</p>
            </div>
        </td>
        <td class="py-3 px-6 text-center">
            <div class="flex item-center justify-center">
                @if ($data->isBayar == false)
                	<form action="{{ url('/transaksi/bayar', $data->id) }}" method="get">
                    @csrf
                    <button 
                        type="submit"
                        onclick="return confirm('Apakah Siswa Ini Akan Membayar SPP ?')"
                        class="block px-5 py-2 bg-red-400 rounded-full text-white">
                    Bayar
                </button>
                </form>
                @else 
                	<p
                		class="block px-2 py-2 bg-green-300 font-semibold rounded-full text-gray-600">Sudah Bayar</p>
                @endif
            </div>
        </td>
    </tr>
        @endforeach
</tbody>

    </table>
</div>
	@endif


	</div>																
@endsection