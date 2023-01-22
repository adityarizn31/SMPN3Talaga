<?php

require 'koneksi.php';

function upload($tempat)
{

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }


  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
                alert('Yang anda upload bukan gambar!');
            </script>";
    return false;
  }
  //  cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
                alert('Gambar terlalu besar!');
            </script>";
    return false;
  }

  // lolos pengecekan, gambaar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  move_uploaded_file($tmpName, '../../media/' . $tempat . '/' . $namaFileBaru);

  return $namaFileBaru;
}
