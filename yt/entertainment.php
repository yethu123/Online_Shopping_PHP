<?php
session_start();
?><?php
if(!isset($_SESSION["user"]))
{echo "You have been logged out";}else
{echo '<html>
<body bgcolor="#99FF00"><center>
<embed src="Track 03.avi" controls  autoplay="false"></embed>Myogyi 1
<embed src="Track 04.avi" controls  autoplay="false"></embed>Myogyi 2<br>
<embed src="Track 05.avi" controls  autoplay="false"></embed>Myogyi 3
<embed src="Track 06.avi" controls  autoplay="false"></embed>Myogyi 5<br>
<embed src="Track 07.avi" controls  autoplay="false"></embed>Myogyi 6
<embed src="Track 08.avi" controls  autoplay="false"></embed>Myogyi 7<br>
<embed src="Track 09.avi" controls  autoplay="false"></embed>Myogyi 8
<embed src="Track 10.avi" controls  autoplay="false"></embed>Myogyi 9<br>
<embed src="Track 11.avi" controls  autoplay="false"></embed>Myogyi 10

<embed src="Track 12.avi" controls  autoplay="false"></embed>Myogyi 11
</body></body></center>
</html>';}
?>