<?php
// Start the session
session_start();
?>



<frameset rows="20%,*">
<frame src="logo.php">
<frame src="subtest.php"></frameset><noframes></noframes>
<?php
$_SESSION["user"] = "someone";
?>



</html>