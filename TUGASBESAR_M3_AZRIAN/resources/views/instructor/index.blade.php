<x-app-layout>
    <div class="bg-white rounded-2xl shadow-sm border border-linen-200 p-6">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold text-slate-800">Manajemen Data Instruktur</h2>
                <p class="text-sm text-slate-500 mt-1">Kelola lisensi dan keahlian pelatih mitra.</p>
            </div>
            <a href="{{ route('intructor.form') }}" class="bg-espresso-600 hover:bg-espresso-700 text-white px-4 py-2.5 rounded-lg flex items-center gap-2 shadow-sm transition cursor-pointer"><i data-lucide="plus-circle" class="w-5 h-5"></i> Tambah Data</a>
        </div>
        <div class="flex flex-col justify-between items-center mb-6 gap-4">
            <div class="flex w-full gap-3">
                <div class="relative w-full">
                    <i data-lucide="search" class="absolute left-3 top-2.5 w-5 h-5 text-linen-400"></i>
                    <input type="text" placeholder="Cari nama atau lisensi..." class="w-full pl-10 pr-4 py-2 border border-linen-200 rounded-lg focus:outline-none focus:border-golden-chestnut-400 focus:ring-1 focus:ring-golden-chestnut-400 text-sm">
                </div>
                <select class="border border-linen-200 rounded-lg px-6 py-2 text-sm text-espresso-900 focus:outline-none focus:border-golden-chestnut-400">
                    <option value="">Semua Keahlian</option>
                    <option value="angkat-beban">Angkat Beban</option>
                    <option value="yoga">Yoga</option>
                    <option value="zumba">Zumba</option>
                </select>
            </div>
        </div>
            
        <div class="overflow-x-auto rounded-lg border border-linen-200">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-linen-100 border-b border-linen-200 text-sm">
                        <th class="p-4 font-semibold text-espresso-900">Nama Pelatih</th>
                        <th class="p-4 font-semibold text-espresso-900">Lisensi</th>
                        <th class="p-4 font-semibold text-espresso-900">Jenis Lisensi</th>
                        <th class="p-4 font-semibold text-espresso-900">Cabang Olahraga</th>
                        <th class="p-4 font-semibold text-espresso-900">Status</th>
                        <th class="p-4 font-semibold text-espresso-900 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-linen-200 text-sm">
                    @foreach ( $dataPelatih as $row )
                    <tr class="hover:bg-linen-50 transition group">
                        <td class="p-4 font-medium text-espresso-900">{{ htmlspecialchars($row->nama_pelatih) }}</td>
                        <td class="p-4"><span class="bg-desert-sand-50 text-desert-sand-800 text-xs px-2.5 py-1 rounded-md font-mono border border-desert-sand-200">{{ htmlspecialchars($row->lisensi) }}</span></td>
                        <td class="p-4 text-toffee-brown-800">{{ htmlspecialchars($row->jenis_lisensi) }}</td>
                        <td class="p-4 text-toffee-brown-800">{{ htmlspecialchars($row->cabang_olahraga) }}</td>
                        <td class="p-4">
                            <span class="text-xs font-semibold px-2 py-1 {{ $row->status->warnaBadge() }} rounded-full">
                                {{ htmlspecialchars($row->status->value) }}
                            </span>
                        </td>
                        <td class="p-4 flex justify-center gap-3">
                            <a href="{{ route('intructor.form', $row->id) }}" title="Edit" class="text-toffee-brown-500 hover:text-toffee-brown-800"><i data-lucide="edit" class="w-4 h-4"></i></a>
                            <form action="{{ route('intructor.delete', $row->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-espresso-400 hover:text-espresso-700"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                        </form>
                        </td>
                    </tr>
                    @endforeach

                    @if (empty($dataPelatih))
                    <tr>
                        <td colspan="4" class="p-4 text-center text-slate-500">Belum ada data.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="flex justify-between items-center mt-6">
            <p class="text-sm text-linen-600">Menampilkan 1-5 dari 24 Data</p>
            <div class="flex gap-1">
                <button class="px-3 py-1 border border-linen-200 rounded text-linen-500 hover:bg-linen-100 text-sm">Prev</button>
                <button class="px-3 py-1 bg-golden-chestnut-600 text-white rounded shadow-sm text-sm">1</button>
                <button class="px-3 py-1 border border-linen-200 rounded text-espresso-800 hover:bg-linen-100 text-sm">2</button>
                <button class="px-3 py-1 border border-linen-200 rounded text-espresso-800 hover:bg-linen-100 text-sm">3</button>
                <button class="px-3 py-1 border border-linen-200 rounded text-espresso-800 hover:bg-linen-100 text-sm">Next</button>
            </div>
        </div>
    </div>
</x-app-layout>