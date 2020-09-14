<?php include "config.php";

if(isset($_POST['tombol_login'])){

  $username = mysqli_real_escape_string($conn, trim($_POST['username']));
  if ($_POST['password']==$_POST['repeatPassword'] ) {
  $password = mysqli_real_escape_string($conn, trim($_POST['password']));
  }else
  {
      echo "<script>alert('Password yang Anda Masukan Tidak Sama');</script>";
  }

  $conn = "INSERT INTO users (id_users, username, password)
            VALUES (:username,:password)";
}

?>
