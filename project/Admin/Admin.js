       
       setInterval(() => {
           let date = new Date();
           document.getElementById("hrs").innerHTML = date.getHours();
           document.getElementById("min").innerHTML = date.getMinutes();
           document.getElementById("sec").innerHTML = date.getSeconds();
           document.getElementById("day").innerHTML = date.getUTCDate()+1;
           document.getElementById("month").innerHTML = date.getUTCMonth()+1;
           document.getElementById("year").innerHTML = date.getUTCFullYear();
       }, 1000);

// const list = document.getElementById('checkin');
// list.addEventListener('click',()=>{
//     document.getElementById("panel").innerHTML="hello";
// })

// function add(){
//     document.querySelector(".right-pannel").innerHTML="hello";

    
// }
// function hello(){
//     document.getElementById("main").innerText=this.open("/project/signup/signup.php")
// }

