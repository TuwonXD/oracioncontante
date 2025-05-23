<?php
$conn = mysqli_connect("localhost", "root", "", "oracioncontante");
$studentnum = $_GET['studentnum'];

$result = mysqli_query($conn, "SELECT * FROM student WHERE studentnum='$studentnum'");
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="post" action="edit_act.php">
        <input type="hidden" name="original_studentnum" value="<?php echo $row['studentnum']; ?>">
        Student Number: <input type="text" name="studentnum" value="<?php echo $row['studentnum']; ?>"><br><br>
        First Name:     <input type="text" name="fName" value="<?php echo $row['fName']; ?>"><br><br>
        Last Name:      <input type="text" name="lName" value="<?php echo $row['lName']; ?>"><br><br>
        Course:         <input type="text" name="course" value="<?php echo $row['course']; ?>"><br><br>
        Email:          <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
        Birthdate:      <input type="text" name="birthdate" value="<?php echo $row['birthdate']; ?>"><br><br>
        <input type="submit" value="UPDATE">
    </form>
</body>
</html>
