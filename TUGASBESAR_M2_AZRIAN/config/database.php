<?php
    $db = "gym_oranghebat";
    $host = "localhost";
    $user = "root";
    $pass = ""; 

    try {
        $koneksi = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

        $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Koneksi gagal: " . $e->getMessage());
    }
?>