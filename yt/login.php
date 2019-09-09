<html>
<body bgcolor="pink">
<?php
$emailErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$servername = "localhost";
		$username = "yethu";
		$password = "yethu";
		$dbname = "myDB";
$email=$_POST["email"];
$pass=$_POST["password"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
			if (!$conn) {
    				die("Connection failed: " . mysqli_connect_error());
					}
$sql = "SELECT * FROM signup WHERE email='$email'";
$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    			$sql = "SELECT password FROM signup WHERE email='$email'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row["password"]==$pass){header("Location: test .php");}
    }
} 
   			 }
		else {
   $emailErr="You /should Signup First";
				}
mysqli_close($conn);
	}
?>
<table><td>

You have already an account. 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Email:<input type="email" name="email" required checkspell="@gmail.com"><br>
   Password:<input type="password" name="password"  required align="right" ><br>
          
    <input type="submit" value="login" target="new"><?php echo $emailErr;?>
    <br>You have no account.Please
    <a href="signup.php" target="new">sign up</a>
    </form></td><td>

<img src="1.gif" ><img src="1.gif" ><img src="2.gif" ><img src="2.gif" ><img src="3.gif" ><img src="3.gif" ><img src="4.gif" ><img src="4.gif" >


</td></table>
</body>
</html>