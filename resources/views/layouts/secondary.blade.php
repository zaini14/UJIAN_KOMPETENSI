<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SMK Islam Penguji</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	@livewireStyles
</head>
<body>

	<x-side-bar />
    <x-dashboard-bar/>
    <div
    	class="mt-10 mr-14 float-right w-4/6">
	@yield('content')
	</div>

	@livewireScripts
	@include('sweetalert::alert')
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
