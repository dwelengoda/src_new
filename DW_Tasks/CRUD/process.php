<?php
//what to do with the data
if (isset($_POST['submit'])) {
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $city= $_POST['city'];
    $groupid= $_POST['groupid'];
//connect to the database server
include 'db.php';
//write sql statement to insert data
$sql="insert into studentsinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";
    if($conn -> query($sql) === TRUE) {
        echo "New record added";
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn -> error;
  }
    $conn->close();
}
