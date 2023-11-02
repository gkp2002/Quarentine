<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="Login.css">
 </head>
<body>

<?php
include '../DbConnection.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
  $_SESSION['uid']=$username;
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE username = '$username' and password = '$password'";
    $result =  mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
     
    if($count == 1) {    
      header("Location:/project/Admin/Admin.php");
        exit();
    } else {
        $error_message = "Invalid credentials. Please try again.";
    }
}
?>
      <nav>
      <?php
      echo "<h3> Login Time: ".date("y-M-d" )."</h3>";
    ?>
    </nav>    
    <div class="Home">
            <h2><a href="/project/MainPage.php">Home</a></h2>   

    </div>
    <div class="login-Page">
           <div class="Image">
              <img src="/project/images/bg2.png" alt="">
           </div>
            <div class="container">
                <form method="post">
               <h1>Quarantine login page</h1>
              <label >UserName<input name="username" type="text" placeholder="Username" required></label>
              <br>
              <label for="">Password <input name="password" type="password" placeholder="password" required></label><br>             
                <button type="submit" class="Submit" name="submit">Submit</button>
              <button type="Reset" class="Reset" value="Reset">Reset</button>
           
            </form>
            </div> 
          </div>
   
   
    
</body>
</html>

