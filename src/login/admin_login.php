<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>NOIS | Admin's Login</title>
    <!-- CSS -->
    <link href="../../css/nois.css" rel="stylesheet" />

    <!-- JS -->
    <script src="../nois.js"></script>
</head>

<body class="bg-gray-900">
    <section class="flex flex-col justify-between h-screen space-y-10">
        <!-- Main Content -->
        <main class="mx-auto sm:max-w-4xl max-w-4xl px-4 sm:mt-5 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14">
            <div class="sm:text-center text-center items-center transition-colors duration-500 text-orange-600 hover:text-blue-300">
                <!-- Center Logo -->
                <div onclick="goToSplash()" title="The Nois" class="hover:cursor-pointer flex justify-center items-center mt-6 mb-10 text-blue-300 hover:text-orange-600">
                    <svg class="fill-current w-24 h-24" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468" />
                    </svg>
                </div>

                <p class="text-2xl tracking-tight font-extrabold">
                    We're glad you're here :-)
                </p>

                <h2 class="text-3xl tracking-tight mt-4 font-extrabold sm:text-4xl md:text-5xl mx-auto">
                    Continue with your
                    <span class="text-blue-300 hover:text-orange-600 underline xl:inline">Nois Admin Account Details</span>
                    to Login
                </h2>

                <!-- Icon -->
                <div class="flex justify-center items-center mt-4 mb-4 transition-colors duration-300 text-blue-300 hover:text-orange-600" title="NOIS STUDENT'S ACCOUNT">
                    <svg enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" class="fill-current w-24 h-24">
                        <g>
                            <rect fill="none" height="24" width="24" />
                        </g>
                        <g>
                            <g />
                            <g>
                                <path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.7,0-4.15,0.65-5.5,1.5V8c1.35-0.85,3.8-1.5,5.5-1.5c1.2,0,2.4,0.15,3.5,0.5V18.5z" />
                                <g>
                                    <path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.7,0-3.24,0.29-4.5,0.83v1.66 C14.13,10.85,15.7,10.5,17.5,10.5z" />
                                    <path d="M13,12.49v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24 C15.8,11.66,14.26,11.96,13,12.49z" />
                                    <path d="M17.5,14.33c-1.7,0-3.24,0.29-4.5,0.83v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26v-1.52 C19.21,14.41,18.36,14.33,17.5,14.33z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>

            <!-- Form div -->
            <div class="mt-10 justify-center items-center">
                <div class="max-w-xl mx-auto">
                    <form class="space-y-6" action="../auth/login/admin_login.php" method="post">

                        <!-- Admin ID -->
                        <label class="block mt-4">
                            <span class="block text-sm font-medium text-orange-600">Admin ID</span>
                            <input type="text" name="login_admin_id" placeholder="Your Admin ID e.g 5600707823UX, 5600707023UX, 5600702015UX" class="text-gray-900 mt-1 w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-orange-600 focus:ring-1 focus:ring-orange-600" required />
                        </label>

                        <!-- Roles -->
                        <label class="block mt-4 ">
                            <span class="block text-sm font-medium text-orange-600">Admin Role</span>

                            <!-- radios -->
                            <div class="m-4 space-x-3">
                                <!-- Lecturer -->
                                <label for="lecturer">
                                    <input class="text-orange-600 focus:ring-orange-500 border-gray-300" type="radio" name="role" id="lecturer" value="Lecturer" />

                                    <span class=" text-sm font-medium text-white">Lecturer</span>

                                </label>

                                <!-- Academic Registrar -->
                                <label for="ar">
                                    <input class="text-orange-600 focus:ring-orange-500 border-gray-300" type="radio" name="role" id="ar" value="Academic Registrar" />

                                    <span class=" text-sm font-medium text-white">Academic Registrar</span>
                                </label>

                                <!-- Head of Department -->
                                <label for="hod">
                                    <input class="text-orange-600 focus:ring-orange-500 border-gray-300" type="radio" name="role" id="hod" value="Head of Department" />

                                    <span class=" text-sm font-medium text-white">Head of Department</span>
                                </label>
                            </div>
                        </label>

                        <!-- Password -->
                        <label class="block mt-4">
                            <span class="block text-sm font-medium text-orange-600">Password</span>
                            <input type="password" name="login_admin_password" id="password" placeholder="Your Password - Keep it Short, Secure and Secret" class="text-gray-900 mt-1 w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-orange-600 focus:ring-1 focus:ring-orange-600" required />
                        </label>

                        <!-- show -->
                        <div class="flex items-center">
                            <input id="show-me" name="show-me" type="checkbox" onclick="togglePassword()" class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded" />
                            <label for="show-me" class="ml-2 block text-sm text-white">
                                Show Password
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" name="admin_login" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-md text-slate-900 bg-orange-600 hover:bg-blue-300 transition-colors duration-300">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="fill-current h-5 w-5" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" aria-hidden="true" d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468" />
                                </svg>
                            </span>
                            Login
                        </button>

                        <div class="transition-colors duration-300">
                            <!-- Log in -->
                            <p class="tracking-tight text-orange-600 sm:mt-2 sm:text-lg md:mt-2 p-4 lg:mx-0 text-center border-b-2 border-dashed border-white hover:border-orange-500">
                                Don't have an account?
                                <span onclick="goToRegister('login')" class="font-extrabold text-blue-300 hover:cursor-pointer ml-2 underline hover:text-orange-500 hover:underline duration-300" title="Create a Nois Account">
                                    Create one here.
                                </span>
                            </p>

                            <!-- Student -->
                            <p class="tracking-tight font-bold text-blue-300 sm:mt-4 sm:text-lg md:mt-4 mt-4 lg:mx-0 text-center">
                                Student ?
                                <span onclick="goToStudentsLogin()" class="hover:cursor-pointer text-orange-600 ml-2 underline hover:text-orange-500 hover:underline duration-300" title="Log In as Admin">
                                    Log In as Student Instead.
                                </span>
                            </p>
                        </div>

                        <!-- end -->
                    </form>
                </div>
            </div>
        </main>

      

        <!-- Footer -->
        <?php require_once  '../footer.php' ?>
      
    </section>
</body>

</html>