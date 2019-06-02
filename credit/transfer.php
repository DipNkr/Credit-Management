<?php

session_start();

include("database/database.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TRANSFER</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
    body {
  background-image: url(media/1.jpeg);
        background-size: cover;
   font-family: 'Roboto Condensed', sans-serif;
  font-weight: bold;
        height: 100vh;
}

.container {
  width: 80%;
  height: 100px;
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



        
       
        
        .button {
             background-color: #4CAF50;
             button-size:30px;
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: normal;
            font-size: 25px;
			
           
            
             
        }
        
       
        
        
        
       
		
		
		.topright {
          position: absolute;
          top: 8px;
          right: 16px;
          font-size: 80px;
          color:#ffffff;
}

.centerr {
          
       
          
          font-size: 80px;
          color:#ffffff;
}

.name {
          
       
          text-align: center;
          font-size: 30px;
          color:#ffffff;
}




select {
  width: 50%;
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
  font-size: 20px;
}


p.a {
  font-family: "Times New Roman", Times, serif;
  color:white;
  font-size:22px;
}



    </style>
	
</head>


<body>
    <div class="container">
  <div id="logo"><IMG SRC="media/logo.png" ALT="some text" WIDTH=150 HEIGHT=100></div>
  
 
  
 
        <center><a  class="centerr"><i class="fa fa-user"></i></a>
		 <br>
         
   
         
		<a  class="name">
		<?php  print $database->getname();     ?></a></center>
  
   <a href="session_close.php" class="topright"><i class="fa fa-arrow-left"></i></a>
   
   
  <br><br><br><br>
   
 <center>
<form  method="post" >
<p class="a"> Send To :</p>
  <select name="emails">
    <?php    $database->fetch_email(); ?>
    </select>
 
  <br><br>
<p class="a"> Amount of Credit :</p> 
<input type="number"  min="1" name="amount"  style="height:36px" required>
  
  <br><br>
   <button type="submit" name="transfer" class="button">Transfer</button>
</form>
</center>



<?php         
  if(isset($_POST['transfer']))
  {
  
  
    $emails=$_POST['emails'];
    $amount=$_POST['amount'];
	
   
  $database->transfers($emails,$amount);

  

  
  }
  ?>  

  

   
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