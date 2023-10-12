<?php
  $server ='localhost';
  $username = 'root';
  $password = '1234';
  $Db = 'covid';
  $conn = new mysqli($server,$username,$password,$Db);
if(is_numeric($_GET['id'])){    
$sql = "delete from patient where Sr = '".$_GET['id']."'";    
$result = mysqli_query($conn,$sql);    
}
header('Location:Total.php');
?>