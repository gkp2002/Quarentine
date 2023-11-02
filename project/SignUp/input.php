<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
button{
    padding:20px 30px 20px 30px;
    margin: 20px;
    font-size: medium;
    font-weight: bold;
    background-color: black;
    color: white;
}
button a{
    
    font-size: medium;
    font-weight: bold;
    background-color: black;
    color: white;
    text-decoration: none;
}
</style>
<body>
<?php
//   include "./project/DbConnection.php";
$server = 'localhost';
   $username = 'root';
   $password = '1234';
   $Db ='Covid';
   $conn = new mysqli($server, $username, $password,$Db);
   if($conn->connect_error){
    die("Could not connect to".$conn->connect_errno);
   }
  $FirstName = $_POST['fname'];
  $LastName = $_POST['lname'];
  $FatherName = $_POST['father'];
  $MotherName = $_POST['mother'];
  $DoB = $_POST['DoB'];
  $username = $_POST['user'];
  $password = $_POST['password'];
  $Gender = $_POST['Gender'];
  $confirm = $_POST['confirm'];
   $sql = "insert into Signup (FirstName,LastName,Gender,FatherName,MotherName,DoB,username,password) values('$FirstName', '$LastName', '$Gender','$FatherName', '$MotherName', '$DoB', '$username','$password')";
   try{
   if($password == $confirm){
  if($conn->query($sql)===true){ 
    echo"  <script> alert('Data saved successfully');window.location.href='../MainPage.php'
    </script>";
    
  }else{      
    echo "Error Data Not saved ";
  }
}else{
  echo "Password Not Matched";
}
   }
   catch(Exception $e){
   echo "<script> alert('Enter Unique user Id');window.location.href='./signup.php'</script>";
   }
   

?>
  
  </body>
</html>