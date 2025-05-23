<?php
$conn = mysqli_connect("localhost", "root", "", "oracioncontante");

$original_studentnum = $_POST['original_studentnum'];
$studentnum = $_POST['studentnum'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$course = $_POST['course'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];

$query = "UPDATE student SET 
    studentnum='$studentnum',
    fName='$fName',
    lName='$lName',
    course='$course',
    email='$email',
    birthdate='$birthdate'
    WHERE studentnum='$original_studentnum'";

mysqli_query($conn, $query);
?>

<script>
    alert("Record Updated!");
    window.location = "index.php";
</script>