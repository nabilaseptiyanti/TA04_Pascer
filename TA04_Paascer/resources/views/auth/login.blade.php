<x-guest-layout>
    <div class="min-h-screen flex">
        <!-- Sisi Kiri: Branding / Ilustrasi Pasar Cerdas -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-emerald-700 to-teal-900 text-white flex-col justify-between p-12">
            <div>
                <span class="bg-emerald-600 text-emerald-100 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">E-Retribusi Resmi</span>
                <h1 class="text-4xl font-extrabold mt-4 tracking-tight">PASCER</h1>
                <p class="text-emerald-200 mt-2 text-lg">Aplikasi Pasar Cerdas untuk Pengelolaan & Pembayaran Retribusi Kios Lebih Cepat, Transparan, dan Modern.</p>
            </div>
            <div class="text-sm text-emerald-300">
                &copy; {{ date('Y') }} Tim Pengembang PASCER — Telkom University.
            </div>
        </div>

        <!-- Sisi Kanan: Form Login -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-gray-50">
            <div class="max-w-md w-full space-y-6 bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
                
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800">Masuk ke Akun</h2>
                    <p class="text-sm text-gray-500 mt-1">Silakan masukkan email dan password terdaftar</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />
                        <x-text-input id="email" class="block mt-1 w-full rounded-lg border-gray-300 focus:border-emerald-500 focus:ring-emerald-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="contoh@gmail.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
                        <x-text-input id="password" class="block mt-1 w-full rounded-lg border-gray-300 focus:border-emerald-500 focus:ring-emerald-500"
                                type="password"
                                name="password"
                                required autocomplete="current-password" 
                                placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between text-sm">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-emerald-600 shadow-sm focus:ring-emerald-500" name="remember">
                            <span class="ms-2 text-gray-600">{{ __('Ingat Saya') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-emerald-600 hover:text-emerald-800 font-medium" href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="w-full py-3 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg shadow-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                            {{ __('Masuk Sekarang') }}
                        </button>
                    </div>

                    <!-- Tombol / Link Pindah ke Halaman Register -->
                    <div class="text-center mt-4 text-sm text-gray-600">
                        Belum punya akun pedagang? 
                        <a href="{{ route('register') }}" class="text-emerald-600 hover:text-emerald-800 font-semibold underline">
                            Daftar di sini
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-guest-layout>