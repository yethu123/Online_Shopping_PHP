<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "yethu";
$password = "yethu";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO Customers(firstname, lastname, email,age,country)
VALUES ('John','Smith', 'js@example.com',47,Uk);";

$sql = "INSERT INTO Customers(firstname, lastname, email,age,country)
VALUES ('John','Smith', 'js@example.com',47,'Uk');";

$sql .= "INSERT INTO Customers(firstname, lastname, email,age,country)
VALUES ('Mary','Aung Zaw', 'mary@example.com',25,'Singapore');";

$sql .= "INSERT INTO Customers(firstname, lastname, email,age,country)
VALUES ('David','Jone', 'dj@example.com',20,'China');";
$sql .= "INSERT INTO Customers(firstname, lastname, email,age,country)
VALUES ('Yuki','Shar', 'yuki@example.com',33,'Japan');";
$sql .= "INSERT INTO Customers(firstname, lastname, email,age,country)
VALUES ('Brown','Doe', 'brown@example.com',23,'Germany');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>