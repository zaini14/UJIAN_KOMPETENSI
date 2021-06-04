<tbody class="text-gray-600 text-md font-light">
        @foreach ($allData as $data)
        <tr class="border-b border-gray-200 hover:bg-gray-100">

            <td class="py-3 px-6 text-left whitespace-nowrap">
            <div class="flex items-center">
                <span class="font-medium">{{++$no}}</span>
            </div>
        </td>
        <td class="py-3 px-6 text-left">
            <div class="flex items-center">
                <span>{{$data->tingkat}}</span>
            </div>
        </td>
        <td class="py-3 px-6 text-center">
            <span class="@if ($data->jurusan == 'RPL')
                bg-purple-200 text-purple-600
            @elseif($data->jurusan == 'OTKP')
                bg-blue-300 text-blue-700
            @else
                bg-green-300 text-green-700
            @endif py-1 px-3 rounded-full text-md">{{$data->jurusan}}</span>
        </td>
        <td class="py-3 px-6 text-center">
            <div class="flex item-center justify-center">
                <a href="{{ url("$jenis", $data->id) }}">
                    <div class="w-6 mr-2 transform hover:text-purple-500 hover:scale-110 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    </div>
                </a>
                <a href="{{ url("$jenis/". $data->id ."/edit") }}">
                    <div class="w-6 mr-2 transform hover:text-purple-500 hover:scale-110 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    </div>
                </a>
                <form action="{{ url("$jenis",   $data->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button 
                        type="submit"
                        onclick="return confirm('Apakah Anda Yakin Akan Menghapus data Ini ?')">
                    <div class="w-6 mr-2 transform hover:text-purple-500 hover:scale-110 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    </div>
                </button>
                </form>
            </div>
        </td>
    </tr>

        @endforeach
    
</tbody>