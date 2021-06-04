@extends('layouts.master')

@section('content')
    <div
        class="bg-header bg-cover">
        <div>
            <x-nav-top />
        </div>
        <div
            class="relative"
            id="beranda">
            <x-navbar />
            <x-mobile />
        </div>
        <x-header />
        <div
            class="mt-44">
            <x-covid-cases />
        </div>
    </div>

    <div
        class="bg-middle bg-cover -mt-32"
        id="tentang">
        <x-tentang />
        <div
            id="kontak">
            <x-footer />
        </div>
    </div>




    
@endsection