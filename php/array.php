<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$stu=array("ko ko","hla hla","Lin Lin");
echo "Students are ".$stu[0].", ".$stu[1]." and ".$stu[2].".";
$num=count($stu);
echo "There are $num students";
$marks=array("ko ko"=>89,"hla hla"=>90,"Lin Lin"=>87);
foreach ($marks as $name=>$mark)
{
	echo "$name got $mark <br>";
	}
?>
</body>
</html>