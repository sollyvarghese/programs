<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
$conn = new mysqli('localhost', 'root', 'root', 'mashup');
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}   
if ($_POST) 
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    
   
        $sql = "UPDATE registration SET( firstname, lastname, email) WHERE userid =4 ";
        VALUES ('$firstname', '$lastname', '$email')";
        if ($conn->query($sql) === TRUE) 
        {

                echo "update successfully ";
        }
       else
       {
        echo "error: " . $sql . "<br>" . $conn->error;

       }
   }
          
?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
FirstName: <input type="text" name="firstname" placeholder="YOUR FIRSTNAME"><br><br>
Lastname: <input type="text" name="lastname" placeholder="YOUR LASTNAME"><br><br>
email: <input type="text" name="email" placeholder="EMAIL"><br><br>
<input type="submit" value="UPDATE">
</form>
</body>
</html>
