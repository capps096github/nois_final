<?php
// Start the session
session_start();

// connect to the database, and then add students marks to the results table
if (isset($_POST['confirm_review'])) {


  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // use the nois db
  if ($conn->select_db('nois') === TRUE) {
    $sql = "SELECT * FROM nois.cases WHERE cases.case_status ='Accepted' OR cases.case_status='Submitted' ORDER BY cases.case_no ASC";
    $result = $conn->query($sql);

    // row count
    $row_count = $result->num_rows;

    if ($row_count > 0) {
      // get the values of the cells from the table in ar_complaints_table.php and store them in variables
      // output data of each row
      foreach ($result as $row) {
        $db_case_no = $row["case_no"];
        $db_case_status = $row["case_status"];
        $db_course_code = $row["course_code"];
        $db_student_number = $row["student_number"];
        $db_case_description = $row["case_description"];


        // get the value of the drop down edit_status
        $edit_status = $_POST['edit_status_' . $db_case_no];

        // get the current timestamp
        $timestamp = date("Y-m-d H:i:s");


        // printf("%s (%s) - %s) \n", $db_course_code, $db_student_number, $db_case_status);
        // echo "- Status: \n" . $edit_status;

        // update the status of the case in the cases table in the nois db by first checking if the status is different from the current status
        //  and also if the status is not empty ""
        if ($edit_status != $db_case_status && $edit_status != "") {
          // update the date_resolved and case_status 
          $sql = "UPDATE nois.cases SET date_resolved='$timestamp', case_status='$edit_status' WHERE case_no='$db_case_no'";

          // $sql = "UPDATE nois.cases SET case_status = '" . $edit_status . "' WHERE case_no = '" . $db_case_no . "'";
          $result = $conn->query($sql);

          // echo $result;
        }
      }

      // email the student after the status has been update
      // get the student details basing on their student number
      $sql = "SELECT * FROM nois.students WHERE students.student_number = '" . $db_student_number . "'";
      $result = $conn->query($sql);

      // output data of each row
      foreach ($result as $row) {
        $db_student_name = $row["username"];
        $db_student_email = $row["email"];


        // send the email
        $to = $db_student_email;
        $subject = "Case / Complaint Status Updated";
        $message = "Dear " . $db_student_name . ",\n\n" . "Your case / complaint status has been updated to " . $edit_status . ".\n\n" . "Regards,\n" . "Nois Team";
        $headers = "From: Nois - Results Marks Management System" . "\r\n" . "CC: Nois - Results Marks Management System";

        mail(
          $to,
          $subject,
          $message,
          $headers
        );
      }

      // navigate to ar_dashboard.php and exit
      header("Location: ar_dashboard.php");
      exit();
    } else {
      //        No results
      echo '<div class="space-x-2 flex justify-center items-center mt-6 md:mt-0" title="NOIS | Student\'s Dashboard">
       <div class="flex  font-bold text-gray-900 hover:underline items-center space-x-2">
           <svg class="fill-current w-10 h-10" width="24" height="24" viewBox="0 0 24 24">
            <path d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468"/>
            </svg>

        <p class="">' . $_SESSION["username"] . ',' .
        'You have not made any complaints as yet.</p>
       </div>
      </div>';
    }
  } else {
    // Error connecting to database
    echo "Error: " . $conn->error;
  }
}
