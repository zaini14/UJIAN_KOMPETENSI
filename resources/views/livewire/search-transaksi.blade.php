<div
		class="bg-gray-100 shadow-xl p-5 rounded-xl w-full">
		@csrf
		<div>
			<input 
			 	type="text"
			 	class="block w-full focus:border-pallete3 border-2 rounded-full border-gray-300 focus:ring-0 focus:border-2 px-5 py-3"
			 	placeholder="Masukan NISN atau Nama Siswa"
			 	wire:model="query"
			 	wire:keydown.escape = "resetFilters">
		</div>
		
			@if (count($siswa) > 0 )
				<div
				class="relative cari__transaksi mt-10 rounded-lg bg-white p-4">
					@foreach ($siswa as $data)
						<div>
						<a 
							href="{{ url('transaksi', $data->nisn) }}"
							class="block w-full px-2 py-2 text-lg text-gray-600 hover:bg-gray-100 transition-all">{{$data->nama}}</a>

					</div>
				@endforeach
			</div>	
			@else
				<div
				class="relative cari__transaksi mt-10 rounded-lg bg-white p-4">
						<div>
							<p
							class="block w-full px-2 py-2 text-lg text-gray-600 hover:bg-gray-100 transition-all">Data Tidak Ditemukan</p>

					</div>
			@endif
	</div>