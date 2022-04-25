<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>NOIS | Admin's Sign Up</title>

    <!-- CSS -->
    <link href="../../css/nois.css" rel="stylesheet" />

    <!-- JS -->
    <script src="../nois.js"></script>
</head>

<body class="bg-gray-900" onload="hideCourse()">
    <section class="flex flex-col justify-between h-screen space-y-10">
        <!-- Main Content -->
        <main class="mx-auto sm:max-w-4xl max-w-4xl px-4 sm:mt-5 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14">
            <div class="sm:text-center text-center items-center transition-colors duration-500 text-orange-600 hover:text-blue-300">


                <!-- Center Logo -->
                <div onclick="goToSplash()" title="The Nois" class="hover:cursor-pointer flex justify-center items-center mt-6 mb-10 text-blue-300
            hover:text-orange-600">
                    <svg class="fill-current w-24 h-24" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468" />
                    </svg>
                </div>

                <p class="text-2xl tracking-tight font-extrabold">
                    Let's fix Student's Results Together
                </p>

                <h2 class="text-3xl tracking-tight mt-4 font-extrabold sm:text-4xl md:text-5xl mx-auto">
                    Create a
                    <span class="text-blue-300 hover:text-orange-600 underline xl:inline">Nois Admin Account</span>
                    and We'll do this.
                </h2>


                <!-- Icon -->
                <div class="flex justify-center items-center mt-4 mb-4 transition-colors duration-300 text-blue-300
            hover:text-orange-600" title="NOIS ADMIN ACCOUNT">
                    <svg enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" class="fill-current w-24 h-24">
                        <g>
                            <rect fill="none" height="24" width="24" />
                        </g>
                        <g>
                            <g>
                                <path d="M17,11c0.34,0,0.67,0.04,1,0.09V6.27L10.5,3L3,6.27v4.91c0,4.54,3.2,8.79,7.5,9.82c0.55-0.13,1.08-0.32,1.6-0.55 C11.41,19.47,11,18.28,11,17C11,13.69,13.69,11,17,11z" />
                                <path d="M17,13c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4s4-1.79,4-4C21,14.79,19.21,13,17,13z M17,14.38c0.62,0,1.12,0.51,1.12,1.12 s-0.51,1.12-1.12,1.12s-1.12-0.51-1.12-1.12S16.38,14.38,17,14.38z M17,19.75c-0.93,0-1.74-0.46-2.24-1.17 c0.05-0.72,1.51-1.08,2.24-1.08s2.19,0.36,2.24,1.08C18.74,19.29,17.93,19.75,17,19.75z" />
                            </g>
                        </g>
                    </svg>
                </div>

            </div>


            <!-- Form div -->
            <div class="mt-10 justify-center items-center">
                <div class="max-w-xl mx-auto">
                    <form class="space-y-6" action="../auth/register/admin_register.php" method="post">

                        <!-- Admin ID -->
                        <label class="block mt-4">
                            <span class="block text-sm font-medium text-orange-600">Admin ID</span>

                            <input type="text" name="admin_id" placeholder="Your Admin ID e.g 5600707823UX, 5600707023UX, 5600702015UX" class="text-gray-900 mt-1 w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-orange-600 focus:ring-1 focus:ring-orange-600" required />
                        </label>

                        <!-- Roles -->
                        <label class="block mt-4 ">
                            <span class="block text-sm font-medium text-orange-600">Admin Role</span>

                            <!-- radios -->
                            <div class="m-4 space-x-3">
                                <!-- Lecturer -->
                                <label for="lecturer">
                                    <input class="text-orange-600 focus:ring-orange-500 border-gray-300" type="radio" name="role" id="lecturer" value="Lecturer" onclick="showCourse()" />

                                    <span class=" text-sm font-medium text-white">Lecturer</span>

                                </label>

                                <!-- Academic Registrar -->
                                <label for="ar">
                                    <input class="text-orange-600 focus:ring-orange-500 border-gray-300" type="radio" name="role" id="ar" value="Academic Registrar"  onclick="hideCourse()" />

                                    <span class=" text-sm font-medium text-white">Academic Registrar</span>
                                </label>

                                <!-- Head of Department -->
                                <label for="hod">
                                    <input class="text-orange-600 focus:ring-orange-500 border-gray-300" type="radio" name="role" id="hod" value="Head of Department" onclick="hideCourse()"/>

                                    <span class=" text-sm font-medium text-white">Head of Department</span>
                                </label>
                            </div>
                        </label>

                        <!--Courses Filter  -->
                        <label class="block mt-4" id="course">
                            <span class="block text-sm font-medium text-orange-600">Course You Teach:</span>

                            <div class="space-x-4 space-y-2 mt-2 items-center justify-center flex flex-col">
                                <!-- Course 1 -->
                                <select name="course_unit" class=" text-left font-bold bg-white rounded-lg focus:rounded-md  text-gray-900
                                     border-transparent border-collapse" id="1" title="Select a Course">
                                    <option value="none" selected>Course 1</option>
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


                        <!-- username -->
                        <label class="block items-center justify-center">
                            <span class="block text-sm font-medium text-orange-600">Username</span>

                            <input type="text" name="username" placeholder="Your Name e.g @cephas, @simon, @ankunda" class="text-gray-900 mt-1 w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-orange-600 focus:ring-1 focus:ring-orange-600" required />
                        </label>


                        <!-- email -->
                        <label class="block mt-4">
                            <span class="block text-sm font-medium text-orange-600">Email</span>

                            <input type="email" name="email" placeholder="Your Email e.g cephas@nois.edu, andante@yahoo.com, simon@gmail.com" class="text-gray-900 mt-1 w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-orange-600 focus:ring-1 focus:ring-orange-600" required />
                        </label>

                        <!-- Password -->
                        <label class="block mt-4">
                            <span class="block text-sm font-medium text-orange-600">Password</span>

                            <input type="password" name="password" id="password" placeholder="Your Password - Keep it Short, Secure and Secret" class="text-gray-900  mt-1 w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-orange-600 focus:ring-1 focus:ring-orange-600" required />
                        </label>

                        <!-- show -->
                        <div class="flex items-center">
                            <input id="show-me" name="show-me" type="checkbox" onclick="togglePassword()" class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded" />
                            <label for="show-me" class="ml-2 block text-sm text-white">
                                Show Password
                            </label>
                        </div>

                        <!-- Terms -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded" />
                                <label for="terms" class="ml-2 block text-sm text-white">
                                    By continuing, I accept the Nois Terms and Conditions
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" name="admin_signup" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm  font-bold rounded-md text-slate-900 bg-orange-600 hover:bg-blue-300 transition-colors duration-300">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="fill-current h-5 w-5" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" aria-hidden="true" d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468" />
                                </svg>
                            </span>
                            Sign Up
                        </button>

                        <div class="transition-colors duration-300">

                            <!-- Log in -->
                            <p class="tracking-tight text-orange-600 sm:mt-2 sm:text-lg md:mt-2 p-4 lg:mx-0 text-center border-b-2 border-dashed border-white hover:border-orange-500">
                                Have an account?
                                <span onclick="goToLogin('register')" class="font-extrabold text-blue-300 hover:cursor-pointer ml-2 underline hover:text-orange-500 hover:underline duration-300" title="Log In to your Account">
                                    Log In Instead.
                                </span>
                            </p>

                            <!-- Student -->
                            <p class="tracking-tight font-bold  text-blue-300 sm:mt-4 sm:text-lg md:mt-4 mt-4 lg:mx-0 text-center">
                                Student ?

                                <span onclick="goToStudentsReg()" class="hover:cursor-pointer  text-orange-600 ml-2 underline hover:text-orange-500 hover:underline
                  duration-300" title="Create a Student Account">
                                    Create a Student Account Instead.
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