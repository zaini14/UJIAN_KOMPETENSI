{{-- <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden"> --}}
            <div class="w-full">
                <div
                    class="flex justify-between">
                    <div
                    class="text-3xl text-gray-700 font-semibold">
                        <p
                            class="uppercase">Data {{$jenis}}</p>
                    </div>

                    <div>
                        <a 
                        href="{{ url("$jenis/create") }}"
                        class="flex items-center bg-blue-400 px-2 py-2 rounded-md text-white hover:bg-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" style="fill:white" viewBox="0 0 24 24"><path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/></svg>
                            <p
                                class="font-semibold ml-2">Tambah</p>
                        </a>
                    </div>
                </div>
                @if (Session::has('toast_success'))
                        
                @endif
                <div class="bg-white shadow-md rounded my-6">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-lg leading-normal">
                                @foreach ($row as $i)
                                    <th class="py-3 px-6 text-center">{{ $i }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        @if ($jenis == 'kelas')
                            <x-body-table-kelas :allData="$allData" :no="$no" :jenis="$jenis" />
                        @elseif($jenis == 'siswa')
                            <x-body-table-siswa :allData="$allData" :no="$no" :jenis="$jenis" />
                        @elseif ($jenis == 'spp')
                            <x-body-table-spp :allData="$allData" :no="$no" :jenis="$jenis" />
                        @elseif($jenis == 'petugas')
                            <x-body-table-petugas :allData="$allData" :no="$no" :jenis="$jenis" />
                        @elseif($jenis == 'guru')
                            <x-body-table-guru :allData="$allData" :no="$no" :jenis="$jenis" />
                        @endif
                    </table>
                </div>
            </div>
{{--         </div>
    </div> --}}