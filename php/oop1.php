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
          <a href="arr_sec5.php"> array sec5</a>
            </aside>
            <aside class="as2">
            <a href="Fun1.php"> Function Ex1</a>
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
class Myclass  
{  
 public $font_size ="18px";  
 private $font_color = "blue";  
 public $string_name = "PHP Object Oriented"; 
  
 public function set_color($fcolor)
 {
	 $this->font_color=$fcolor;
	 }
	 
 public function customize_print()  
 {  
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_name."</p>";  
 }  
}  
$f = new MyClass;  

echo $f->customize_print();  
  
$f->font_size = "20px";  
$f->set_color("red");
$f->string_name = "Object Oriented Programming";  
echo $f->customize_print();  


// Define a class  
class Myclass2  
 {  
 // Declare a public method<br> 
 public function my_public_method()  
 
 {  
 echo "<br>This is a Public method<br>";   
 }   
 private function my_private_method()  
 {  
 echo "This is a Private method<br>";   
 }  
 protected function my_protected_method()  
 {  
 echo "This is a Protected method<br>";   
 }   
 // This is public  
 function test()  
 {  
 $this->my_public_method();  
 $this->my_private_method();  
 $this->my_protected_method();  
 }  
 }  
 $obj = new MyClass2;  
 $obj->my_public_method(); //Display This is a Public method  
// $obj->my_private_method();//Fatal error $obj>my_protected_method();//Fatal error 
 $obj->test(); //Display This is a Public methodThis is a Private methodThis is a Protected method  

class Myclass3  
 {  
private $font_size;  
 private $font_color;  
 private $string_value;  
function __construct($font_size,$font_color,$string_value)  
 {  
 $this->font_size = $font_size;  
 $this->font_color = $font_color;  
 $this->string_value = $string_value;  
 }  
function customize_print()  
 {  
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";  
 }   
 }  
$f = new MyClass3('20px','red','Object Oriented Programming');  
echo $f->customize_print();

class MyClass4  
{  
	public $name;
 function __construct()   
  {  
    echo 'PHPConstruct'.'<br>';  
    $this->name = "MyClass4";  
  }  
 function __destruct()   
  {  
     echo "Now Destroying " . $this->name . "<br>";  
  }  
}  
$obj = new MyClass4(); 

class Myclass5 
 {  
protected $font_size;  
 protected $font_color;  
 protected $string_value;  
function __construct($font_size,$font_color,$string_value)  
 {  
 $this->font_size = $font_size;  
 $this->font_color = $font_color;  
 $this->string_value = $string_value;  
 $this->customize_print();  
 }  
public function customize_print()  
 {  
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";  
 }   
 }  
class Mysubclass extends Myclass5 
 {  
  public function customize_print()  
 {  
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";text-decoration:underline;>".$this->string_value."</p>";  
 }  
 }  
$p = new Myclass5('20px','red','Object Oriented Programming');  
 $s = new Mysubclass('15px','green','Object Oriented Programming');
 
 class MyClass6 
{  
 public $x;  
 private $y;  
 function __construct($x, $y)  
 {  
  $this->   x = $x;  
  $this->   y = $y;  
 }  
 function __clone()  
 {  
  $this->x = "z";  
 }  
}  
$a = new MyClass6("PHP", "Object Oriented Programming"); // create a new object  
$b = clone $a; //clone of the object  
var_dump($a);  
echo '<br>';  
var_dump($b);


?>  




		
        </div>
    </div>
  </div> 
    <footer>
    Footer
    </footer>
</body>
</html>