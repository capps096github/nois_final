// ?Auto Splash Function
function goToHome() {
  setTimeout(function () {
    location.href = "home.php";
  }, 1000);
}

// ? Go to Log in
function goToLogin(from) {
  switch (from) {
    case "register":
      location.href = "../login/login.php";

      break;

    default:
      location.href = "./login/login.php";
      break;
  }
}

// ? Go To Register Page
function goToRegister(from) {
  switch (from) {
    case "login":
      location.href = "../register/register.php";
      break;

    default:
      location.href = "./register/register.php";
      break;
  }
}

// ? Go to Index Page
function goToIndexPage() {
  location.href = "../home.php";
}

// ? GO to Splash Screen
function goToSplash(from) {
  switch (from) {
    case "index":
      location.href = "index.php";
      break;

    default:
      location.href = "../index.php";
      break;
  }
}

// * Go to Students Register
function goToStudentsReg() {
  location.href = "students_register.php";
}

// * Go to Admin Register
function goToAdminReg() {
  location.href = "admin_register.php";
}

// * Go to Students Register
function goToStudentsLogin() {
  location.href = "students_login.php";
}

// * Go to Admin Register
function goToAdminLogin() {
  location.href = "admin_login.php";
}

// THis toggles to show the password
function togglePassword() {
  var passwordField = document.getElementById("password");
  if (passwordField.type === "password") {
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}


// hide the course element
function hideCourse() {
  const course = document.getElementById("course");
  course.style.display = "none";
}

// hide the course element
function showCourse() {
  const course = document.getElementById("course");
  course.style.display = "block";
}


