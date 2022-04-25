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

// use the nois db
if ($conn->select_db('nois') === TRUE) {

  $student_number = $_SESSION['student_number'];
  $sql = "SELECT * FROM nois.cases WHERE cases.student_number = '$student_number' ORDER BY cases.case_no ASC";
  $result = $conn->query($sql);

  // row count
  $row_count = $result->num_rows;

  if ($row_count > 0) {

    //        table of results
    echo '<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-900 text-gray-900">
                    <!-- Heads -->
                    <thead class="bg-gray-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-orange-600 uppercase tracking-wider"
                            scope="col">
                            CASE
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-orange-600 uppercase tracking-wider"
                            scope="col">
                            CASE Tracking Number
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-orange-600 uppercase tracking-wider"
                            scope="col">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-orange-600 uppercase tracking-wider"
                            scope="col">
                            Course
                        </th>

                    </tr>
                    </thead>


                    <!-- Table Body -->
                    <tbody class="bg-gray-100 divide-y divide-gray-200">
                ';
    // table rows

    // output data of each row
    foreach ($result as $row) {
      $db_case_no = $row["case_no"];
      $db_case_status = $row["case_status"];
      $db_course_code = $row["course_code"];
      $db_student_number = $row["student_number"];

      // get the course name from the course code in the results table and compare it in the courses table
      $sql = "SELECT * FROM nois.courses WHERE courses.course_code = '" . $db_course_code . "'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          $db_course_name = $row["course_name"];
        }
      }


      // printf("%s (%s) - %s)\n", $db_course_code, $db_student_number, $db_course_name);

      echo '                   <tr>
                        <td class="px-6 py-4">
                            <p class="text-sm font-medium text-left text-gray-900">
                                  ' . $db_case_no . '.
                            </p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-xs text-gray-900 tracking-wider">
                               
                                  ' . $db_case_no . 'RCMS
                          
                                </p>
                        </td>';

      // check which status to display submitted, appealed,accepted,approved,result uploaded,resolved, rejected
      if ($db_case_status == "Submitted") {
        echo '<td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-900">
                                                    Submitted
                                                </span>
</td>';
      } else if ($db_case_status == "Appealed") {
        echo '  <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-orange-600">
                                                    Appealed
                                                </span>
                                            </td>';
      } else if ($db_case_status == "Accepted") {
        echo '  <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-900">
                                                    Accepted
                                                </span>
                                            </td>';
      } else if ($db_case_status == "Approved") {
        echo ' <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-900">
                                                    Approved
                                                </span>
                                            </td>';
      } else if ($db_case_status == "Result Uploaded") {
        echo ' <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-teal-100 text-teal-900">
                                                    Result Uploaded
                                                </span>
                                            </td>';
      } else if ($db_case_status == "Resolved") {
        echo '<td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-900">
                                                    Resolved
                                                </span>
                                            </td>';
      } else if ($db_case_status == "Rejected") {
        echo '  <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-900">
                                                    REJECTED
                                                </span>
                                            </td>';
      }
      // course
      echo  '  <td class="px-6 py-4 whitespace-nowrap text-sm ">
                                                           ' . $db_course_name . ' (' . $db_course_code . ')' . ' 

                        </td>

                    </tr>';
    }

    // close the table
    echo '   </tbody>


                </table>
            </div>
        </div>
    </div>
</div>       ';
  } else {
    //        No results
    echo '<div class="space-x-2 flex justify-center items-center mt-4 md:mt-0" title="NOIS | Student\'s Dashboard">
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
