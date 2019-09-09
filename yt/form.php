<!DOCTYPE html>
<html lang="en">
<head>
    <title>...</title>
    <link rel="stylesheet" href="../php/css/style.css" type="text/css">
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
          <a href="../php/arr_col.php">Array_Col</a>
          <a href="../php/arr_diff.php">Array_Sec1</a>
          <a href="../php/arr_sec2.php">Array_Sec2</a>
          <a href="../php/arrsec3.php"> array sec3</a>
          <a href="../php/arr_sec4.php"> array sec4</a>
          <a href="../php/arr_sec5.php"> array sec5</a>
            </aside>
            <aside class="as2">
            <a href="../php/Fun1.php"> Function Ex1</a>
            <a href="../php/oop1.php"> OOP Ex1</a>
            </aside>  
            <aside class="as2">
            aside
            </aside> 
            <aside id="as3">
            <a href="../php/cookies.php"> Cookies</a>
            </aside>     
        </div>
     <div id="main-contents">
     
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


   
		




		
        </div>
    </div>
  </div> 
    <footer>
    Footer
    </footer>
</body>
</html>