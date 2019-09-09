<html>

<body bgcolor="#669999">
<?php 
$fname=$lname= $email =$password=$phno= "";
$fnameErr= $lnameErr=$phnoerr=$passErr="";
$check=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
     	$ffname = test_input($_POST["fname"]);
    	 // check if name only contains letters and whitespace
    	 if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
       	$fnameErr = "Only letters and white space allowed";$check=0; }
      
	  	$llname = test_input($_POST["lname"]);
     	// check if name only contains letters and whitespace
     	if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
       	$lnameErr = "Only letters and white space allowed"; $check=0;}
  
     	$eemail = $_POST["email"];
     
     	$qpassword = test_input($_POST["password"]);
  		 if	($qpassword!=test_input($_POST["repassword"]))
   		{
	  		 $passErr="Password MisMatch";$check=0;
	  	 }
	   $qphno=$_POST["phno"];
	  if($check){
$servername = "localhost";
$username = "yethu";
$password = "yethu";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO signup(fname, lname, email,password,phno)
VALUES ('$ffname', '$llname','$eemail','$qpassword','$qphno')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


}
	}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<pre>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Firstname       :<input type="text" name="fname" required ><?php echo $fnameErr;?><br>
Lastname        :<input type="text" name="lname" required><?php echo $lnameErr;?><br>
Email           :<input type="email" name="email" required checkspell="@gmail.com"><br>

Password        :<input type="password" name="password" required minlegth="5"> <?php echo $passErr;?><br>
Reenterpassword:<input type="password" name="repassword" required ><br>


Phno           :<input type="tel" name="phno">
                <input type="submit"  value="sign up"  autofocus color="green"  >
</form>


<?php

?>


</body>
</html>