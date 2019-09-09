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
          <a href="arr_diff.php">Array_Diff</a>
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
        echo "<br><b> Array keys</b><br>";
$array1=array("Orange" => 100, "Apple" => 200, "Banana" => 300, "Cherry" => 400); 
print_r($array1);
echo "<br>";  
print_r(array_keys($array1));  
echo "<br>";
$array2=array("Orange","Apple","Banana","Apple");  
print_r($array2);
echo "<br>"; 
print_r(array_keys($array2,"Apple")); 
		
		echo "<br> array merging</br>";
		$array1=array("Subject" => "Physics","Chemistry", "Biology");  
$array2=array("Class-XI", "Class-XII", "Section"=>"A");  
print_r($array1);
echo "<br>"; 
print_r($array2); 
echo "<br>";
$result=array_merge($array1, $array2);  
print_r($result);


echo "<br>array multisort</br>";
$array1 = array(1,7,10,6);
$array2 = array(100,20,25,10);

array_multisort($array1, $array2);    
print_r($array1);
echo "<br>";    
print_r($array2);   
echo "<br>";
echo "<br>"; 
echo "<br>"; 
$array1 = array(array(1,"7",10,6,"Z"),array(100,20,"25",10,50));    
array_multisort($array1[0],SORT_ASC, SORT_STRING,$array1[1],SORT_NUMERIC, SORT_DESC);    

      
var_dump($array1);    
 
echo "Array Push & Pop";
  
$array1= array('Mathematics','Physics','Chemistry','Biology');  
$subject=array_pop($array1);  
print_r($array1);  
echo "<br>"; 
$array1= array('Mathematics','Physics');  
array_push($array1,'Chemistry','Biology');  
print_r($array1);  
echo "<br> Array-Rand<br>";
$array1= array('Mathematics','Physics','Chemistry','Biology');  
$rand_keys = array_rand($array1,2);  
echo $array1[$rand_keys[0]] . "\n";  
echo $array1[$rand_keys[1]] . "\n";  

?>  



?>


		
        </div>
    </div>
  </div> 
    <footer>
    Footer
    </footer>
</body>
</html>