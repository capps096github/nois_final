<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Title -->
    <title>Welcome to The Nois</title>

    <!-- CSS -->
    <link href="../../css/nois.css" rel="stylesheet"/>

    <!-- JS -->
    <script src="../nois.js"></script>
</head>

<body class="bg-gray-900">
<section class="flex flex-col justify-between h-screen space-y-10">
    <!-- Main Content -->
    <main class="mx-auto sm:max-w-6xl max-w-6xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <!-- Logo and Welcome text -->
        <div class="sm:text-center text-center items-center">
            <!-- Center Logo -->
            <div onclick="goToSplash()" title="The Nois"
                 class="hover:cursor-pointer flex justify-center items-center mt-6 mb-10 text-orange-600 hover:text-blue-300">
                <svg class="fill-current w-24 h-24" width="24" height="24" viewBox="0 0 24 24">
                    <path
                            d="M22.856 6.912c-1.36 5.26-6.115 9.959-12.541 12.443.977 1.273 4.071 3.382 5.837 3.892 4.578-1.691 7.848-6.081 7.848-11.247 0-1.821-.418-3.542-1.144-5.088m-15.224 6.699c.119 1.538.613 2.921 1.355 4.094 6.817-2.445 11.584-7.587 12.474-13.067-.824-1.058-1.818-1.975-2.946-2.706-1.437 6.91-7.647 10.345-10.883 11.679m-2.045-1.045c-1.216-1.41-2.604-2.484-5.347-2.96-.157.774-.24 1.574-.24 2.394 0 6.628 5.372 12 12 12 .496 0 .981-.039 1.461-.097-3.253-1.323-8.032-5.669-7.874-11.337m1.78-1.022c1.209-.534 2.74-1.34 4.222-2.485-2.185-2.84-5.239-4.997-8.252-5.349-1.085 1.133-1.946 2.478-2.522 3.968 3.384.647 5.127 2.152 6.552 3.866m-2.356-9.285c1.969-1.416 4.378-2.259 6.989-2.259 1.647 0 3.216.333 4.645.934-.45 2.861-1.835 5.102-3.537 6.793-2.105-2.675-5.203-4.78-8.097-5.468"/>
                </svg>
            </div>

            <!-- Heading and a little description -->
            <h1 class="text-4xl tracking-tight text-orange-600 font-extrabold sm:text-5xl md:text-6xl mx-auto">
                Welcome to

                <span onclick="goToIndexPage('register')"
                      class="text-blue-300 hover:cursor-pointer hover:text-orange-600 underline xl:inline">The Nois</span>
            </h1>

            <!-- Description -->
            <p class="mt-5 text-base text-blue-300 sm:mt-10 sm:text-lg md:mt-10 md:text-xl lg:mx-0 text-center">
                Create Account as:
            </p>
            <!-- student admin cards -->
        </div>

        <!-- A grid of 2 cards -->
        <div class="mt-10 md:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-2 sm:max-w-6xl max-w-6xl mx-auto grid">
            <!-- Student -->

            <article onclick="goToStudentsReg()"
                     class="hover:cursor-pointer bg-orange-600 rounded-lg p-10 transition-colors duration-300 hover:bg-blue-300">
                <div class="flex justify-center items-center mt-4 mb-4 text-gray-900">
                    <svg enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"
                         class="fill-current w-24 h-24">
                        <g>
                            <rect fill="none" height="24" width="24"/>
                        </g>
                        <g>
                            <g/>
                            <g>
                                <path
                                        d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.7,0-4.15,0.65-5.5,1.5V8c1.35-0.85,3.8-1.5,5.5-1.5c1.2,0,2.4,0.15,3.5,0.5V18.5z"/>
                                <g>
                                    <path
                                            d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.7,0-3.24,0.29-4.5,0.83v1.66 C14.13,10.85,15.7,10.5,17.5,10.5z"/>
                                    <path
                                            d="M13,12.49v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24 C15.8,11.66,14.26,11.96,13,12.49z"/>
                                    <path
                                            d="M17.5,14.33c-1.7,0-3.24,0.29-4.5,0.83v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26v-1.52 C19.21,14.41,18.36,14.33,17.5,14.33z"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <h2 class="text-4xl text-gray-900 text-center tracking-tight font-extrabold sm:text-5xl md:text-6xl">
                    Student
                </h2>

                <p class="text-gray-900 font-bold text-center mt-2">
                    For Freshers, Continuing Students & Finalists
                </p>
            </article>

            <!-- Admin -->
            <article onclick="goToAdminReg()"
                     class="hover:cursor-pointer p-10 bg-orange-600 rounded-lg transition-colors duration-300 hover:bg-blue-300">
                <div class="flex justify-center items-center mt-4 mb-4 text-gray-900">
                    <svg enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"
                         class="fill-current w-24 h-24">
                        <g>
                            <rect fill="none" height="24" width="24"/>
                        </g>
                        <g>
                            <g>
                                <path
                                        d="M17,11c0.34,0,0.67,0.04,1,0.09V6.27L10.5,3L3,6.27v4.91c0,4.54,3.2,8.79,7.5,9.82c0.55-0.13,1.08-0.32,1.6-0.55 C11.41,19.47,11,18.28,11,17C11,13.69,13.69,11,17,11z"/>
                                <path
                                        d="M17,13c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4s4-1.79,4-4C21,14.79,19.21,13,17,13z M17,14.38c0.62,0,1.12,0.51,1.12,1.12 s-0.51,1.12-1.12,1.12s-1.12-0.51-1.12-1.12S16.38,14.38,17,14.38z M17,19.75c-0.93,0-1.74-0.46-2.24-1.17 c0.05-0.72,1.51-1.08,2.24-1.08s2.19,0.36,2.24,1.08C18.74,19.29,17.93,19.75,17,19.75z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <h2 class="text-4xl text-gray-900 text-center tracking-tight font-extrabold sm:text-5xl md:text-6xl">
                    Admin
                </h2>

                <p class="text-gray-900 font-bold text-center mt-2">
                    For Lecturers, Head of Department, Academic Registrar
                </p>
            </article>
        </div>

        <!-- Have Account -->
        <div class="transition-colors duration-300">
            <!-- Log in -->
            <p
                    class="tracking-tight text-orange-600 sm:mt-2 sm:text-lg md:mt-2 p-4 lg:mx-0 text-center border-b-2 border-dashed border-white hover:border-orange-500">
                Have an account?
                <span onclick="goToLogin('register')"
                      class="font-extrabold text-blue-300 hover:cursor-pointer ml-2 underline hover:text-orange-500 hover:underline duration-300"
                      title="Log In to your Account">
              Log In Instead.
            </span>
            </p>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once  '../footer.php'?>
</section>
</body>

</html>