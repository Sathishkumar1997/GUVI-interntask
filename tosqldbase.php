<?php
$first = $_POST['first'];
$last = $_POST['last'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$deg = $_POST['deg'];
$department = $_POST['department'];
$phone = $_POST['phone'];
if (!empty($first) || !empty($last) || !empty($dob) || !empty($gender) || !empty($email) || !empty($deg) ||
!empty($department) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "guvi2";
    $dbname = "guvi2";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (first, last, dob, gender, email, deg, department, phone) values(?, ?, ?, ?, ?, ? ,? ,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssissssi", $first, $last, $dob, $gender, $email, $deg, $department, $phone);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>