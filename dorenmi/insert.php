<?php
	include "koneksi.php";
	
	$namakonsumen 	= $_POST['namakonsumen'];
	$namapesanan = $_POST['namapesanan']
	$harga = $_POST['harga'];
	
	class emp{}
	
	if (empty($namakonsumen) || empty($harga)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("INSERT INTO pesanan (PesananID,namakonsumen,namapesanan,harga) VALUES(0,'".$namakonsumen."','".$namakonsumen."','".$harga."')");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di simpan";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error simpan Data";
			die(json_encode($response)); 
		}	
	}
?>