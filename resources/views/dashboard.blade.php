@extends('layouts.master')  

@section('content')
    <x-side-bar />
    <x-dashboard-bar />
    <x-dashboard-jumlah :siswa="$siswa" :petugas="$petugas" :guru="$guru"/>
@endsection
 
