<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup </title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <?php
      echo "<h3> signup : ".date("y-M-d " )."</h3>";
    ?>
       
    <h1 >Quarantine Admin Form</h1>
    
    <div class='form_signup'>
                  <form action="input.php" method="post">
                  <span for="">FirstName &emsp;&emsp;&emsp;&emsp;<input type="text" name="fname" required><span id="require">*</span></span><br>
                  <span for="">LastName &emsp;&emsp;&emsp;&emsp;<input type="text" name="lname" ><span id="require">*</span></span><br>
                  <span>Gender&emsp;&emsp;&emsp;&emsp;&emsp;<input type="radio" name="Gender" value="M" required  checked> Male <input type="radio" name='Gender' value="F" required> Female </span><br>
                  <span for="">FatherName&emsp;&emsp;&emsp; <input type="text" name="father" required><span id="require">*</span></span><br>
                  <span for="">MotherName&nbsp; &nbsp;&emsp;&emsp;<input type="text" name="mother" required><span id="require">*</span> </span><br>
                  <span for="">DoB &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;<input type="date" name="DoB" required><span id="require">*</span></span><br>
                  <span for="">UserName &emsp;&emsp;&emsp;&emsp13;<input type="text" name="user" required><span id="require">*</span></span><br>
                  <span for="">Password &emsp;&emsp;&emsp;&emsp;<input type="text" name="password" id= 'pass'required><span id="require">*</span></span><br>
                  <span for="">confirm Password &nbsp;<input type="text" name="confirm" id= 'Cpass'required><span id="require">*</span></span><br>
                  <button type="Submit" id="submit" name="Submit">Submit</button>
                  <button type="Reset" name="Reset">Reset</button>
                  <button type="Submit" id="back"><a href="/project/MainPage.php">Back</a></button>

,
        </form>

    </div>
    <script>
        
       
    </script>
 
</body>

</html>