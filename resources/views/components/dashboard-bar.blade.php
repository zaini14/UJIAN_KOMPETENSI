<div
	class="bg-pallete2 p-4 rounded-b-xl">
    <div
    	class="flex justify-end mr-20">
    	<div>
	    	<div
	    		class="flex relative items-center hover:cursor-pointer"
	    		id="btn-user">
	    		<img 
	    		src="{{ asset('img/user/'. Auth::user()->profile) }}" 
	    		alt=""
	    		class="w-16 h-16 rounded-full object-cover mr-2">
	    		<img 
	    			src="{{ asset('img/user-arrow.png') }}" 
	    			alt=""
	    			class="w-6 h-3">
	    	</div>

	    		<div
		    		id="drop-user"
		    		class="hidden absolute mt-2 bg-white rounded-lg shadow-lg overflow-hidden">
	    		<div>
	    			<a 
	    				href="#"
	    				class="block py-3 pl-2 pr-3 hover:bg-gray-100">Pengaturan Akun</a>
	    		</div>
	    		<div>
	    			<form action="{{ route('logout') }}" method="post">
	    				@csrf
	    				<button 
	    				href="{{ route('logout') }}"
	    				class="block py-3 pl-2 pr-3 hover:bg-gray-100 w-full text-left"
	    				onclick="event.PreventDefault()">Keluar</button>
	    			</form>
	    		</div>
    		</div>
	    </div>
    </div>
</div>