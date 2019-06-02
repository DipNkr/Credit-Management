<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CREDIT MANAGEMENT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <style>
    body {
  background-image: url(media/ooo.jpeg);
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
.navigation-wrapper {
  position: relative;
}
.navigation-button {
  will-change: transform;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  position: fixed;
  z-index: 1;
  top: 40px;
  right: 100px;
  background: transparent;
  cursor: pointer;
}
.navigation-button .fa {
  border: 2px solid white;
  border-radius: 3px;
  padding: 10px;
    color: white;
}
 

.navigation-menu ul li {
  list-style: none;
  font-family: impact;
  font-weight: 300;
  color: hsl(0,0%,70%);
}

.navigation-menu {
  content: '';
  position: fixed;
  top: 0;
  right: 0;
  width: 50%;
  background: #fff;
  height: 100%;
  transform: skewX(0deg) translate(100%,0);
  transform-origin: top right;
  transition: all .2s ease-in;
  z-index: -1;
}
.navigation-menu ul {
  transform: skewX(-8deg);
  transform-origin: top left;
  position: fixed;
  right: 120px;
  top: 120px;
  width: 400px;
  text-align: right;

}
.navigation-menu ul li {
  position: relative;
    z-index: 999;
  font-size: 32px;
  color: hsl(0,0%,10%);
  line-height: 64px;
}
.navigation-menu ul li  a {
  border: none;
  color: hsl(0,0%,10%);
  text-decoration: none;
}
.navigation-menu.active {
  transform: skewX(8deg) translate(0,0);
    
}

.navigation-menu li {
  opacity: 1;
  transform: translate(0, 10px);
  transition: all .0s ease-in .3s;
  
}

.navigation-menu.active li:nth-child(1) {
  transition-delay: .2s;
}
.navigation-menu.active li:nth-child(2) {
  transition-delay: .2s;
}
.navigation-menu.active li:nth-child(3) {
  transition-delay: .2s;
}
.navigation-menu.active li:nth-child(4) {
  transition-delay: .2s;
}


        .hero h1{
             
            margin-top: 178px;
            text-transform: uppercase;
            font-family: impact;
            font-size: 26px;
            letter-spacing: 4px;
            color: white;
            
             
        } 
        
        span{
            font-size: 65px;
            letter-spacing: 2px;
            font-family: impact;
        }
        
        .button {
            
             
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: normal;
            font-size: 12px;
            margin-top: 40px;
            
             
        }
        .btn1:hover{
            text-decoration: none;
            color: white;
        }
        .btn2:hover{
            text-decoration: none;
            color: black;
        }
        
        
        
        .btn1{
            padding: 12px 25px;
            background: #f20c4a;
            text-decoration: none;
            color: white;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
             
        }
        .btn2{
            padding: 12px 25px;
            background: #f4f6f8;
            text-decoration: none;
            color: #000;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
             
        }
    </style>
</head>
<body>
    <div class="container">
  <div id="logo"><IMG SRC="media/logo.png" ALT="some text" WIDTH=150 HEIGHT=100></div>
  
  
  
  <div class="navigation-wrapper">
    <div class="navigation-button">
      <i class="fa fa-bars"></i>
    </div>
    <div class="navigation-menu">
        <ul>
          <center><li><a  href=""><font color="blue">ABOUT SPARK</font></a></li>
          <li><a href="">Inspire</a></li>
		  <p>To inspire, motivate and encourage students to learn, create and help build a better society.<p>
          <li><a href="">Innovate</a></li>
		  <p>To teach new ways of thinking, to innovate and solve the problems on their own<p>
          <li><a href="">Integrate</a></li>
		  <p>To let the students integrate, and help each other, learn from each other and do well together.<p>
          </center>
      </ul>
    </div>
  </div>
  <section class="hero">
      <h1> <br> <span>Credit Management </span></h1>
      <div class="button">
          <a href="users.php" class="btn1"><strong>View & Select User</strong></a>
          <a href="transaction.php" class="btn2"><strong>Transactions</strong></a>
      </div>
  </section>
  
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