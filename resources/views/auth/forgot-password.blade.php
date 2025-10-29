<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex justify-center">
                <x-application-logo class="w-16 h-16 text-indigo-600" />
            </a>
        </x-slot>

        <div class="text-center mb-6">
            <h2 class="text-xl font-semibold text-gray-800">
                {{ __('Forgot Your Password?') }}
            </h2>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                {{ __('No problem. Enter your email and we’ll send you a link to reset your password.') }}
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
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

            <div class="flex justify-end">
                <x-button class="bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 text-white px-6 py-2 rounded-lg transition-all duration-200">
                    {{ __('Send Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
