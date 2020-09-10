<?php
// memanggil file conn.php untuk melakukan conn database
include("app/core/function.php");
	// membuat variabel untuk menampung data dari form
  $artikel_id = $_GET['artikel_id'];
  $judul   = $_POST['judul'];
  $isi     = $_POST['isi'];
  $kategori    = $_POST['kategori'];
  $gambar = $_FILES['gambar']['name'];
  $uploads_dir = 'public/uploads';
var_dump($judul);
var_dump($artikel_id);