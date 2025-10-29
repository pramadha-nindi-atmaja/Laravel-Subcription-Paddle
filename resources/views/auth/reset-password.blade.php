<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex justify-center">
                <x-application-logo class="w-16 h-16 text-indigo-600" />
            </a>
        </x-slot>

        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">
                {{ __('Reset Your Password') }}
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                {{ __('Enter your email and set a new password to regain access.') }}
            </p>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email Address')" class="text-gray-700 font-medium" />
                <x-input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email', $request->email)"
                    required
                    autofocus
                    placeholder="you@example.com"
                    class="block mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition duration-150 ease-in-out"
                />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('New Password')" class="text-gray-700 font-medium" />
                <x-input
                    id="password"
                    type="password"
                    name="password"
                    required
                    placeholder="••••••••"
                    class="block mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition duration-150 ease-in-out"
                />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-label for="password_confirmation" :value="__('Confirm New Password')" class="text-gray-700 font-medium" />
                <x-input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    placeholder="••••••••"
                    class="block mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition duration-150 ease-in-out"
                />
            </div>

            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                    {{ __('Back to Login') }}
                </a>

                <x-button class="bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 text-white px-6 py-2 rounded-lg transition-all duration-200">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
