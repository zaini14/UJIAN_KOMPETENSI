<div
	class="fixed w-1/4 h-screen bg-pallete3 rounded-r-lg top-0 ">
    <div
    	class="mt-10">
    	<div
    		class="m-auto text-center">
    		<x-logo />
    		<p
    			class="mt-2 text-xl text-palletefont font-semibold">Aplikasi Pembayaran SPP</p>
    	</div>
    	<div
    		class="block mt-5 text-center transition-all">
    		<div
    			class="relative px-14">
    			<a 
    				href="{{ url('dashboard') }}"
    				class="dash-link block py-3 text-md text-palletefont my-1">Dashboard</a>
    		</div>
    		<div
    			class="relative px-14">
    			<button
    				href="#"
    				id="data"
    				class="relative block dash-link block py-2 px-10 text-md text-palletefont my-1 m-auto ">Data</button>

    				<div
    					id="drop-data"
    					class="hidden bg-white rounded-md">
    					<div
    						class="relative py-1">
    						<a 
    							href="{{ url('/siswa') }}" 
    							class="block px-5 py-2 hover:bg-gray-300 mx-8 rounded-md">Data Siswa</a>
    					</div>
                        <div
                            class="relative py-1">
                            <a 
                                href="{{ url('/kelas') }}" 
                                class="block px-5 py-2 hover:bg-gray-300 mx-8 rounded-md">Data Kelas</a>
                        </div>
    					<div
    						class="relative py-1">
    						<a 
    							href="{{ url('/petugas') }}"
    							class="block px-5 py-2 hover:bg-gray-300 mx-8 rounded-md">Data Petugas</a>
    					</div>
    					<div
    						class="relative py-1">
    						<a 
    							href="{{ url('spp') }}"
    							class="block px-5 py-2 hover:bg-gray-300 mx-8 rounded-md">Data SPP</a>
    					</div>
    					<div
    						class="relative py-1">
    						<a 
    							href="{{ url('/guru') }}"
    							class="block px-5 py-2 hover:bg-gray-300 mx-8 rounded-md">Data Guru</a>
    					</div>
    				</div>
    		</div>
    		<div
    			class="relative px-14">
    			<a 
    				href="{{ url('transaksi') }}"
    				class="dash-link block py-3 text-md text-palletefont my-1 ">Transaksi Pembayaran</a>
    		</div>
    		<div
    			class="relative px-14">
    			<a 
    				href="{{ url('/riwayat') }}"
    				class="dash-link block py-3 text-md text-palletefont my-1">Riwayat Pembayaran</a>
    		</div>
    	</div>
    </div>
</div>