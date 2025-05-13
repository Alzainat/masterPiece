<x-app-layout>
<x-guest-layout>
    <!-- Hotel Booking Registration Page -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-b from-blue-50 to-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!-- Hotel Logo -->
            <div class="flex justify-center mb-6">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <h2 class="mt-2 text-2xl font-bold text-blue-800">JoHotels</h2>
                    <p class="text-gray-500 text-sm">Create your account for exclusive benefits</p>
                </div>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Full Name')" class="text-blue-800 font-medium" />
                    <x-text-input id="name" class="block mt-1 w-full rounded-md border-blue-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                        placeholder="John Smith" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-blue-800 font-medium" />
                    <x-text-input id="email" class="block mt-1 w-full rounded-md border-blue-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                        type="email" name="email" :value="old('email')" required autocomplete="username" 
                        placeholder="your@email.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-blue-800 font-medium" />
                    <x-text-input id="password" class="block mt-1 w-full rounded-md border-blue-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        type="password"
                        name="password"
                        required autocomplete="new-password"
                        placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <p class="text-xs text-gray-500 mt-1">Minimum 8 characters recommended</p>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-blue-800 font-medium" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-md border-blue-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Terms and Conditions -->
                <div class="mt-4">
                    <label for="terms" class="inline-flex items-center">
                        <input id="terms" type="checkbox" class="rounded border-blue-300 text-blue-600 shadow-sm focus:ring-blue-500" name="terms" required>
                        <span class="ms-2 text-sm text-gray-600">I agree to the <a href="#" class="text-blue-600 hover:underline">Terms and Conditions</a></span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-blue-600 hover:text-blue-800 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('login') }}">
                        {{ __('Already a guest? Log in') }}
                    </a>

                    <x-primary-button class="ms-3 bg-blue-700 hover:bg-blue-800 focus:bg-blue-800 focus:ring-blue-500 px-5 py-2">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
            
            <!-- Benefits -->
            <div class="mt-8 pt-5 border-t border-gray-200">
                <h3 class="text-sm font-medium text-blue-800 mb-2">Benefits of registering:</h3>
                <ul class="text-xs text-gray-600 space-y-1">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Faster booking process
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Exclusive member discounts
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Save favorite properties
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
</x-app-layout>