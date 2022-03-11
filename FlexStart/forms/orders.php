<?php


$conn = mysqli_connect("localhost","root","","orders");
mysqli_query($conn, "SELECT * FROM orders");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Taking all 5 values from the form data(input)
$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone =  $_REQUEST['phone'];
$ref = $_REQUEST['ref'];
$delivery = $_REQUEST['delivery'];
$date = $_REQUEST['date'];
$special = $_REQUEST['special'];


// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO orders  VALUES ('$name', 
            '$email','$phone','$ref','$delivery' ,'$date','$special')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Order Placed successfully admin will contact you soon</h3>";
    echo"Order details below Contact admin in case of any changes";

    echo nl2br("\n$name\n $email\n "
        . "$phone\n$ref \n$delivery\n $date \n$special");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
