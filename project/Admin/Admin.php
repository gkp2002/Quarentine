<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
    <script src="Admin.js"></script>
</head>
<body>
  <?php
    session_start();
    include '../DbConnection.php';
    $sql= "SELECT * FROM patient";
   if( $result=$conn->query($sql)){
    $total = $result->num_rows;
   };
  
    
  ?>
    <header>   
      
      <marquee behavior="alternate" direction="">
      <h1>Quarantine management System </h1>
      </marquee>  
    
      </header>
      <div class="Admin-page">
        <h1>Welcome     </h1>
      </div>
    <main>
       <div class="left-pannel" >
          <ul>
            <li><a href="/project/Admin/Admin.php" >DashBoard</a></li>
            <li><a href="/project/checkin/checkin.php">AddPatient</a></li>
            <li><a href="/project/SignUp/showTable.php">TotalAdmin</a></li>
            <li><a href="/project/TotalPatient/Total.php">TotalPatient</a></li>
            <li> <a href="/project/MainPage.php">LogOut</a></li>
             </ul>
       </div>
        <div class="right-pannel" >

      <div id='main'>
        <div class="container">
        <div  id="panel"></div>
         <div class="flex-box1">
          <div class="box">
            <div class="clock">
            <div class="time">
           <span id="hrs">00</span>
           <span>:</span>
           <span id="min">00</span>
           <span>:</span>
           <span id="sec">00</span>
            </div>
            <div class="date">
               <span id="day">00</span>
               <span>/</span>
               <span id="month">00</span>
               <span>/</span>
               <span id= "year">00</span>
            </div>
            </div>    

           </div>
          <div class="box">
            <div class="Total-cases">
             <h1>Total Cases</h1>
              <h3> <?php echo $total?></h3>
          
            </div>
          </div>
          
          <!-- </div>
          <div class="box">
            
          </div>
          <div class="box">

           </div>
         </div>
         <div class="flex-box2">         
        

         </div> -->
        </div>
       </div>

    </main>
    <!-- <footer>

    </footer> -->
</body>
</html>