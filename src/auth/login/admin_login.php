<?php
// Start the session
session_start();


if (isset($_POST['admin_login'])) {

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
    $admin_id = $conn->real_escape_string($_POST['login_admin_id']);
    $login_password = $conn->real_escape_string($_POST['login_admin_password']);

    // roles
    $admin_role = $conn->real_escape_string($_POST['role']);

    // echo $admin_id . "<br>" . $passwordx . "<br>" . $admin_role . "<br>";


    //  use the nois db
    if ($conn->select_db('nois') === TRUE) {

        if ($admin_role == 'Lecturer') {

            // echo "Database selected";
            // check if a student with the student number exists
            $sql = "SELECT * FROM  nois.lecturers  WHERE  lecturers.lecturer_id = '$admin_id';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $db_lecturer_id = $row["lecturer_id"];
                    $db_password = $row["passwordx"];
                    $db_email = $row["email"];
                    $db_username = $row["username"];
                    $db_course_unit = $row["course_unit"];
                }
            } else {
                echo "Create an account first";
                // redirect to the login page
                header("Location: ../../login/login.php");
            }

            // check if the student number and password matches
            if ($admin_id == $db_lecturer_id && $login_password == $db_password) {
                // echo "New record created successfully";  

                // set new session variables from the data in the database i.e student_number, username, email
                $_SESSION['admin_role'] = $admin_role;
                $_SESSION['username'] = $db_username;
                $_SESSION['course_unit'] = $db_course_unit;
                $_SESSION['lecturer_id'] = $admin_id;


                // navigate to a dashboard 
                header("Location: ../../dashboards/lecturer/lecturer_dashboard.php");
                exit();
            } else {
                echo "Login Failed";

                // redirect to the login page
                header("Location: ../../login/login.php");
            }
        } else {


            // echo "Database selected";
            // check if a student with the student number exists
            $sql = "SELECT * FROM  nois.admins AS AD WHERE  AD.admin_id = '$admin_id';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $db_admin_id = $row["admin_id"];
                    $db_password = $row["passwordx"];
                    $db_admin_role = $row["admin_role"];
                    $db_email = $row["email"];
                    $db_username = $row["username"];
                }
            } else {
                echo "Create an account first";
                // redirect to the login page
                header("Location: ../../login/login.php");
            }

            // check if the student number and password matches
            if ($admin_id == $db_admin_id && $login_password == $db_password && $admin_role == $db_admin_role) {
                // echo "Login Successful";

                // set the session variables
                $_SESSION['admin_id'] = $db_admin_id;
                $_SESSION['username'] = $db_username;
                $_SESSION['email'] = $db_email;
                $_SESSION['admin_role'] = $db_admin_role;

              if ($admin_role == 'Academic Registrar') {
                    header("Location: ../../dashboards/ar/ar_dashboard.php");
                } else {
                    header("Location: ../../dashboards/hod/hod_dashboard.php");
                }

                exit();
            } else {
                echo "Login Failed";

                // redirect to the login page
                header("Location: ../../login/login.php");
            }
        }

        $conn->close();


    } else {
        echo "Database not found";
        // redirect to the login page
        header("Location: ../../register/register.php");
    }
}
