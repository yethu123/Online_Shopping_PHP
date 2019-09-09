
<?php
session_start();?>
<?php

if(!isset($_SESSION["user"]))
{echo "You have been logged out";}else
{echo '<html><body bgcolor="#3399FF">
<center>
<embed src="Big Bag - 01.mp3" controls autoplay="false">Big Bag - 01</embed>
<embed src="Big Bag - 02.mp3" controls autoplay="false">Big Bag - 02</embed><br>
<embed src="Big Bag - 03.mp3" controls autoplay="false">Big Bag - 03</embed>
<embed src="Big Bag - 04.mp3" controls autoplay="false">Big Bag - 04</embed><br>
<embed src="Big Bag - 05.mp3" controls autoplay="false">Big Bag - 05</embed>
<embed src="Big Bag - 06.mp3" controls autoplay="false">Big Bag - 06</embed><br>
<embed src="Big Bag - 07.mp3" controls autoplay="false">Big Bag - 07</embed>
<embed src="Big Bag - 09.mp3" controls autoplay="false">Big Bag - 09</embed><br>
<embed src="Big Bag - 10.mp3" controls autoplay="false">Big Bag - 10</embed>
<embed src="Big Bag - 11.mp3" controls autoplay="false">Big Bag - 11</embed><br></center>
</body>
</html>';}?>