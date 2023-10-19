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
        
    
    ?>
    <form action="Addinput.php" method="post">
     <table >
       
     <tr ><th colspan="4">Update Patient Data</th></tr>
        <tr align="center">
            <tr>
        <td>FirstName</td>
        <td><input required type="text" value="<?php echo $row['$FirstName']?>" name="fname" ></td>
      
        <td>LastName</td>
        <td><input required type="text" name="lname" ></td>
       </tr>
       <tr>
        <td>FatherName</td>
        <td><input required type="text" name="father" ></td>
      
        <td>MotherName</td>
        <td><input required type="text" name="mother" ></td>
       </tr>

       <tr>
        <td>Gender</td>
        <td><input type="radio" name="gender" value="M" checked >male 
             <input type="radio" name="gender" value="F">female
    
       </td>
            <td>DOB</td>
        <td><input required type="date" name="Dob" ></td>
       </tr>
       <tr>
        <td>IdNumber</td>
        <td><input required type="text" name="idnumber" maxlength="20" ></td>
         <td>Phone</td>
        <td><input required type="tel" name="phone" maxlength="10"></td>
       </tr>
       <tr>
        <td>Admitdate</td>
        <td><input required type="date" name="admit" ></td>
           <td>Exitdate</td>
        <td><input required type="date" name="exit" ></td>
       </tr>
       <tr>
        <td>Address</td>
        <td colspan="4"><textarea name="address" id="" cols="70" rows="3"></textarea required></td>
       </tr>
    </table>
    <button type="Submit">Submit</button>
    <button type="reset">Reset</button>
 
    </form>
</body>
</html>
</body>
</html>
<?php    }
        }
        }?>