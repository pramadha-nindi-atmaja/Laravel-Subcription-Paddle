<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex justify-center">
                <x-application-logo class="w-16 h-16 text-indigo-600" />
            </a>
        </x-slot>

        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">
                {{ __('Welcome Back!') }}
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                {{ __('Log in to your account to continue.') }}
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />
                <x-input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    placeholder="you@example.com"
                    class="block mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition duration-150 ease-in-out"
                />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
                <x-input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="••••••••"
                    class="block mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition duration-150 ease-in-out"
                />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        name="remember"
                    >
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-sm text-indigo-600 hover:text-indigo-500 font-medium transition-colors duration-200">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                    {{ __("Don't have an account?") }}
                </a>

                <x-button class="bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 text-white px-6 py-2 rounded-lg transition-all duration-200">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
