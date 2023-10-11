<?php
   $server = 'localhost';
   $username = 'root';
   $password = '1234';
   $Db ='Covid';
   $conn = new mysqli($server, $username, $password,$Db);
   if($conn->connect_error){
    die("Could not connect to".$conn->connect_errno);
   }else{
    echo "connection established";
   }

   ?>