<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
       $server = 'localhost';
       $userName = 'root';
       $password ='1234';
      //  $conn = mysqli_connect($server,$userName,$password);
      $conn = new mysqli($server,$userName,$password);
       if($conn-> connect_error){
        echo ("Couldn't connect to server: " . $conn->connect_error);
       }else{
        echo "Connection established <br>";
        
       $sql = 'create database covid';       
       if($conn->query($sql) == true){
        echo "Database created sucessfull ";
       }else{
        echo "Database created failed <br>";

       }
      
       }
    
      
       ?>
</body>
</html>