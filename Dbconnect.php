<?php
  
  function connect(){
  $conn = new mysqli("localhost","Mithila","123","wtk");
 
  if($conn->connect_errno){
  	die("Database connection failed...". $conn->connect_errno);
  }
  return $conn;
}
?>