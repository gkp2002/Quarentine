
<?php
   $server = 'localhost';
   $username = 'root';
   $password = '1234';
   $Db ='Covid';
   $conn = new mysqli($server, $username, $password,$Db);
   if($conn->connect_error) {
          die("Error connecting to");
     }else{
       $FirstName = $_POST['fname'];
   }


?>