<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkIn</title>
    <link rel="stylesheet" href="check.css">
</head>
<body>
    <?php
    include '../DbConnection.php';  
    if(is_numeric($_GET['id'])){    
        $sql = "SELECT * FROM patient where Sr = '".$_GET['id']."'";    
           $result = mysqli_query($conn,$sql);   
           if($result->num_rows>0){
            while($row=$result->fetch_assoc()) {
                ?>
        
    
    
    <form action="updateInput.php" method="post">
     <table >
       
     <tr ><th colspan="4">Update Patient Data</th></tr>
     <td>Regist</td>
        <td><input required type="text" value="<?PHP echo $row['Sr'] ?>" name="Serial" ></td>
        <tr align="center">

            <tr>
        <td>FirstName</td>
        <td><input required type="text" value="<?PHP echo $row['FirstName'] ?>" name="fname" ></td>
      
        <td>LastName</td>
        <td><input required type="text" value="<?PHP echo $row['LastName'] ?>" name="lname" ></td>
       </tr>
       <tr>
        <td>FatherName</td>
        <td><input required type="text" value="<?PHP echo $row['FatherName'] ?>"name="father" ></td>
      
        <td>MotherName</td>
        <td><input required type="text" value="<?PHP echo $row['MotherName'] ?>"name="mother" ></td>
       </tr>

       <tr>
        <!-- <td>Gender</td>
        <td><input type="radio" name="gender" value="M" checked >male 
             <input type="radio" name="gender" value="F">female
    
       </td> -->
            <td>DOB</td>
        <td><input required type="text" value="<?PHP echo $row['DoB'] ?>"name="Dob" ></td>
       </tr>
       <tr>
        <td>IdNumber</td>
        <td><input required type="text" value="<?PHP echo $row['Idnumber'] ?>" name="idnumber" maxlength="20" ></td>
         <td>Phone</td>
        <td><input required type="tel" value="<?PHP echo $row['Phone'] ?>" name="phone" maxlength="10"></td>
       </tr>
       <!-- <tr>
        <td>Admitdate</td>
        <td><input required type="date" <?php echo $row['Admit']?> name="admit" ></td>
           <td>Exitdate</td>
        <td><input required type="date" <?php echo $row['Exitdate']?> name="exit" ></td>
       </tr> -->
       <tr>
        <td>Address</td>
        <td colspan="4"><textarea name="address" value="<?php echo $row['Address']?>" cols="70" rows="3"></textarea required></td>
       </tr>
    </table>


    <button type="Submit">Update</button>
    <button type="reset">Reset</button>
 
    </form>
</body>
</html>
</body>
</html>
<?php   
   }
    }
}?>