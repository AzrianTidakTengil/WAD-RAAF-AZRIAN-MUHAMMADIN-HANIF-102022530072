<?php
    require_once("../config/database.php");

    if ($_SERVER["REQUEST_METHOD"] == "PUT") {
        $nama = $_POST['nama_pelatih'];
        $lisensi = $_POST['lisensi'];
        $jenis_lisensi = $_POST['jenis_lisensi'];
        $cabang = $_POST['cabang_olahraga'];

        try {
            $sql = "INSERT INTO pelatih (nama_pelatih, lisensi, jenis_lisensi, cabang_olahraga) 
                    VALUES (?, ?, ?, ?)";
            $stmt = $koneksi->prepare($sql);
            $stmt->execute([$nama, $lisensi, $jenis_lisensi, $cabang]);

            echo "<script>window.location.href='update_instruktur.php';</script>";
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                echo "<script>alert('Nomor lisensi sudah terdaftar!'); history.back();</script>";
            } else {
                echo "Error: " . $e->getMessage();
            }
        }
    }
?>