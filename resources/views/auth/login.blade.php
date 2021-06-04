@extends('layouts.master')

@section('content')
    
    <div
        class="bg-login bg-cover">
        {{-- <x-login-sketch /> --}}
        <div
            class="-pt-10">
            <x-jet-authentication-card>
        <x-slot name="logo">
            <x-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <p
            class="text-center text-xl font-semibold text-palletefont my-3">
            Login Petugas
        </p>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="username" value="{{ __('username') }}" class="text-lg font-semibold" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}"
                class="text-lg font-semibold" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 bg-pallete3 hover:bg-opacity-90">
                    {{ __('Masuk') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
        </div>

    </div>

@endsection