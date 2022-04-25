<?php
// Start the session
session_start();


if (isset($_POST['login_btn'])) {

    // sql
    $servername = "localhost";
    $username = "root";
    $password = "";


    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prevent SQL injection
    $student_number = $conn->real_escape_string($_POST['student_number']);
    $login_password = $conn->real_escape_string($_POST['login_password']);


    //  use the nois db
    if ($conn->select_db('nois') === TRUE) {
        // echo "Database selected";
        // check if a student with the student number exists
        // $sql = "SELECT * FROM students WHERE student_number = '$student_number';";
        $sql = "SELECT * FROM nois.students WHERE  students.student_number = '$student_number';";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $db_student_number = $row["student_number"];
                $db_username = $row["username"];
                $db_password = $row["passwordx"];
                $db_email = $row["email"];
                $db_first_course = $row["first_course"];
                $db_second_course = $row["second_course"];
            }
        } else {
            echo "Create an account first";
            // redirect to the login page
            header("Location: ../../login/login.php");
        }

        // check if the student number and password matches
        if ($student_number == $db_student_number && $login_password == $db_password) {
            // echo "Login Successful";

            // set the session variables
            $_SESSION['student_number'] = $db_student_number;
            $_SESSION['username'] = $db_username;
            $_SESSION['email'] = $db_email;

            // redirect to the student dashboard page
            header("Location: ../../dashboards/student/students_dashboard.php");
        
        exit();
        } else {
            echo "Login Failed";

            // redirect to the login page
            header("Location: ../../login/login.php");
        }


        $conn->close();

    } else {
        echo "Database not found";
        // redirect to the login page
        header("Location: ../../register/register.php");
    }


}






