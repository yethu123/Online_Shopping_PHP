
<?php
session_start();?>
<?php

if(!isset($_SESSION["user"]))
{echo "You have been logged out";}else
{echo '<html><body background="Fireweed_Alaska.jpg"><center>
<a href=" နီကိုရဲ လြယ္အိတ္ထဲကအလြဲမ်ား.pdf"><font color="#33CCCC">Nikoye</a><br>

<a href="1.pdf ">နီကိုရဲ လူႏွင့္သူတို႔၏ဟာသမ်ား.pdf<a><br>

<a href="  မင္းလူ က်မ္းကိုးစကား.pdf ">မင္းလူ က်မ္းကိုးစကား.pdf<a><br>
<a href="  မင္းလူ အနာဂတ္ကုမၸဏီ.pdf ">မင္းလူ အနာဂတ္ကုမၸဏီ.pdf<a><br>
<a href="  မင္းလူ-ေရတမာ.pdf ">မင္းလူ-ေရတမာ.pdf<a><br>
<a href="  မင္းလူ-ေခါငး္ေလာင္း ထိုးေသာ ၀တၱုတိုမ်ား.pdf ">မင္းလူ-ေခါငး္ေလာင္း ထိုးေသာ ၀တၱုတိုမ်ား.pdf<a><br>
<a href="   မင္းလူ အသံထြက္ကုထံုး.pdf">မင္းလူ အသံထြက္ကုထံုး.pdf<a><br>
</font>
</html></center>';}
?>