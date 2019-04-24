<?php
	include "koneksi.php";
	
	$namakonsumen 	= $_POST['namakonsumen'];
	$namapesanan = $_POST['namapesanan']
	$harga = $_POST['harga'];
	
	
	class emp{}
	
	if (empty($PesananID) || empty($namakonsumen) || empty($namapesanan) || empty($harga)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("UPDATE pesanan SET namakonsumen='".$namakonsumen."',namapesanan='".$namapesanan."', harga='".$harga."' WHERE PesananID='".$PesananID."'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di update";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error update Data";
			die(json_encode($response)); 
		}	
	}
?>