<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="cbcheck.php" method="post">
<input type="checkbox" name="data[cb1]" value="ShoeGallery"><label>$22</label>
<input type="checkbox" name="data[cb2]" value="Nike"><label>$22</label>

<input type="checkbox" name="data[cb3]" value="AllStar"><label>$22</label>
 <input type="submit" value="buy" onClick="confirm("are u sure")">
</form>
<?php
$_SESSION["shoe1"]="a";
$_SESSION["shoe2"]="a";
$_SESSION["shoe3"]="a";
?>
</body>
</html>