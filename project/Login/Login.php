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
  $server ='localhost';
  $username = 'root';
  $password = '1234';
  $Db = 'covid';
  $conn = new mysqli($server,$username,$password,$Db);
  $sql = "SELECT * FROM signup";
   $result = $conn->query($sql);
  ?>
    <nav>
      <?php
      echo "<h3> Login Time: ".date("y-M-d" )."</h3>";
    ?>
    </nav>
    
     <div class="right_Panel">    
     
       <div class="login_Page">
            <div class="container">
                <form action="Admin/Admin.php" method="post">
                    <h1>Quarantine login page</h1>
              <label >UserName<input name="user" type="text" placeholder="UserName" required></label>
              <br>
              <label for="">Password <input name="password" type="text" placeholder="password" required></label><br>

              <button type="submit" class="Submit">Submit</button>
              <button type="Reset" class="Reset" value="Reset">Reset</button>
           
            </form>
            </div> 
          </div>
    </div>
    <div class="left_panel">
    <div class="Home">
            <h2><a href="/project/MainPage.php">Home</a></h2>
        </div>

    </div>
</body>
</html>