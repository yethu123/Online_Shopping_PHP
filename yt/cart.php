<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="Napalievening - Copy.jpg"> <font color="#000033" size="+2"><center>

<?php
$price=array("CNC1"=>22,"CNC2"=>22,"CNC3"=>22,"CNC4"=>22,"CNC5"=>22,"Giorando"=>33,"Giorando1"=>33,"Giorando2"=>33,
"Giorando33"=>33,"IMax"=>44,"IMax2"=>44,"IMax3"=>44,"IMax4"=>44,"IMax5"=>44,"IMax6"=>44,"ShoeGallery"=>22,"Nike"=>45,"AllStar"=>34,"ShoeGallery1"=>22,"ShoeGallery2"=>22,"ShoeGallery3"=>22,"ShoeGallery4"=>22,"ShoeGallery5"=>22,"Nike1"=>45,"Nike2"=>45,"Nike3"=>45,"Nike4"=>45,"AllStar1"=>34,"AllStar2"=>34,"AllStar3"=>34,"AllStar4"=>34,);
$i=0; $total=0;
$session_size=count($_SESSION);
echo '<a href="main.php"> Home</a>';
if(!isset($_SESSION["user"]))
{echo "You have been logged out";}else
{
	echo "All you chose are <br>";
	foreach($_SESSION as $key=>$val)
		{
			if($val!="someone")
			{echo $val."   $".$price[$val]."<br>";
			$total+=$price[$val];}
		}
		echo "Total = $".$total;
		session_unset();

}


?>
</body></font></center>
</html>