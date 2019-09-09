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
          <a href="arr_diff.php">Array_Sec1</a>
          <a href="arr_sec2.php">Array_Sec2</a>
          <a href="arrsec3.php"> array sec3</a>
          <a href="arr_sec4.php"> array sec4</a>
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
		echo "Array Replace<br>";
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");
$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
?>

<?php
echo "Array Replace Recursive<br>";
$base = array('citrus' => array( "orange") , 
               'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 
                      'berries' => array('blueberry'));	
$basket = array_replace_recursive($base, $replacements);
print_r($basket);
echo "<br>";
$basket = array_replace($base, $replacements);
print_r($basket);
echo "<br>";
echo "<br>";

?>
<?php
echo "<br>";
$base = array('citrus' => array("orange") , 
              'berries' => array("blackberry", "raspberry"), 
			  'others' => 'banana' );
$replacements = array('citrus' => 'pineapple',
                      'berries' => array('blueberry'), 
					   'others' => array('litchis'));
$replacements2 = array('citrus' => array('pineapple'), 
                       'berries' => array('blueberry'), 
					   'others' => 'litchis');
$basket = array_replace_recursive($base, $replacements, $replacements2);
print_r($basket);
echo "<br>";
echo "<br> Array-Search";
echo "<br>";
$fruits = array(0 => 'Orange', 1=> 'Apple', 2 => 'Banana',3 => 'Cherry');  
$result = array_search ('Cherry', $fruits);  
echo "Found at $result";   
echo "<br>";
echo "<br> Array-Slice";
echo "<br>";
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

// note the differences in the array keys
print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));

echo "<br>";
echo "<br> Array-Splice";
echo "<br>";
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
// $input is now array("red", "green")
$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
// $input is now array("red", "yellow")
$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
// $input is now array("red", "green",
//          "blue", "black", "maroon")

$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 3, 1, "purple"));
//print_r(array_splice($input, 2, -1));
// $input is now array("red", "green",
//          "blue", "purple", "yellow");


	?>	
        </div>
    </div>
  </div> 
    <footer>
    Footer
    </footer>
</body>
</html>