<?php 
class Database 
{ 
 
  var $host = "localhost"; 
  var $username = "root"; 
  var $password = ""; 
  var $database = "nilaiMahasiswa"; 
  var $koneksi = ""; 
 
  function __construct() 
  { 
    $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database); 
    if (mysqli_connect_errno()) { 
      echo "Koneksi database gagal : " . mysqli_connect_error(); 
    } 
  } 
 
  function tampil_data() 
  { 
    $data = mysqli_query($this->koneksi, "select * from mhs"); 
    while ($row = mysqli_fetch_assoc($data)) { 
    $hasil[] = $row; 
  } 
return $hasil; 
}


 
function get_by_id($id) 
{ 
 $query = mysqli_query($this->koneksi, "select * from mhs where id='$id'"); 
 return $query->fetch_assoc(); 
}
