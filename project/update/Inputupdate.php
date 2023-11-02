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
       $LastName = $_POST['lname'];
       $FatherName = $_POST['father'];
       $MotherName = $_POST['mother'];
       $Gender = $_POST['gender'];
       $DoB = $_POST['Dob'];
       $IdNumber = $_POST['idnumber'];
       $Phone = $_POST['phone'];
       $Admitdate = $_POST['admit'];
       $Exitdate = $_POST['exit'];
       $Address = $_POST['address'];
       if(is_numeric($_GET['id'])){    
        $sql ="UPDATE  patient SET FirstName='$FirstName' WHERE Sr= '".$_GET['id']."'";    
        $result = mysqli_query($conn,$sql);    
       }
    }
        ?>
        
<!--     
    // (FirstName,LastName,FatherName,MotherName,Gender,DoB,Idnumber,Phone,Admit,Exitdate,Address)
    //     values('$FirstName','$LastName','$FatherName','$MotherName','$Gender','$DoB','$IdNumber','$Phone','$Admitdate','$Exitdate','$Address')";
      if($conn->query($sql) == true){
        echo "<script> alert('data Submit Sucessfull')</script>";
       
      }else{
        echo "Data add sucessfull";
      }

   } -->


?>