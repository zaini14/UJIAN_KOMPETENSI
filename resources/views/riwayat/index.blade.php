@extends('layouts.secondary')


@section('content')
	<div>
        <a 
            href="{{ url('riwayat/cetak') }}"
            class="float-right bg-blue-500 py-2 px-3 mb-5 rounded-lg text-white">Cetak</a>
    	<div class="w-full">
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


	</div>																
@endsection