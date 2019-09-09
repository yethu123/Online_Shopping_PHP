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
<div id="header1">Logo</div>
<div id="header2">Site's Name</div>
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
            <a href="array_funs.php"> Array Functions</a>
            <a href="cookies.php"> Cookies</a>
            </aside>     
        </div>
     <div id="main-contents">
        

<?php
$cookie_name = "user";
$cookie_value = "Ma Ma";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$myfile = fopen("webdevelopment.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
 echo "<br>";
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");

while(!feof($myfile)) {
  echo fgetc($myfile);
}
$txt = "Mg\n";
fwrite($myfile, $txt);
$txt = "Mya\n";
fwrite($myfile, $txt);

fclose($myfile);
?><br><br><form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


		
        </div>
    </div>
  </div> 
    <footer>
    Footer
    </footer>
</body>
</html>