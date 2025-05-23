<?php
$conn=mysqli_connect("localhost","root","","oracioncontante");
$studentnum=$_POST['studentnum'];
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$course=$_POST['course'];
$email=$_POST['email'];
$birthdate=$_POST['birthdate'];

mysqli_query($conn, "INSERT INTO student VALUES ('$studentnum','$fName','$lName','$course','$email','$birthdate')");
?>

<script>
    alert("New Record Added!");
    window.location="index.php"
</script>