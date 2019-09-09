
<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="Napalievening - Copy.jpg"><center>

<?php
$session_size=count($_SESSION);
if(!isset($_SESSION["user"]))
{echo "You have been logged out";}else
{	$checked=$_POST["data"];
	foreach ($checked as $interest)
	{
		$_SESSION[$interest]=$interest;
		echo $_SESSION[$interest]."<br>";
	}
echo '
<form action="cart.php" method="post">

<input type="submit" value="Show All"/>
</form>
</body>
</html>';}
?></center>