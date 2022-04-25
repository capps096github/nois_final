<?php
// Start the session
session_start();

// connect to the database, and then add students marks to the results table
if (isset($_POST['add_mark'])) {


  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // get lecturer_id from session
  $student_num = $conn->real_escape_string($_POST['student_num']);
  $student_mark = $conn->real_escape_string($_POST['student_mark']);

  // lecturer
  $lecturer_id = $_SESSION['lecturer_id'];

  // course unit
  // $course_unit = $_SESSION['course_unit'];
  $course_unit = $_SESSION["course_unit"];


  // check if the db is selected then add data to the db
  if ($conn->select_db('nois')) {

    // sql to add data to the table
    $sql = "INSERT INTO nois.results ( course_code, score, lecturer_id, student_number)
    VALUES ('$course_unit', '$student_mark', '$lecturer_id', '$student_num')";

    // check if the data is added to the table
    if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";

      // navigate to submit_results.php
      header("Location: submit_results.php");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
