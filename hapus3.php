<?php 
session_start();

if (!isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;

    // code...
}

require 'functions.php';


$id = $_GET["id"];

if ( hapus3($id) > 0 ) {
	echo "
        <script>
        	alert('data berhasil dihapus!');
        	document.location.href = 'riwayat.php';
        </script>
        ";
        // code...
    } else {
        echo "
        <script>
        	alert('data gagal dihapus!');
        	document.location.href = 'riwayat.php';
        </script>
        ";
    }
	// code...


 ?>