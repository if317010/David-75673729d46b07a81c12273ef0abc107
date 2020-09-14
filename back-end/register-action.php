<?php
$username = $_POST['username'];
$password = $_POST['password'];
$repeatPassword = $_POST['c_password'];
if($password != $repeatPassword)
{
  print "<script>alert('Konfirmasi password harus sama dengan password !');
  javascript:history.go(-1);</script>";
  exit;
}
if((!empty($username)) && (!empty($password)))
{
$query = mysql_query("INSERT INTO $table (username,password)
values ('$username','$password');");
print "Registrasi success<br>";
}
