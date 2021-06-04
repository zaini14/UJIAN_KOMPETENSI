{{-- @extends('layouts.master')


@section('content')
	<div>
    	<div class="w-full px-16">
    		<p
    			class="text-4xl font-bold text-center mt-10 mb-5">Laporan SPP SMK Islam Penguji Kota Sukabumi</p>
                <div
                    class="flex justify-between">
                </div>
                <div class="bg-white shadow-md rounded my-6">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-lg leading-normal">
                                    <th class="py-3 px-6 text-center">No</th>
                                    <th class="py-3 px-6 text-center">Nama Siswa</th>
                                    <th class="py-3 px-6 text-center">Bulan</th>
                                    <th class="py-3 px-6 text-center">Tahun</th>
                                    <th class="py-3 px-6 text-center">Nominal</th>
                                    <th class="py-3 px-6 text-center">Pembayaran</th>
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
                <p>{{$data->siswa->nama}}</p>
            </div>
        </td>
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
                
                	<p
                		class="block px-2 py-2 bg-green-300 font-semibold rounded-full text-gray-600">Sudah Bayar</p>
               
            </div>
        </td>
    </tr>
        @endforeach
</tbody>

    </table>
</div>


	</div>																
@endsection --}}



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan SPP</title>
	<style>
		p{
			font-size: 1.5rem;
			font-family: arial;
		}
		.center {
			text-align:center;
		}
	</style>
</head>
<body>
	<div class="center">
		<p>Laporan SPP SMK Islam Penguji</p>
		<table border=1 style="margin: 0 auto; width: 100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Bulan</th>
					<th>Tahun</th>
					<th>Nominal</th>
					<th>Pembayaran</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($spp as $data)
					<tr>
						<td>{{++$no}}</td>
						<td>{{$data->siswa->nama}}</td>
						<td>{{$data->bulan}}</td>
						<td>{{$data->tahun}}</td>
						<td>{{$data->nominal}}</td>
						<td>Lunas</td>
					</tr>
					@endforeach
			</tbody>
		</table>						
	</div>
</body>
</html>