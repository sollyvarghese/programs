

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<?php
$conn =	new mysqli('localhost','root','root','mashup');
if($conn->connect_error)

{
	die("connection failed".$conn->connect_error);
}
$sql ="SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id:"  . $row["userid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"] ." "." email:" . $row["email"]."<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?> 



</body>
</html>
