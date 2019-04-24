<?php
	include "koneksi.php";
	
	$PesananID 	= $_POST['PesananID'];
	
	class emp{}
	
	if (empty($PesananID)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error hapus Data"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("DELETE FROM pesanan WHERE PesananID='".$PesananID."'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di hapus";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error hapus Data";
			die(json_encode($response)); 
		}	
	}
?>