<!-- start session -->
<?php
session_start();
if (!isset($_SESSION["student_number"])) {
  header("Location: ../../login/students_login.php");
  exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- title -->
  <title>Make An Appeal</title>

  <!-- CSS -->
  <link href="../../../css/nois.css" rel="stylesheet" />
  <!-- JS -->
  <script src="../../nois.js"></script>
</head>

<body class="bg-blue-200">
  <section class="flex flex-col h-screen justify-between">
    <!-- Nav Bar -->
    <nav class="md:flex md:justify-between lg:flex lg:justify-between md:px-4 px-2 py-5 fixed top-0 left-0 right-0 bg-gray-900">
      <!-- back -->
      <a href="students_dashboard.php" class="duration-300 transition-colors flex md:justify-start lg:justify-start justify-center items-center space-x-2 text-white hover:text-orange-600 hover:no-underline hover:cursor-pointer">
        <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current w-5 h-5">
          <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
        </svg>

        <p class="text-sm font-bold">Back to Dashboard</p>
      </a>

      <!-- Logo -->
      <a href="" class="space-x-2 flex justify-center items-center mt-4 md:mt-0" title="NOIS | Student's Dashboard">
        <div class="flex text-orange-600 font-bold hover:text-white hover:underline items-center space-x-2">
          <svg class="fill-current w-10 h-10" width="24" height="24" viewBox="0 0 24 24">
            <path d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468" />
          </svg>

          <p class="">Make an appeal</p>
        </div>
      </a>


      <!-- User Icon -->
      <div>

      </div>
    </nav>

    <main class="md:mt-20 lg:mt-20 mt-60 p-4 space-y-4 max-w-5xl mx-auto">
      <h2 class="text-3xl text-gray-900 tracking-tight mt-4 mb-10 text-center font-extrabold sm:text-4xl md:text-5xl mx-auto">
        Not Satisfied with the review of your results?
        <span class="text-orange-600 underline xl:inline">Make an Appeal</span>
        Today.
      </h2>

      <!-- form -->
      <form class="md:mt-20 lg:mt-20 mt-60 p-4 space-y-4 max-w-3xl mx-auto" method="post" action="appeal.php">
        <div class="space-y-4">

          <!-- course drop down -->
          <label class="block mt-4">
            <span class="block text-sm font-medium text-gray-900">Course you want to Appeal:</span>

            <div class="space-x-4 space-y-2 mt-2 items-center justify-center flex flex-col">
              <select name="course_code" class=" text-left font-bold bg-white rounded-lg focus:rounded-md  text-gray-900
                             border-transparent border-collapse" id="1" title="Select a Course" required>
                <option value="-" selected>Course</option>
                <option value="CSC-113">Introduction to Computer Science XIII (CSC-113)</option>
                <option value="CSC-114">Introduction to Computer Science XIV (CSC-114)</option>
                <option value="CSC-115">Introduction to Computer Science XV (CSC-115)</option>
                <option value="CSC-116">Introduction to Computer Science XVI (CSC-116)</option>

                <option value="MTH-101">Introduction to Mathematics (MTH-101)</option>
                <option value="MTH-102">Calculus (MTH-102)</option>
                <option value="MTH-103">Algebra (MTH-103)</option>
                <option value="MTH-104">Geometry (MTH-104)</option>

                <option value="IST-101">Introduction to Information Systems (IST-101)</option>
                <option value="IST-102">Introduction to Programming (IST-102)</option>
                <option value="IST-103">Introduction to Computer Organization (IST-103)</option>
                <option value="IST-104">Introduction to Computer Networks (IST-104)</option>

                <option value="BIS-121">Introduction to Business Information Systems I (BIS-121)</option>
                <option value="BIS-122">Introduction to Business Information Systems II (BIS-122)</option>
                <option value="BIS-123">Introduction to Business Information Systems III (BIS-123)</option>
                <option value="BIS-124">Introduction to Business Information Systems IV (BIS-124)</option>
              </select>
            </div>
          </label>
        </div>


        <!-- appeal  -->
        <label class="block items-center justify-center">
          <span class="block text-sm font-medium text-gray-900">Appeal Description</span>
          <input type="text" name="appeal_description" placeholder="appeal Description. e.g. I have Missing Marks" class="text-gray-900 mt-1 w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-gray-900 focus:ring-1 focus:ring-gray-900" required />
        </label>
        </div>


        <!-- Make Appeal -->
        <div class="mt-6">
          <button type="submit" name="make_appeal" class="w-full bg-red-700 hover:bg-orange-600 transition-colors text-white font-bold py-2 px-4 rounded-md">
            Make Appeal
          </button>
        </div>
      </form>
    </main>

    <!-- Footer -->
    <?php require_once  '../../footer.php' ?>
  </section>
</body>

</html>