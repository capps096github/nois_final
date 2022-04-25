<?php
// Start the session
session_start();

// connect to the database, and then add students marks to the results table
if (isset($_POST['make_appeal'])) {


  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $appeal_description = $conn->real_escape_string($_POST['appeal_description']);
  $course_code = $conn->real_escape_string($_POST['course_code']);
  $student_number = $_SESSION['student_number'];

  // get the current date_submitted timestamp
  $date_submitted = date("Y-m-d H:i:s");

  // check if the db is selected then add data to the db
  if ($conn->select_db('nois')) {

    // sql to add data to the table	
    $sql = "INSERT INTO nois.cases (case_description,case_status, course_code, student_number,date_submitted)
    VALUES ('$appeal_description','Appealed', '$course_code', '$student_number', '$date_submitted')";


    // check if the data is added to the table
    if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";

      // navigate to add_complaint.php
      header("Location: make_appeal.php");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
