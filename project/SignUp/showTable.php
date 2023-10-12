<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowTable</title>
    <style>
        
 table{
    border: 2px solid black;
    margin:90px 40px 40px 40px;
    
    text-align: center;
    font-weight: bold;
    font-size: large;
    color:brown;
    
 }
 table th{
    border: 2px solid black;
    padding: 7px;
 }
 table td{
    border: 2px solid black;
    padding: 7px;
 }
 body{
    display: flex;
    justify-content: center;
    background-image:url("/project/images/patent.png");
    background-size: cover;
    background-repeat: no-repeat;
 
    }
 
    </style>
   
</head>
<body>
        <div>
   <?php 

       $server ='localhost';
       $username = 'root';
       $password = '1234';
       $Db = 'covid';
       $conn = new mysqli($server,$username,$password,$Db);
       $sql ="SELECT * FROM signup";
       
       $result = $conn->query($sql);
      
       if($result->num_rows>0){
             echo "<table><th> Sr </th><th> FirstName </th><th> LastName </th><th> Gender </th><th> FatherName </th><th> MotherName </th><th> DoB </th><th> UserName </th></tr>";
          while($row = $result->fetch_assoc()) {
                  echo "<tr> <td> ".$row["Sr"]." </td>".                  
                  "<td> ".$row["FirstName"]." </td>".
                  "<td> ".$row["LastName"]." </td>".
                  "<td> ".$row["Gender"]." </td>".
                  "<td> ".$row["FatherName"]." </td>".
                  "<td> ".$row["MotherName"]." </td>".
                  "<td> ".$row["DoB"]." </td>".
                  "<td> ".$row["username"]." </td>";
                  ?>
                  <td> <a href="delete.php?id=<?php echo $row['Sr'];?>" onclick="return confirm('Are You Sure')">Delete    
                  </a> </td>  
                  <?php             
          }
          echo "</tr></table>";
       }else{
        echo "<h1> Empty Data</h1>";
       }
    $conn->close();
    ?>
    </div>
   
</body>

</html>