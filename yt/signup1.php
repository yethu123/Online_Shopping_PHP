<html>
<head></head>
<body bgcolor="#669999">
<?php 
$fname=$lname= $email =$password=$phno= "";
$fnameErr= $lnameErr=$phnoerr=$passErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
     	$fname = test_input($_POST["fname"]);
    	 // check if name only contains letters and whitespace
    	 if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
       	$fnameErr = "Only letters and white space allowed"; }
      
	  	$lname = test_input($_POST["lname"]);
     	// check if name only contains letters and whitespace
     	if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
       	$lnameErr = "Only letters and white space allowed"; }
  
     	$email = test_input($_POST["email"]);
     
     	$password = test_input($_POST["password"]);
  		 if	($password!=test_input($_POST["repassword"]))
   		{
	  		 $passErr="Password MisMatch";
	  	 }
	   $phno=$_POST["phno"];
	  echo "Saved ";
	}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<pre>
<!--<form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Firstname       :<input type="text" name="fname" required ><?php //echo $fnameErr;?><br>
Lastname        :<input type="text" name="lname" required><?php //echo $lnameErr;?><br>
Email           :<input type="email" name="email" required checkspell="@gmail.com"><br>

Password        :<input type="password" name="password" required minlegth="5"> <?php// echo $passErr;?><br>
Reenterpassword:<input type="password" name="repassword" required ><br>


Phno           :<input type="tel" name="phno">
                <input type="submit"  value="sign up"  autofocus color="green"  >
</form>


-->
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

</body>
</html>