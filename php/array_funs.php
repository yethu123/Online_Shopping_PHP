<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>...</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
   

#sidebar {
    width : 200px;
    float : left;
	background-color: #F90;
}

#main-contents {
   /*width :1200px;*/
    float : left;
	background-color: #6CF ; width:770px; height: 415px;
	
}

#as1 {
    
    border-radius: 15px;
	background-color: #0CF;
	margin:20px; height:140px;
	
}
.as2 {
   
    border-radius: 15px;
	background-color: #0CF;
	margin:20px;
	height:70px;
}#as3 {
    
    border-radius: 15px;
	background-color: #0CF;
	margin:20px; 
	height:35px;
}
footer {
    clear : both;
	background-color:#0F3;
}
header{ background-color:#0F3; width:1400px ; height: 150px;}
#header1{ background-color:#0FC; float:left; width:200px;height: 150px;}
#header2{ background-color: #936; float:left; width:1200px; height: 150px;}
    </style>
</head>
<body>
<div id="central">
    <header>
<div id="header1"><img src="php.jpg"/></div>
<div id="header2"><img src="webdesign1.jpg"</div>
    </header>
    
    <div id="center-contents-block">
        <div id="sidebar">
            <aside id="as1">
          <a href="arr_col.php">Array_Col</a>
          <a href="arr_diff.php">Array_Sec1</a>
          <a href="arr_sec2.php">Array_Sec2</a>
          <a href="arrsec3.php"> array sec3</a>
          <a href="arr_sec4.php"> array sec4</a>
          <a href="arr_sec5.php"> array sec5</a>
            </aside>
            <aside class="as2">
            <a href="Fun1.php"> Function Ex1</a>
            <a href="oop1.php"> OOP Ex1</a>
            </aside>  
            <aside class="as2">
           <a href="signup.html"> Sign Up Ex</a>
           <a href="form.php"> Form Ex</a>
            </aside> 
            <aside id="as3">
            <a href="file.php"> File Handling</a>
            <a href="cookies.php"> Cookies</a>
            <a href="session.php"> Cookies</a>
            </aside>     
        </div>
     <div id="main-contents">
        
		
<?php

if(!isset($_COOKIE["user"])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Hello ".$_COOKIE["user"]. "! <br>";
	echo "Your favourite color is ".$_COOKIE["color"].".<br>";
	echo "Your favourite car is ".$_COOKIE["car"].".";
}
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

?>



		
        </div>
    </div>
  </div> 
    <footer>
    Footer
    </footer>
</body>
</html>