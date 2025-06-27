<?php
// Aktifkan error agar tidak blank
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Definisi fungsi greet()
function greet($name) {
    return "Hello, $name!";
}

// Kalau bukan dipanggil via CLI (PHPUnit), tampilkan hasil
if (php_sapi_name() !== 'cli') {
    echo greet("Mahasiswa");
}
