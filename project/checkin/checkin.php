<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkIn</title>
    <link rel="stylesheet" href="check.css">
</head>
<body>
    <form action="Addinput.php" method="post">
     <table >
       
     <tr ><th colspan="4">Patient Information</th></tr>
      
       <tr>
        <td>FirstName</td>
        <td><input required type="text" name="fname" pattern="[A-Za-Z]"></td>
      
        <td>LastName</td>
        <td><input required type="text" name="lname"pattern="[A-Za-Z]"></td>
       </tr>
       <tr>
        <td>FatherName</td>
        <td><input required type="text" name="father" pattern="[A-Za-Z]" ></td>
      
        <td>MotherName</td>
        <td><input required type="text" name="mother"pattern="[A-Za-Z]" ></td>
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
        <td>IdProof</td>
        <td><input required type="text" name="idnumber" maxlength="20" pattern="[0-9]{12,14}"></td>
         <td>Phone</td>
        <td><input required type="tel" name="phone" maxlength="10" pattern="[0-9]{10,14}"></td>
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