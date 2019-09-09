<?php
setcookie("user", "", time() - 60,"/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>...</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
   

#sidebar {
    width : 200px;
    float : left;
	background-color: #F90;
}

#main-contents {
   /*width :1200px;*/
    float : left;
	background-color: #6CF ; width:770px; height: 415px;
	
}

#as1 {
    
    border-radius: 15px;
	background-color: #0CF;
	margin:20px; height:140px;
	
}
.as2 {
   
    border-radius: 15px;
	background-color: #0CF;
	margin:20px;
	height:70px;
}#as3 {
    
    border-radius: 15px;
	background-color: #0CF;
	margin:20px; 
	height:35px;
}
footer {
    clear : both;
	background-color:#0F3;
}
header{ background-color:#0F3; width:1400px ; height: 150px;}
#header1{ background-color:#0FC; float:left; width:200px;height: 150px;}
#header2{ background-color: #936; float:left; width:1200px; height: 150px;}
    </style>
</head>
<body>
<div id="central">
    <header>
<div id="header1">Logo</div>
<div id="header2">Site's Name</div>
    </header>
    
    <div id="center-contents-block">
        <div id="sidebar">
            <aside id="as1">
           <a href="array_funs.php"> Array Functions</a>
            </aside>
            <aside class="as2">
            aside
            </aside>  
            <aside class="as2">
            aside
            </aside> 
            <aside id="as3">
            aside
            </aside>     
        </div>
     <div id="main-contents">
        
		<?php
		echo "Deleted";
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Moe',
    'last_name' => 'Theingi Zaw',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Hla',
    'last_name' => 'Yamin',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Sai',
    'last_name' => 'Nanda',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>

		
        </div>
    </div>
  </div> 
    <footer>
    Footer
    </footer>
</body>
</html>