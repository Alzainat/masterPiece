<x-app-layout>
<x-guest-layout>
    <!-- Hotel Booking Login Page -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-b from-blue-50 to-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!-- Hotel Logo -->
            <div class="flex justify-center mb-6">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <h2 class="mt-2 text-2xl font-bold text-blue-800">Welcome to JoHotels</h2>
                    <p class="text-gray-500 text-sm">Your perfect stay is just a login away</p>
                </div>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-blue-800 font-medium" />
                    <x-text-input id="email" class="block mt-1 w-full rounded-md border-blue-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                        placeholder="your@email.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-blue-800 font-medium" />

                    <x-text-input id="password" class="block mt-1 w-full rounded-md border-blue-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"
                                    placeholder="••••••••" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-blue-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('register'))
                        <a class="text-sm text-blue-600 hover:text-blue-800 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('register') }}">
                            {{ __('New guest? Register here') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3 bg-blue-700 hover:bg-blue-800 focus:bg-blue-800 focus:ring-blue-500 px-5 py-2">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
                
                <!-- Forgot Password Link -->
                <div class="text-center mt-5">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-500 hover:text-blue-600" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>
            
            <!-- Footer -->
            <div class="mt-8 pt-5 border-t border-gray-200">
                <p class="text-center text-xs text-gray-500">
                    Securely log in to manage your bookings, view special offers, and enjoy a seamless hotel experience.
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
</x-app-layout>