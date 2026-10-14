<?php 
require_once './config/database.php'; 

$id_pelatih = '';
$nama = '';
$lisensi = '';
$jenis_lisensi = '';
$cabang = '';
$is_edit = false;

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $is_edit = true;
    $id_pelatih = $_GET['id'];
    
    $stmt = $pdo->prepare("SELECT * FROM instruktur WHERE id = ?");
    $stmt->execute([$id_pelatih]);
    $data_lama = $stmt->fetch();
    
    if ($data_lama) {
        $nama = $data_lama['nama_pelatih'];
        $lisensi = $data_lama['lisensi'];
        $jenis_lisensi = $data_lama['jenis_lisensi'];
        $cabang = $data_lama['cabang_olahraga'];
    }
}
?>

<?php include("./components/header.php");?>

<main class="container mx-auto px-6 py-12 flex-grow flex items-center justify-center">
    <div class="w-full max-w-lg">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-espresso-900">
                <?= $is_edit ? 'Update Data Instruktur' : 'Form Data Instruktur' ?>
            </h2>
            <p class="text-toffee-brown-700 mt-2">
                <?= $is_edit ? 'Ubah data instruktur yang sudah ada.' : 'Silakan isi formulir di bawah ini untuk menambah pelatih mitra venue.' ?>
            </p>
        </div>

        <form action="actions/save_instruktur.php" method="POST" class="bg-white rounded-2xl shadow-sm border border-linen-200 p-8">
            
            <input type="hidden" id="instructorId" name="id" value="<?= htmlspecialchars($id_pelatih) ?>">
            
            <div class="mb-5">
                <label class="block text-sm font-semibold text-toffee-brown-800 mb-1.5">Nama Instruktur</label>
                <input type="text" id="name" name="nama_pelatih" value="<?= htmlspecialchars($nama) ?>" required placeholder="Masukkan nama lengkap..." class="w-full border border-linen-300 bg-linen-50/50 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-golden-chestnut-400 focus:border-transparent text-espresso-900 transition">
            </div>
            
            <div class="mb-5">
                <label class="block text-sm font-semibold text-toffee-brown-800 mb-1.5">Nomor Lisensi</label>
                <input type="text" id="license" name="lisensi" value="<?= htmlspecialchars($lisensi) ?>" required placeholder="Contoh: L-12345" class="w-full border border-linen-300 bg-linen-50/50 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-golden-chestnut-400 focus:border-transparent font-mono text-sm text-espresso-900 transition">
            </div>

            <div class="mb-5">
                <label class="block text-sm font-semibold text-toffee-brown-800 mb-1.5">Jenis Lisensi</label>
                <select id="jenis_lisensi" name="jenis_lisensi" required class="w-full border border-linen-300 bg-linen-50/50 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-golden-chestnut-400 focus:border-transparent text-espresso-900 transition">
                    <option value="" disabled <?= empty($jenis_lisensi) ? 'selected' : '' ?>>Pilih jenis lisensi...</option>
                    <option value="Asosiasi Lokal" <?= ($jenis_lisensi == 'Asosiasi Lokal') ? 'selected' : '' ?>>Asosiasi Lokal</option>
                    <option value="Nasional (BNSP-RI)" <?= ($jenis_lisensi == 'Nasional (BNSP-RI)') ? 'selected' : '' ?>>Nasional (BNSP-RI)</option>
                    <option value="Internasional" <?= ($jenis_lisensi == 'Internasional') ? 'selected' : '' ?>>Internasional</option>
                    <option value="Lainnya" <?= ($jenis_lisensi == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
                </select>
            </div>
            
            <div class="mb-8">
                <label class="block text-sm font-semibold text-toffee-brown-800 mb-1.5">Keahlian (Cabang Olahraga)</label>
                <input type="text" id="sport" name="cabang_olahraga" value="<?= htmlspecialchars($cabang) ?>" required placeholder="Contoh: Angkat Beban, Zumba, Yoga..." class="w-full border border-linen-300 bg-linen-50/50 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-golden-chestnut-400 focus:border-transparent text-espresso-900 transition">
            </div>
            
            <div class="flex justify-end gap-3 pt-4 border-t border-linen-100">
                <button type="button" onclick="window.location.href='instruktur.php'" class="px-5 py-2.5 text-toffee-brown-700 bg-linen-100 hover:bg-linen-200 rounded-lg font-medium transition duration-200">
                    Batal
                </button>
                <button type="submit" class="px-5 py-2.5 text-white bg-golden-chestnut-600 hover:bg-golden-chestnut-700 rounded-lg font-medium shadow-sm transition duration-200 flex items-center gap-2">
                    <i data-lucide="save" class="w-4 h-4"></i> <?= $is_edit ? 'Update Data' : 'Simpan Data' ?>
                </button>
            </div>
        </form>
    </div>
</main>

<?php include("./components/footer.php");?>