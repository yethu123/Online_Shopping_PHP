<?php
session_start();
?>
<html><body bgcolor="pink"  background="b.jpg" autofocus="true">
<?php
$_SESSION["username"]="someone";
?>
<font size="+2"><center>shopping</font><br>
<font color="#CC6633">
<a href="shirt.php" target="main">shirt</a><br>
<a href="shoe.php" target="main">shoe</a></font></center>
</body>
</html>