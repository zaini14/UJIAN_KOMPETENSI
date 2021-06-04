<div
    class="grid grid-cols-3 gap-3 mt-10 mr-14 float-right w-4/6">
    <div
        class="border-2 border-gray-100 shadow-xl rounded-lg text-center py-10">
    	<div
            class="flex w-max m-auto justify-center items-center">
    		<img 
                src="{{ asset('img/guru.png') }}" 
                alt=""
                class="w-20 mr-5">
            <p
                class="text-5xl text-gray-500 font-semibold">{{$guru}}</p>
    	</div>
    	<p
            class="text-xl font-semibold text-gray-400 mt-4">Guru</p>
    </div>

    <div
        class="border-2 border-gray-100 shadow-xl rounded-lg text-center py-10">
    	<div
            class="flex w-max m-auto justify-center items-center">
    		<img 
                src="{{ asset('img/staff.png') }}" 
                alt=""
                class="w-20 mr-5">
            <p
                 class="text-5xl text-gray-500 font-semibold">{{$petugas}}</p>
    	</div>
    	<p
            class="text-xl font-semibold text-gray-400 mt-4">Staff</p>
    </div>

    <div
        class="border-2 border-gray-100 shadow-xl rounded-lg text-center py-10">
    	<div
            class="flex w-max m-auto justify-center items-center">
    		<img 
                src="{{ asset('img/siswa.png') }}" 
                alt=""
                class="w-20 mr-5">
            <p
                 class="text-5xl text-gray-500 font-semibold">{{$siswa}}</p>
    	</div>
            <p
                class="text-xl font-semibold text-gray-400 mt-4">Murid</p>
    </div>
</div>