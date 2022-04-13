<?php
	/**
	 *membuat koneksi
	 * 1. menyiapkan lokasi server, user nama dan pas
	 * 2. tes koneksi
	 *
	 */


	include_once("konfigurasi.php");

	$cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("koneksi ke DBMS mysql gagal<br>");
	echo "koneksi ke DBMS mysql sukses<br>";

