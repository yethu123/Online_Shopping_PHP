<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?PHP
$servername = "localhost";
$username = "yethu";
$password = "yethu";
$dbname = "myDB";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{die("Connection failed:".mysqli_connect_error());}
$sql="CREATE TABLE Customers(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
Age  INT(3) NOT NULL,
country VARCHAR(22) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table Customers created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>