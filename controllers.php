<?php

include "../../cmo.sekolahrelawan.com/php/config.php";
date_default_timezone_set('Asia/Jakarta');

// Fungsi untuk membersihkan dan memvalidasi input
function validateInput($input)
{
  return trim(htmlspecialchars($input));
}

$tanggal_daftar = date('Y-m-d');
$txtNama = validateInput($_POST['txtNama']);
$txtUsia = validateInput($_POST['txtUsia']);
$txtPekerjaan = validateInput($_POST['txtPekerjaan']);
$noHp = validateInput(addslashes($_POST['noHp']));
$txtDomisili = validateInput(addslashes($_POST['txtDomisili']));
$txtInstagram = validateInput(addslashes($_POST['txtInstagram']));

// Validasi input
if (empty($txtNama) || empty($txtUsia) || empty($txtPekerjaan) || empty($noHp) || empty($txtDomisili) || empty($txtInstagram)) {
  // Jika ada field yang kosong, kirim pesan error
  echo "0";
} else {
  // Jika semua field terisi, jalankan query untuk menyimpan data
  $query = mysqli_query($connect, "INSERT INTO `tbl_dlt` (`pk_daftar`, `nama`, `usia`, `hp`, `pekerjaan`, `domisili`, `instagram`) VALUES (NULL, '$txtNama', '$txtUsia', '$txtPekerjaan', '$noHp', '$txtDomisili', '$txtInstagram')");

  if ($query) {
    echo "1";
  } else {
    echo "0";
  }
}
?>