<?php
require_once './db/db_init.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Meta tags -->
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

  <body class="bg-gray-900" onload="goToHome()">
    <section class="h-screen">
      <!-- Main -->
      <main class="h-3/4 ">
        <!-- Logo and Name -->
        <div class="flex flex-col space-y-4 items-center justify-center h-screen">
          <!-- logo -->
          <div>
            <svg class="w-20 h-20 fill-blue-300 m-auto" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468" />
            </svg>
          </div>

          <!-- name -->
          <div class="text-center text-white/60">
            <h1 class="text-blue-300 text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl mx-auto">
              The Nois
            </h1>
            <h3 class="text-orange-600 text-2xl font-bold mt-2 tracking-tight">
              Results Complaints Management System
            </h3>
          </div>
        </div>
      </main>

        <!-- Footer -->
        <?php require_once  'footer.php'?>
    </section>


  </body>

</html>