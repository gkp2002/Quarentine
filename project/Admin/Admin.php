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
    <header>    
      <marquee behavior="alternate" direction="">
      <h1>Quarantine management System </h1>
      </marquee>
      </header>
    <main>
       <div class="left-pannel" >
          <ul>
            <li><a href="/project/Admin/Admin.php" >DashBoard</a></li>
            <li><a href="#" onclick="add()">CheckIn</a></li>
            <li><a href="#" onclick="hello()">CheckOut</a></li>
            <li><a href="#">TotalPatient</a></li>
             </ul>
       </div>
        <div class="right-pannel" >
      <div id='main'>
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
          
          </div>
          <div class="box">

          </div>
          <div class="box">

           </div>
         </div>
         <div class="flex-box2">
          
        

         </div>
        </div>
       </div>

    </main>
    <footer>

    </footer>
</body>
</html>