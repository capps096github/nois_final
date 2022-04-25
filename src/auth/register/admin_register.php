<?php
// Start the session
session_start();


if (isset($_POST['admin_signup'])) {


    // check if the terms checkbox is checked
    if (isset($_POST['terms'])) {

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


        // check if a database called nois exists
        $sql = "CREATE DATABASE IF NOT EXISTS nois";

        if ($conn->query($sql) === TRUE) {
            // echo "Database created successfully";

            // prevent SQL injection
            $admin_id = $conn->real_escape_string($_POST['admin_id']);
            $username = $conn->real_escape_string($_POST['username']);
            $passwordx = $conn->real_escape_string($_POST['password']);
            $email = $conn->real_escape_string($_POST['email']);

            // roles
            $admin_role = $conn->real_escape_string($_POST['role']);

            // course unit for the lecturer
            $course_unit = $conn->real_escape_string($_POST['course_unit']);

            // echo $admin_id . "<br>" . $username . "<br>" . $passwordx . "<br>" . $email . "<br>" . $admin_role . "<br>";



            if ($conn->select_db('nois') === TRUE) {
                // echo "Table students created successfully";

                if ($admin_role == 'Lecturer') {

                    $sql_lecturer = "CREATE TABLE IF NOT EXISTS nois.lecturers (
                      `lecturer_id` VARCHAR(15)  PRIMARY KEY,
                      `username` VARCHAR(30) NOT NULL,
                      `passwordx` VARCHAR(30) NOT NULL,
                      `course_unit` VARCHAR(30),
                      `email` VARCHAR(30) NOT NULL
                      );";

                    if ($conn->query($sql_lecturer) === TRUE) {
                        //    insert data into the lecturers table
                        $sql_lecturer = "INSERT INTO  nois.lecturers (lecturer_id,username, passwordx, email, course_unit)
                            VALUES ('$admin_id', '$username', '$passwordx', '$email', '$course_unit')";


                        if ($conn->query($sql_lecturer) === TRUE) {
                            // echo "New record created successfully";  

                            // set new session variables from the data in the database i.e student_number, username, email
                            $_SESSION['admin_role'] = $admin_role;
                            $_SESSION['username'] = $username;
                            $_SESSION['course_unit'] = $course_unit;
                            $_SESSION['lecturer_id'] = $admin_id;


                            // navigate to a dashboard 
                            header("Location: ../../dashboards/lecturer/lecturer_dashboard.php");
                            exit();
                        } else {
                            echo "Error: " . $sql_lecturer . "<br>" . $conn->error;

                            header("Location: ../../login/admin_login.php");
                            exit();
                        }
                    } else {
                        echo "Error creating table: " . $conn->error;
                    }
                }
                // other admins AR, HOD
                else {
                    // create table if it doesn't exist
                    $sql = "CREATE TABLE IF NOT EXISTS  nois.admins (
                admin_id VARCHAR(15)  PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                passwordx VARCHAR(30) NOT NULL,
                email VARCHAR(30) NOT NULL,
                admin_role VARCHAR(30)
                );";

                    if ($conn->query($sql) === TRUE) {

                        $sql = "INSERT INTO  nois.admins (admin_id,username, passwordx, email, admin_role)
                        VALUES ('$admin_id','$username', '$passwordx', '$email', '$admin_role')";

                        if ($conn->query($sql) === TRUE) {
                            // echo "New record created successfully";  

                            // set new session variables from the data in the database i.e student_number, username, email
                            $_SESSION['admin_role'] = $admin_role;
                            $_SESSION['username'] = $username;
                            $_SESSION['admin_id'] = $admin_id;


                            if ($admin_role == 'Academic Registrar') {
                                header("Location: ../../dashboards/ar/ar_dashboard.php");
                            } else {
                                header("Location: ../../dashboards/hod/hod_dashboard.php");
                            }

                            exit();
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;

                            header("Location: ../../login/admin_login.php");
                            exit();
                        }
                    } else {
                        echo "Error creating table: " . $conn->error;
                    }
                }
            } else {
                echo "Error creating table: " . $conn->error;
            }
        } else {
            echo "Error creating database: " . $conn->error;
        }
        $conn->close();
    } else {
        echo "Please agree to the terms and conditions";
        header("Location: ../../register/admin_register.php");
    }
}
