<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <!-- Title -->
  <title>THE NOIS | Results Complaints Management System</title>

  <!-- CSS -->
  <link href="../css/nois.css" rel="stylesheet" />

  <!-- JS -->
  <script src="nois.js"></script>

</head>

<!-- Body -->

<body class="bg-blue-200">
  <section>
    <!-- Nav Bar -->
    <nav class="md:flex md:justify-between lg:flex lg:justify-between md:px-4 px-2 py-5 sticky top-0 left-0 right-0 bg-gray-900">
      <!-- Logo -->
      <span class="hover:cursor-pointer space-x-2 flex justify-center items-center mt-4 md:mt-0" title="NOIS">
        <div onclick="goToSplash('index')" class="flex text-orange-600 font-bold hover:text-white hover:underline items-center space-x-2">
          <svg class="fill-current w-10 h-10" width="24" height="24" viewBox="0 0 24 24">
            <path d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468" />
          </svg>

          <p class="">NOIS</p>
        </div>
      </span>

      <!-- Actions -->
      <div class="space-x-2 flex justify-center items-center mt-4 md:mt-0">
        <!-- Login -->
        <button onclick="goToLogin()" class="text-orange-600 hover:text-white hover:bg-orange-600 rounded-full font-semibold normal-case px-5 py-2 text-sm bg-transparent transition-all duration-300">
          <i class="fas fa-sign-in-alt"></i>
          <span>Login</span>
        </button>

        <!-- register -->
        <button onclick="goToRegister()" class="text-white hover:text-gray-900 hover:bg-white rounded-full font-semibold normal-case px-5 py-2 text-sm bg-orange-600 transition-colors duration-300">
          <i class="fas fa-user-plus"></i>
          <span>Get Started</span>
        </button>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="mx-auto sm:max-w-7xl max-w-6xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
      <div class="sm:text-center text-center items-center">
        <!-- Center Logo -->
        <div class="flex justify-center items-center mt-6 mb-10">
          <img src="../images/nois_gray_icon.svg" class="w-20 h-20" alt="The Nois Logo" />
        </div>

        <!-- Heading and a little description -->
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl mx-auto">
          <span class="text-orange-600 xl:inline">
            A Results Complaints Management System</span>
          Trusted by
          <span class="text-blue-700 underline xl:inline">thousands</span>
          of Students.
          <span class="mt-4 block text-blue-700 xl:inline"># Made with you in mind.</span>
        </h1>

        <!-- Description -->
        <p class="mt-10 text-base text-gray-900 sm:mt-10 sm:text-lg md:mt-10 md:text-xl lg:mx-0 text-center">
          Here's to what
          <span class="hover:text-blue-700 text-gray-900 font-bold underline">The Nois - Results Complaints Management
            System</span>
          has accomplished so far.
        </p>

        <!-- Dashboard -->
        <article class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-orange-600 bg-gray-900">
          <!-- grid -->
          <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
            <!-- Cases Resolved -->
            <div class="p-4 text-center items-center transition-colors border-orange-600 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-blue-300 hover:text-blue-300">
              <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
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

                // count those cases that are approved
                $sql = "SELECT COUNT(*) AS approved FROM nois.cases WHERE cases.case_status = 'Approved'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo $row["approved"];
                  }
                } else {
                  echo "0";
                }
                ?>


              </h2>

              <h3 class="font-bold">Cases Resolved</h3>
            </div>

            <!-- Cases submitted -->
            <div class="p-4 text-center items-center hover:border-blue-300 hover:text-blue-300 transition-colors border-orange-600 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
              <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">

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


                  // get the total count of cases 
                  $sql = "SELECT COUNT(*) AS total FROM nois.cases";
                  $result = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_assoc($result);
                  $total = $row['total'];

                  echo $total;
                }
                ?>


              </h2>

              <h3 class="font-bold">Cases Submitted</h3>
            </div>

            <!--CASES REJECTED  -->
            <div class="p-4 text-center items-center border-orange-600 border-r-0 md:border-r-2 lg:border-r-2 hover:border-blue-300 hover:text-blue-300 transition-colors">
              <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">

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

                // count those cases that are rejected
                $sql = "SELECT COUNT(*) AS rejected FROM nois.cases WHERE cases.case_status = 'Rejected'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo $row["rejected"];
                  }
                } else {
                  echo "0";
                }
                ?>
              </h2>

              <h3 class="font-bold">Cases Rejected</h3>
            </div>

            <!-- Average Time -->

            <div class="p-4 text-center items-center transition-colors hover:text-blue-300">
              <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
                <?php

                // loop throught all complaints, get the time difference between the date submitted and the date resolved and add it to a total then divide by the total number of complaints to return the average time

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


                // get all cases using sql
                $sql = "SELECT * FROM nois.cases";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // initialize the total time and total resolved cases variable
                  $total_time = 0;
                  $total_resolved = 0;

                  // count those cases that are approved
                  $sql = "SELECT COUNT(*) AS approved FROM nois.cases WHERE cases.case_status = 'Approved'";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                      $total_resolved = $row["approved"];
                    }
                  } else {
                    echo "0";
                  }

                  // 
                  // echo 'cases resolved =' . $total_resolved;

                  // loop through all the cases, getting the date submitted and date resolved and the difference between them is added to the $total_time variable
                  // count those cases that are approved
                  $sql_all = "SELECT * FROM nois.cases WHERE cases.case_status = 'Approved'";
                  $result_all = $conn->query($sql_all);

                  foreach ($result_all as $row) {
                    $date_submitted = $row['date_submitted'];
                    $date_resolved = $row['date_resolved'];

                    // echo '<br>' . 'date submit =' . $date_submitted;
                    // echo '<br>' . 'date resolve =' . $date_resolved;

                    $difference = strtotime($date_resolved) - strtotime($date_submitted);
                    $total_time = $total_time + $difference;
                  }

                  // echo '<br>' . 'total time =' . $total_time . '<br>';

                  // divide the total time by the total number of resolved cases to get the average time
                  $average_time = $total_time / $total_resolved;

                  // convert the average time to minutes
                  $average_time = $average_time / 60;

                  // round the average time to 2 decimal places and display it
                  echo round($average_time, 2);
                } else {
                  echo "0";
                }


                ?>
              </h2>

              <h3 class="font-bold">Average Time <br> (In Minutes)</h3>
            </div>
          </div>
        </article>

        <!-- Buttons -->
        <div class="mt-8">
          <!-- Get started button -->
          <button onclick="goToRegister()" class="inline-flex items-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-orange-600 hover:bg-orange-500 focus:outline-none transition-colors duration-300 ease-in-out">
            <span class="mr-3">Get Started</span>
            <svg class="h-5 w-5 text-white fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <?php require_once  'footer.php' ?>
  </section>
</body>

</html>