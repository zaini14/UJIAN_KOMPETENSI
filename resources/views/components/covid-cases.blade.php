<div
	class="w-2/4 border-opacity-80 m-auto rounded-xl bg-pallete3 bg-opacity-70">
    <div
    	class="text-center text-2xl text-gray-600 font-semibold py-5">
    	<p class="mt-3">Kasus <b>COVID 19</b> Di Indonesia</p>
    </div>
    <div
    	class="grid grid-cols-3 gap-3 mx-8 py-5 text-center">
    	<div class="bg-pallete2 rounded-lg py-10">
    		<p
                class="font-bold text-xl text-red-800  mb-1">{{number_format($result['deaths'])}}</p>
    		<p
                class="font-semibold text-gray-800">Meninggal</p>
    	</div>
    	<div class="bg-pallete2 rounded-lg py-10">
    		<p
                class="font-bold text-xl text-yellow-500  mb-1">
                    {{number_format($result['confirmed'])}}
                </p>
    		<p
                class="font-semibold text-gray-700">Kasus</p>
    	</div>
    	<div class="bg-pallete2 rounded-lg py-10">
    		<p
                class="font-bold text-xl text-green-600 mb-1">{{number_format($result['recovered'])}}</p>
    		<p
                class="font-semibold text-gray-700">Sembuh</p>
    	</div>
    </div>
</div>