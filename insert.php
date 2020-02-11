<?php
include 'db.php';
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['telephone'];
$ticket=$_SESSION['eventnm'];
$college=$_POST['college'];
$status="Unpaid";
$tid=$_POST['tid'];

$sql="INSERT INTO registration (name,email,contact,ticket,college,transaction_id,timestamp) Values('$name','$email','$phone','$ticket','$college','$tid',NOW())";

	if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registered successfully');</script>";
echo "<script>window.location.href='index.php'</script>"; 
} else {
	echo "<script>alert('Failed,Error: Use of special symbols like apostrophe not allowed, OR Transaction ID already present.');</script>";
    echo "<script>window.location.href='index.php'</script>";
}


$conn->close();
?>