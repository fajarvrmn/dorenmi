<?php
	include "koneksi.php";
	
	$PesananID 	= $_POST['PesananID'];
	
	class emp{}
	
	if (empty($PesananID)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error Mengambil Data"; 
		die(json_encode($response));
	} else {
		$query 	= mysql_query("SELECT * FROM pesanan WHERE PesananID='".$PesananID."'");
		$row 	= mysql_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->success = 1;
			$response->PesananID = $row["PesananID"];
			$response->namakonsumen = $row["namakonsumen"];
			$response->namapesanan = $row["namapesanan"];
			$response->harga = $row["harga"];
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Mengambil Data";
			die(json_encode($response)); 
		}	
	}
?>