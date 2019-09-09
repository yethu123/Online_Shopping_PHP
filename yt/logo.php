<?php
// Start the session
session_start();
if(!isset($_SESSION["user"]))
{echo "You have been logged out";}
else
{echo '<html>

<body bgcolor="pink">


<center><table><td><img src="1.gif" ><img src="1.gif" ><img src="1.gif" ><img src="2.gif" ><img src="2.gif" ><img src="3.gif" ><img src="3.gif" ><img src="4.gif" ><img src="4.gif" ></td><td bgcolor="#CC3366">
 <a href="logout.php" target="tt.php" ><font size=+3>log out</font></a>


</td></table></center>


</body>
</html>';}?>