<?php 
	/**
	 * menambahakan data ke tabel mhs
	 * 1. buat  koneksi
	 * 2. buat script sql untuk insert data ke tabel mhs
	 *    NIM, Nama, jurusan, tgl lahir, jk, passcode
	 * 3. execute point 2
	 * 4. cek status
	 * 5. tes
	 */
if(isset($_POST["txNIM"])){
	include_once("dbkoneksi2.php");

	$nim = $_POST["txNIM"];
	$nama = $_POST["txNAMA"];
	$talag = $_POST["txTALAG"];
	$jk = $_POST["txJK"];
	$jur = $_POST["txJUR"];
	$passs = $_POST["txPASSS"];

	$sqlINSERT = "INSERT INTO mhs(NIM,NAMA, JURUSAN, TGLLAHIR, PASSCODE) VALUES
	('".$nim."','".$nama."','".$jur."','".$jk."','".$talag."','".$passs."');";

	$hsl = mysqli_query($cnn, $sqlINSERT);

	if($hsl){
		echo "insert data sukses<br>";
	}else{
		echo "insert data gagal<br>";
	}

	mysqli_close($cnn);
}