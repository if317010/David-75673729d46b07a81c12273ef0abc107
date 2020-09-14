<?php
$username = $_POST['username'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];
if($password != $repeatPassword)
{
  print "<script>alert('Konfirmasi password harus sama dengan password !');
  javascript:history.go(-1);</script>";
  exit;
}
if((!empty($username)) && (!empty($password)))
{
$query = mysqli_query("INSERT INTO $table (username,password)
values ('$username','$password');");
print "Registrasi success<br>";
}
