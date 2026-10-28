<x-app-layout>
    <x-slot name="header">
        {{ __('Sistem Pengelolaan Gym OrangHebat') }}
        <x-slot name="description">
            {{ __('Kelola SDM pelatih yang tersedia di GYM') }}
        </x-slot>
    </x-slot>
    

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-linen-200 p-5 flex items-center gap-4">
            <div class="w-12 h-12 bg-golden-chestnut-100 rounded-full flex items-center justify-center text-golden-chestnut-700">
                <i data-lucide="users"></i>
            </div>
            <div>
                <p class="text-sm text-toffee-brown-600 font-semibold">Total Instruktur</p>
                <p class="text-2xl font-bold text-espresso-900">{{ $totalPelatih }} Pelatih</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-linen-200 p-5 flex items-center gap-4">
            <div class="w-12 h-12 bg-desert-sand-100 rounded-full flex items-center justify-center text-desert-sand-700">
                <i data-lucide="award"></i>
            </div>
            <div>
                <p class="text-sm text-toffee-brown-600 font-semibold">Keahlian Tersertifikasi</p>
                <p class="text-2xl font-bold text-espresso-900">12 Cabang</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-linen-200 p-5 flex items-center gap-4">
            <div class="w-12 h-12 bg-espresso-100 rounded-full flex items-center justify-center text-espresso-600">
                <i data-lucide="user-check"></i>
            </div>
            <div>
                <p class="text-sm text-toffee-brown-600 font-semibold">Tersedia Saat Ini</p>
                <p class="text-2xl font-bold text-espresso-900">{{ $totalPelatihAktif }} Pelatih</p>
            </div>
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white rounded-2xl shadow-sm border border-linen-200 p-4">
            <h3 class="text-lg font-bold mb-5 flex items-center gap-2 text-espresso-900">
                <i data-lucide="users" class="text-golden-chestnut-600"></i> Pelatih Tersedia di Venue
            </h3>
            <div class="space-y-4">
                @foreach ( $pelatihAktif as $pelatih)
                <div class="flex items-center gap-4 p-4 rounded-lg bg-linen-50 border border-linen-200">
                    <div class="w-12 h-12 bg-golden-chestnut-100 rounded-full flex items-center justify-center text-golden-chestnut-700">
                        <i data-lucide="user"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-espresso-900">{{ htmlspecialchars($pelatih->nama_pelatih) }}</h4>
                        <p class="text-sm text-toffee-brown-600">Lisensi: <span class="font-mono text-golden-chestnut-600">{{ htmlspecialchars($pelatih->lisensi) }}</span> | {{ htmlspecialchars($pelatih->cabang_olahraga) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-linen-200 p-4">
            <h3 class="text-lg font-bold mb-5 flex items-center gap-2 text-espresso-900">
                <i data-lucide="clipboard-list" class="text-toffee-brown-600"></i> Sedang Disewa
            </h3>
            <ul class="divide-y divide-linen-200">
                <li class="py-4 flex justify-between items-center">
                    <div>
                        <p class="font-bold text-espresso-900">Rian Hidayat</p>
                        <p class="text-sm text-toffee-brown-600 flex items-center gap-1 mt-1">
                            <i data-lucide="clock" class="w-3 h-3"></i> 10:00 - 11:30 | Personal Training
                        </p>
                    </div>
                    <span class="bg-toffee-brown-100 text-toffee-brown-900 text-xs px-3 py-1 rounded-full font-semibold">Aktif</span>
                </li>
                <li class="py-4 flex justify-between items-center">
                    <div>
                        <p class="font-bold text-espresso-900">Deni Setiawan</p>
                        <p class="text-sm text-toffee-brown-600 flex items-center gap-1 mt-1">
                            <i data-lucide="clock" class="w-3 h-3"></i> 13:00 - 14:00 | Personal Training
                        </p>
                    </div>
                    <span class="bg-toffee-brown-100 text-toffee-brown-900 text-xs px-3 py-1 rounded-full font-semibold">Aktif</span>
                </li>
            </ul>
        </div>
    </div>
</x-app-layout>
