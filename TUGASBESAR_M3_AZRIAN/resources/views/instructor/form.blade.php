<x-app-layout>
    <div class="w-full max-w-lg mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-espresso-900">Form Data Instruktur</h2>
            <p class="text-toffee-brown-700 mt-2">Silakan isi formulir di bawah ini untuk menambah atau memperbarui data pelatih mitra venue.</p>
        </div>

        <form action="{{ $pelatih->id != null ? route('intructor.update', $pelatih->id) : route('intructor.post') }}" method="POST" class="bg-white rounded-2xl shadow-sm border border-linen-200 p-8">
            @csrf 
            @if ($pelatih->id != null)
                @method('PUT')
            @endif
            <input type="hidden" id="instructorId" name="id" value="{{ $pelatih->id }}">
            
            <div class="mb-5">
                <label class="block text-sm font-semibold text-toffee-brown-800 mb-1.5">Nama Instruktur</label>
                <input type="text" id="name" name="nama_pelatih" value="{{ old('nama_pelatih', $pelatih->nama_pelatih) }}" required placeholder="Masukkan nama lengkap..." class="w-full border border-linen-300 bg-linen-50/50 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-golden-chestnut-400 focus:border-transparent text-espresso-900 transition">
            </div>
            
            <div class="mb-5">
                <label class="block text-sm font-semibold text-toffee-brown-800 mb-1.5">Nomor Lisensi</label>
                <input type="text" id="license" name="lisensi" value="{{ old('lisensi', $pelatih->lisensi) }}" required placeholder="Contoh: L-12345" class="w-full border border-linen-300 bg-linen-50/50 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-golden-chestnut-400 focus:border-transparent font-mono text-sm text-espresso-900 transition">
            </div>

            <div class="mb-5">
                <label class="block text-sm font-semibold text-toffee-brown-800 mb-1.5">Jenis Lisensi</label>
                <select id="jenis_lisensi" name="jenis_lisensi" required class="w-full border border-linen-300 bg-linen-50/50 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-golden-chestnut-400 focus:border-transparent text-espresso-900 transition">
                    <option value="" disabled {{ empty($pelatih->jenis_lisensi) ? 'selected' : '' }}>Pilih jenis lisensi...</option>
                    <option value="Asosiasi Lokal" {{ old('jenis_lisensi', $pelatih->jenis_lisensi) == 'Asosiasi Lokal' ? 'selected' : '' }}>Asosiasi Lokal</option>
                    <option value="Nasional (BNSP-RI)" {{ old('jenis_lisensi', $pelatih->jenis_lisensi) == 'Nasional (BNSP-RI)' ? 'selected' : '' }}>Nasional (BNSP-RI)</option>
                    <option value="Internasional" {{ old('jenis_lisensi', $pelatih->jenis_lisensi) == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                    <option value="Lainnya" {{ old('jenis_lisensi', $pelatih->jenis_lisensi) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>
            
            <div class="mb-8">
                <label class="block text-sm font-semibold text-toffee-brown-800 mb-1.5">Keahlian (Cabang Olahraga)</label>
                <input type="text" id="sport" name="cabang_olahraga" value="{{ old('cabang_olahraga', $pelatih->cabang_olahraga) }}" required placeholder="Contoh: Angkat Beban, Zumba, Yoga..." class="w-full border border-linen-300 bg-linen-50/50 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-golden-chestnut-400 focus:border-transparent text-espresso-900 transition">
            </div>
            
            <div class="flex justify-end gap-3 pt-4 border-t border-linen-100">
                <button type="button" onclick="window.history.back()" class="px-5 py-2.5 text-toffee-brown-700 bg-linen-100 hover:bg-linen-200 rounded-lg font-medium transition duration-200">
                    Batal
                </button>
                <button type="submit" class="px-5 py-2.5 text-white bg-golden-chestnut-600 hover:bg-golden-chestnut-700 rounded-lg font-medium shadow-sm transition duration-200 flex items-center gap-2">
                    <i data-lucide="save" class="w-4 h-4"></i> Simpan Data
                </button>
            </div>
        </form>
    </div>
</x-app-layout>