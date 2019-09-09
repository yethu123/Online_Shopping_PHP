<?php
session_start();

if(!isset($_SESSION["user"]))
{echo "You have been logged out";}else
{echo '<html>

<frameset cols="18%,*">
<frameset rows="25%,25%,25%,*">
<frame src="a.php" >
<frame src="b.php">
<frame src="c.html">
<frame src="d.html">
</frameset><noframes></noframes>
<frameset>

<frame src="main.php" name="main">
</frameset>
</html>';}?>