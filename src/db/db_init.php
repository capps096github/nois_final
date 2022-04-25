<?php

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
$sql_db = "CREATE DATABASE IF NOT EXISTS nois;";

// create student table
$sql_students = "CREATE TABLE IF NOT EXISTS nois.students (
                      `student_number` INT(10) UNSIGNED PRIMARY KEY,
                      `username` VARCHAR(30) NOT NULL,
                      `passwordx` VARCHAR(30) NOT NULL,
                      `email` VARCHAR(30) NOT NULL,
                      `first_course` VARCHAR(30),
                      `second_course` VARCHAR(30)
                      );";

// create lecturer table
$sql_lecturers = "CREATE TABLE IF NOT EXISTS nois.lecturers (
                      `lecturer_id` VARCHAR(15)  PRIMARY KEY,
                      `username` VARCHAR(30) NOT NULL,
                      `passwordx` VARCHAR(30) NOT NULL,
                      `course_unit` VARCHAR(30),
                      `email` VARCHAR(30) NOT NULL
                      );";


// admin table
$sql_admins = "CREATE TABLE IF NOT EXISTS nois.admins (
                      `admin_id` VARCHAR(15) PRIMARY KEY,
                      `username` VARCHAR(30) NOT NULL,
                      `passwordx` VARCHAR(30) NOT NULL,
                      `email` VARCHAR(30) NOT NULL,
                      `admin_role` VARCHAR(30)
                      );";


// courses table
$sql_courses = "CREATE TABLE IF NOT EXISTS nois.courses (
                      `course_code` VARCHAR(10)  PRIMARY KEY,
                      `course_name` VARCHAR(256) NOT NULL,
                      `lecturer_id` VARCHAR(15) NOT NULL
                  --  FOREIGN KEY (lecturer_id) REFERENCES nois.admins(admin_id) 
                      );";


// results table
$sql_results = "CREATE TABLE IF NOT EXISTS nois.results (
                      `result_id` int(4) NOT NULL AUTO_INCREMENT,
                      `course_code` VARCHAR(10)  NOT NULL,
                      `score` INT(2) UNSIGNED NOT NULL,
                      `lecturer_id` VARCHAR(15) NOT NULL,
                      `student_number` INT(10) UNSIGNED NOT NULL,
                      PRIMARY KEY (`result_id`)
                      --   FOREIGN KEY (course_code) REFERENCES nois.courses(course_code) ,
                      -- FOREIGN KEY (lecturer_id) REFERENCES nois.admins(admin_id) ,
                      --   FOREIGN KEY (student_number) REFERENCES nois.students(student_number) 
                      );";


// get the current date_submitted timestamp
$date = date("Y-m-d H:i:s");

// cases table
$sql_cases = "CREATE TABLE IF NOT EXISTS nois.cases (
                      `case_no` int(4) NOT NULL AUTO_INCREMENT,
                      `case_description` VARCHAR(200) NOT NULL,
                      `case_status` VARCHAR(30) NOT NULL DEFAULT 'Submitted',
                      `course_code` VARCHAR(10) NOT NULL,
                      `student_number` INT(10) UNSIGNED NOT NULL,
                      `date_submitted` TIMESTAMP NOT NULL DEFAULT '$date',
                      `date_resolved` TIMESTAMP NOT NULL DEFAULT '$date',
                      -- `duration` INT(4) UNSIGNED NOT NULL,
                      PRIMARY KEY (`case_no`)
                      --  FOREIGN KEY (course_code) REFERENCES nois.courses(course_code) ,
                      --   FOREIGN KEY (admin_id) REFERENCES nois.admins(admin_id) ,
                      --   FOREIGN KEY (student_number) REFERENCES nois.students(student_number) 
                      );";

$sql_courses_data = "INSERT IGNORE INTO nois.courses
VALUES (
    'CSC-113',
    'Introduction to Computer Science XIII',
    '200070NOIS'
  ),(
    'CSC-114',
    'Introduction to Computer Science XIV',
    '200078NOIS'
  ),
  (
    'CSC-115',
    'Introduction to Computer Science XV',
    '200080NOIS'
  ),
  (
    'CSC-116',
    'Introduction to Computer Science XVI',
    '200088NOIS'
  ),
  (
    'BIS-121',
    'Introduction to Business Information Systems I',
    '145689NOIS'
  ),
  (
    'BIS-122',
    'Introduction to Business Information Systems II',
    '145690NOIS'
  ),
  (
    'BIS-123',
    'Introduction to Business Information Systems III',
    '145691NOIS'
  ),
  (
    'BIS-124',
    'Introduction to Business Information Systems IV',
    '145692NOIS'
  ),
  (
    'IST-101',
    'Introduction to Information Systems',
    '156000NOIS'
  ),
  (
    'IST-102',
    'Introduction to Programming',
    '156011NOIS'
  ),
  (
    'IST-103',
    'Introduction to Computer Organization',
    '156012NOIS'
  ),
  (
    'IST-104',
    'Introduction to Computer Networks',
    '156013NOIS'
  ),
  (
    'MTH-101',
    'Introduction to Mathematics',
    '180000NOIS'
  ),
  (
    'MTH-102',
    'Calculus',
    '184562NOIS'
  ),
  (
    'MTH-103',
    'Algebra',
    '184563NOIS'
  ),
  (
    'MTH-104',
    'Geometry',
    '184564NOIS'
  );";


// check db
if ($conn->query($sql_db) === TRUE) {

  //  use the nois db
  $conn->select_db('nois');

  //  create tables
  // student table
  $conn->query($sql_students);

  // admin table
  $conn->query($sql_admins);

  // admin table
  $conn->query($sql_lecturers);

  // courses
  $conn->query($sql_courses);

  // results
  $conn->query($sql_results);

  // cases
  $conn->query($sql_cases);

  // courses data
  $conn->query($sql_courses_data);

  //  close connection
  $conn->close();
} else {
  echo "Error creating database: " . $conn->error;
}
