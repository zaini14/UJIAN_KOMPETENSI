<div
	class="flex m-auto w-max bg-pallete2 rounded-b-md text-palletefont font-semibold text-lg px-5">
    <div
    	class="mx-1 my-2">
    	<a 
    	href="#beranda"
    	class="inline-block px-3 py-2">Beranda</a>
    </div>
    <div
    	class="mx-1 my-2">
    	<a 
    	href="#tentang"
    	class="inline-block px-3 py-2">Tentang</a>
    </div>
    <div
    	class="mx-1 my-2">
    	<a 
    	href="#kontak"
    	class="inline-block px-3 py-2">Kontak</a>
    </div>
    <div
    	class="mx-1 my-2">

        @if (Route::has('login'))
                
                    @auth
                        <a
                            class="relative block bg-pallete3 px-4 py-2 rounded-lg hover:bg-opacity-80 transition-all font-semibold text-white"
                            href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                    @else
                        <button
                            class="relative bg-pallete3 px-4 py-2 rounded-lg hover:bg-opacity-80 transition-all font-semibold text-white"
                            id="btn-login">
                            Login
                        </button>
                    @endauth
            @endif

    	
        <div class="hidden absolute bg-white mt-1 rounded-md overflow-hidden" id="dropdown">
            <div>
                <a 
                    href="{{ url('user_login') }}"
                    class="block px-2 pr-5 py-2 hover:bg-gray-100 transition-all">Siswa</a>
            </div>
            <div>
                <a 
                    href="{{ route('login') }}"
                    class="block px-2 pr-5 py-2 hover:bg-gray-100 transition-all">Petugas</a>
            </div>
        </div>
    </div>
</div>

