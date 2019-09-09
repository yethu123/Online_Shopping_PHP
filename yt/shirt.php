<?php
// Start the session
session_start();
?>

<?php 
$session_size=count($_SESSION);
echo $session_size;
if(!isset($_SESSION["user"]))
{echo "You have been logged out";}else
{
echo '
<html><body background="MountainsOfGuilin - Copy.jpg"><center>

Please select the shirt and
press the <b>buy </b>buttom to buy!
<form action="cblist.php" method="post" target="main">
<table>
<tr>
<td>
<img src="1 (1).gif">
 <input type="checkbox" name="data[cb1]" Value="CNC1">CNC $22</td>
 </td><td>
<img src="1 (2).gif">
 <input type="checkbox" name="data[cb2]" Value="CNC2">CNC $22
 </td><td>
<img src="1 (3).gif">
 <input type="checkbox" name="data[cb3]" Value="IMax"/>IMax $44
</td></tr></table>
<img src="1 (4).gif">
<input type="checkbox" name="data[cb4]" Value="IMax2"/>IMax $44

<img src="1 (5).gif">
 <input type="checkbox" name="data[cb5]" Value="CNC3">CNC $22

<img src="1 (6).gif">
 <input type="checkbox" name="data[cb6]" Value="Giorando"/>Giorando $33
<br>
<img src="1 (7).gif">
 <input type="checkbox" name="data[cb7]" Value="Giorando1"/>Giorando $33


<img src="1 (8).gif">
<input type="checkbox" name="data[cb8]" Value="CNC4">CNC $22


<img src="1 (9).gif">
 <input type="checkbox" name="data[cb11]" Value="IMax3"/>IMax $44
<br>
<img src="1 (10).gif">
<input type="checkbox" name="data[cb12]" Value="Giorando2"/>Giorando $33

<img src="1 (11).gif">
 <input type="checkbox" name="data[cb13]" Value="IMax4"/>IMax $44
<img src="1 (12).gif"><br>
 <input type="checkbox" name="data[cb14]" Value="IMax5"/>IMax $44

<img src="1 (13).gif">
 <input type="checkbox" name="data[cb16]" Value="CNC5">CNC $22
 <input type="submit" value="buy" onClick="confirm("are u sure")">





</table>
</form>
<br>



<script type="text/javascript">
function confirm(){
	window.comfirm("are yoou sure")}</script></center>
</html>';
}
?>