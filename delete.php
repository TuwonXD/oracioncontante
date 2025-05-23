<?php
$conn=mysqli_connect("localhost","root","","oracioncontante");
$studentnum=$_GET['studentnum'];

$studentnum = mysqli_real_escape_string($conn, $studentnum); // optional: protects against SQL injection
$query = "DELETE FROM student WHERE studentnum='$studentnum'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>

<script>
    alert('Record Deleted!')
    window.location="index.php"
</script>