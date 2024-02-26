<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <h1 class="text-4xl font-bold text-milkChoco drop-shadow-md">LOGIN ADMIN</h1>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Username" />
            </div>

            <div class="mt-6">
                {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                <x-input id="password" class="block w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
            </div>

            <x-button class="mt-12 w-full">
                {{ __('Login') }}
            </x-button>

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div> --}}
        </form>
        
    </x-authentication-card>
    <x-big-logo>
        <img src="{{ asset('images/logo-me-xxiv.png') }}" alt="Logo" class="w-3/4">
    </x-big-logo>

</x-guest-layout>
