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
          <a href="arr_col.php">Array_Col</a>
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
$array1 = array("a" => "green", "red", "blue", "red","pink","white");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
print_r($result);
?>


		
        </div>
    </div>
  </div> 
    <footer>
    Footer
    </footer>
</body>
</html>