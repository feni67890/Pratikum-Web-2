<?php
$nama_customer = isset($_POST['nama_cs']) ? $_POST['nama_cs'] : '';
$pilih_produk = isset($_POST['product']) ? $_POST['product'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

if (isset($_POST['submit'])) {
  $harga_produk = $_POST['pilih_produk'];
}

if (isset($pilih_produk) && $pilih_produk == 'TV'){
  $harga_produk = 4200000 * intval($jumlah);
  echo $harga_produk;

} elseif (isset($pilih_produk) && $pilih_produk == 'Kulkas'){
  $harga_produk = 3100000 * intval($jumlah);
  echo $harga_produk;

} else {
  $harga_produk = 3400000 * intval($jumlah);
  echo $harga_produk;
}

ob_clean();
?>