<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","nandapro_nawi","nawi_seismonapp","nandapro_seismon");

function query1($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_array($result)) {
		$rows[] = $row;
		// code...
	}
	return $rows;
}
function query2($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
		// code...
	}
	return $rows;
}
function hapus1($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM laporan_kerusakan WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function hapus2($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM ssd_pm WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function hapus3($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM rekomendasi WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function cari($keyword) {
	$query = "SELECT * FROM laporan_kerusakan
			WHERE 
			kode LIKE '%$keyword%' OR 
			stasiun LIKE '%$keyword%' 
			
	";
	return query1($query);
}	
function cari2($keyword) {
	$query = "SELECT * FROM metadata
			WHERE 
			provinsi_pj LIKE '%$keyword%'
			
	";
	return query2($query);
}	
?>
