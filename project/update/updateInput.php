<?php
   $server = 'localhost';
   $username = 'root';
   $password = '1234';
   $Db ='Covid';
   $conn = new mysqli($server, $username, $password,$Db);
   if($conn->connect_error) {
          die("Error connecting to");
     }else{
        $Serial = $_POST['Serial'];
       $FirstName = $_POST['fname'];
       $LastName = $_POST['lname'];
       $FatherName = $_POST['father'];
       $MotherName = $_POST['mother'];
        $DoB = $_POST['Dob'];
       $IdNumber = $_POST['idnumber'];
       $Phone = $_POST['phone'];  
       $Address = $_POST['address'];
       $sql ="UPDATE patient SET FirstName='$FirstName',LastName='$LastName',FatherName='$FatherName',MotherName='$MotherName',DoB='$DoB',IdNumber='$IdNumber',Phone='$Phone',Address='$Address' WHERE Sr=$Serial";
      if($conn->query($sql) == true){
        echo "<script> alert('data Submit Sucessfull');window.location.href='./update.php'</script>";
       
      }else{
        echo "Data Not add sucessfull";
      }

   }


?>