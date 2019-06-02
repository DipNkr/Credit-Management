<?php


include("database/database.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TRANSACTION</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
    body {
  background-image: url(media/bg.jpg);
        background-size: cover;
   font-family: 'Roboto Condensed', sans-serif;
  font-weight: bold;
        height: 100vh;
}

.container {
  width: 80%;
  height: 40px;
  position: relative;
  top: 40px;
  margin: 0 auto;
}

#logo {
  position: absolute;
  top: 0;
  left: 0;
  color: white;
 
 
}



        .hero h1{
             
            margin-top: 18px;
            text-transform: uppercase;
            font-family: impact;
            font-size: 35px;
            letter-spacing: 4px;
            color: white;
            
             
        } 
        
       
        
        .button {
            
             
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: normal;
            font-size: 12px;
            margin-top: 40px;
            
             
        }
        
        .btn2:hover{
            text-decoration: none;
            color: black;
        }
        
        
        
        
       
        .btn2{
            padding: 12px 25px;
            background: #f4f6f8;
            text-decoration: none;
            color: #000;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
             
        }
		
		
		.topright {
          position: absolute;
          top: 8px;
          right: 16px;
          font-size: 80px;
          color:white;
}



#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
  
  
}

#customers td, #customers th {
  border: 5px solid #ddd;
    padding: 1px 2px 2px 2px;
}


#customers tr:nth-child(even){background-color: #f2f2f2;
font-size: 15px;
}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
 font-size: 18px;
}

    </style>
</head>
<body>
    <div class="container">
  <div id="logo"><IMG SRC="media/logo.png" ALT="some text" WIDTH=150 HEIGHT=100></div>
  
 
  
  <section class="hero">
      <h1> <br> <center>TRANSACTIONS </center></h1>
     
  </section>
  
   <a href="home.php" class="topright"><i class="fa fa-home"></i></a>
   
   <br>
   <br>
   
   <table id="customers" align="center" >
    <thead>
      <tr>
        <th><strong>SENT FROM</strong></th>
        <th><strong>RECEIVED BY</strong></th>
        <th><strong>CREDIT SEND</strong></th>
		
		
      </tr>
    </thead>
    <tbody>
	
     
	   <?php
	 
	   
	   $database->transactions();
	   
	      
	  ?>
	  
	  
	  
    </tbody>
  </table>
    
  
  
 
  
</div>
<script>
    var navButton = document.querySelector('.navigation-button');
var navMenu = document.querySelector('.navigation-menu');
var win = window;

function openMenu(event) {
  
  navButton.classList.toggle('active');
  navMenu.classList.toggle('active');

  event.preventDefault();
  event.stopImmediatePropagation();
}
  
function closeMenu(event) {
  if (navButton.classList.contains('active')) {
    navButton.classList.remove('active');
    navMenu.classList.remove('active');
  }
}
  navButton.addEventListener('click', openMenu, false);

win.addEventListener('click',closeMenu, false);
    
</script>
</body>
</html>