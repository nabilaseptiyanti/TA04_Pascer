<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard PASCER - Pasar Cerdas') }}
            </h2>
            <span class="text-xs bg-emerald-100 text-emerald-800 font-semibold px-3 py-1 rounded-full">
                Sistem E-Retribusi Aktif
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Banner Selamat Datang (Pakai Inline CSS biar warnanya pasti hijau dan teksnya jelas) -->
            <div style="background-color: #065f46; color: #ffffff;" class="overflow-hidden shadow-sm sm:rounded-xl p-6 flex justify-between items-center">
                <div>
                    <h3 style="color: #ffffff;" class="text-2xl font-bold">Halo, {{ Auth::user()->name }}! 👋</h3>
                    <p style="color: #d1fae5;" class="font-medium mt-1">Selamat datang di portal pengelolaan dan pembayaran retribusi Pasar Cerdas.</p>
                </div>
                <div class="hidden md:block">
                    <span class="text-4xl">🏛️</span>
                </div>
            </div>

            <!-- Kartu Statistik / Ringkasan -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Status Kios -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 border-l-4 border-emerald-500">
                    <p class="text-sm font-medium text-gray-500">Status Kios Anda</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">Blok A - No. 12</p>
                    <span class="inline-block mt-2 text-xs bg-green-100 text-green-700 font-semibold px-2 py-0.5 rounded">Aktif / Terdaftar</span>
                </div>

                <!-- Tagihan Bulan Ini -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 border-l-4 border-amber-500">
                    <p class="text-sm font-medium text-gray-500">Tagihan Retribusi Bulan Ini</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">Rp 75.000</p>
                    <span class="inline-block mt-2 text-xs bg-amber-100 text-amber-700 font-semibold px-2 py-0.5 rounded">Belum Dibayar</span>
                </div>

                <!-- Aksi Pembayaran -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 border-l-4 border-blue-500 flex flex-col justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Aksi Cepat</p>
                        <p class="text-sm text-gray-600 mt-1">Lakukan pembayaran via QRIS dengan mudah.</p>
                    </div>
                    <button onclick="alert('Fitur Simulasi QRIS PASCER akan segera dibuka!')" class="mt-4 w-full bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold py-2 px-4 rounded-lg transition duration-150">
                        Bayar Sekarang (QRIS)
                    </button>
                </div>
            </div>

            <!-- Informasi Tambahan / Ketentuan -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6">
                <h4 class="text-lg font-bold text-gray-800 mb-4">Ketentuan Retribusi Pasar Cerdas</h4>
                <ul class="list-disc list-inside text-sm text-gray-600 space-y-2">
                    <li>Pembayaran retribusi harian/bulanan paling lambat tanggal 10 setiap bulannya.</li>
                    <li>Gunakan tombol <span class="font-semibold text-emerald-600">Bayar Sekarang</span> untuk memunculkan simulasi kode QRIS.</li>
                    <li>Jika mengalami kendala teknis pada sistem kios, silakan hubungi petugas admin pasar yang bertugas.</li>
                </ul>
            </div>

        </div>
    </div>
</x-app-layout>