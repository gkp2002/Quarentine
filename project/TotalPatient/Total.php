<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
          background-color: black;
          color: white;
          display: flex;
          align-items: center;
          
        }
      .table-data table th,td{
         padding: 20px;
          }
    </style>
</head>
<body>
    

<?php
   $server = 'localhost';
   $username = 'root';
   $password = '1234';
   $Db ='Covid';
   $conn = new mysqli($server, $username, $password,$Db);
   if($conn->connect_error) {
          die("Error connecting to");
     }else{
            $sql = "SELECT * FROM patient";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                ?>
            <div class="table-data">
                <table border="1px solid black">
                    <tr>
                        <th>RegNum</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                          <th>FatherName</th>
                          <th>MotherName</th>
                          <th>Gender</th>
                          <th>DoB</th>
                          <th>IdNumber</th>
                          <th>Phone</th>
                          <th>AdmitDate</th>
                          <th>ExitDate</th>
                          <th>Address</th>
                          <th colspan="2">Operation</th>
                    </tr>
                    <tr>
                <?php
                while($row = $result->fetch_assoc()){
                    ?>
                     <td><?php echo $row['Sr']?></td>
                     <td><?php echo $row['FirstName']?></td>
                     <td><?php echo $row['LastName']?></td>
                     <td><?php echo $row['FatherName']?></td>
                     <td><?php echo $row['MotherName']?></td>
                     <td><?php echo $row['Gender']?></td>
                     <td><?php echo $row['DoB']?></td>
                     <td><?php echo $row['Idnumber']?></td>
                     <td><?php echo $row['Phone']?></td>
                     <td><?php echo $row['Admit']?></td>
                     <td><?php echo $row['Exitdate']?></td>
                     <td><?php echo $row['Address']?></td>
                     <td> <a href="dataDelete.php?id=<?php echo $row['Sr'];?>" onclick="return confirm('Are You Sure')">Delete    
                  </a> </td> 
                  <td> <a href="/project/update/update.php? id=<?php echo $row['Sr'];?>" onclick="return confirm('Are You Sure')">update   
                  </a> </td>  
                    </tr>
                    <?php
                }
            }else{
                echo "Empty result";
            }
     }
     ?>
     </table>
            </div>
     </body>
</html>