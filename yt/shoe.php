<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="d.jpg">
<?php
$session_size=count($_SESSION);
if(!isset($_SESSION["user"]))
{echo "You have been logged out";}else
{
echo '
<center>
Please select the shoe and
press the <b>buy </b>buttom to buy!
<form action="cblist.php" method="post" target="main">
<table>
<tr>
<td>
<img src="2 (1).gif">
<input type="checkbox" name="data[cb1]" Value="ShoeGallery">$22<br /></td>
 </td><td>
<img src=" 2 (2).gif">
 <input type="checkbox" name="data[cb2]" Value="Nike"/>$34<
 </td><td>
<img src="2 (3).gif">
<input type="checkbox" name="data[cb3]" Value="ShoeGallery1">$22
</td></tr></table>
<img src="2 (4).gif">
<input type="checkbox" name="data[cb4]" Value="Nike1"/>$34

<img src="2 (5).gif">
 <input type="checkbox" name="data[cb5]" Value="ShoeGallery2">$22

<img src="2 (6).gif">
<input type="checkbox" name="data[cb6]" Value="AllStar"/>$45
<br>
<img src="2 (7).gif">
 <input type="checkbox" name="data[cb7]" Value="ShoeGallery3">$22


<img src="2 (8).gif">
 <input type="checkbox" name="data[cb8]" Value="AllStar1"/>$45


<img src="2 (9).gif">
 <input type="checkbox" name="data[cb9]" Value="AllStar2"/>$45
<br>
<img src="2 (10).gif">
 <input type="checkbox" name="data[cb10]" Value="ShoeGallery4">$22

<img src="2 (11).gif">
 <input type="checkbox" name="data[cb11]" Value="AllStar3">$45
<img src="2 (12).gif"><br>
 <input type="checkbox" name="data[cb12]" Value="Nike2"/>$34
<img src="2 (13).gif">
<input type="checkbox" name="data[cb13]" Value="ShoeGallery5">$22
 <input type="submit" value="buy" >





</table>
</form>
<a href="shirt.php">Shirt</a><br>
<br>

</body>
</html>';}
?>