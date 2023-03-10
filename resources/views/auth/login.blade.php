<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo" >
            <div class="container text-center mt-5"><img src="/images/alex.png" alt="Alex Freitas" style="border-radius: 50%"></div>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif 

        <div class="container">
            <form method="POST" action="{{ route('login') }}" class="form-group">
                @csrf
                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" class="form-label" />
                    <x-jet-input id="email" class="form-control mt-1 " type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Senha') }}" class="form-label" />
                    <x-jet-input id="password" class="form-control mt-1" type="password" name="password" required autocomplete="current-password" />
                </div>
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-around mt-4">
                    <x-jet-button class="btn btn-primary">
                        {{ __('Log in') }}
                    </x-jet-button>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
