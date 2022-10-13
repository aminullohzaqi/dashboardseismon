<?php
 //untuk penghubung dengan file koneksi
 include 'koneksi.php';
 //cara menangkap data yang dikirim dari form
 if(isset($_POST['input'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  //ambil data dari database tabel login dengan username dan password yang sesuai
  $data = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
  if(mysqli_num_rows($data))
  {
   echo "<href "dashboard.php" > ;
  }else{
   echo "Login Gagal";
  }
 }
 ?>
  <td><?php echo $row1["datetime"]; ?></td>

  <?php 
session_start();

if (!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;

    // code...
}

require 'functions.php';


$id = $_GET["id"];

if ( hapus($id) > 0 ) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'daftarlaporanadaptive.php';
        </script>
        ";
        // code...
    } else {
        echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'daftarlaporanadaptive.php';
        </script>
        ";
    }
    // code...


 ?>