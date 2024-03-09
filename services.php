<?php
session_start();
// Include the database connection file
require_once "connect.php";
// Logout logic
if (isset($_GET["logout"])) {
  // Unset all session variables
  $_SESSION = array();

  // Destroy the session
  session_destroy();

  // Redirect to the home page or any other desired location after logout
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grafil's Playground</title>
  <link rel="stylesheet" href="css/services.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top fade-out">
    <div class="container-fluid">
      <img src="img/logo.png" alt="logo" class="img-fluid me-auto" id="logo">
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Grafil's Playground</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav align-items-start justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 active" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="?logout">Logout</a>
            </li>
            <li class="nav-item mt-1">
              <label id="mode" class="mt-2 mx-lg-2"></label>
            </li>
          </ul>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <section class="services">
    <div class="container p-3">
      <h1 class="title text-center mb-3">SERVICES</h1>
      <div class="row">
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <span class="d-flex justify-content-center"><i class='bx bxl-java'></i></span>
              <h5 class="card-title text-center">Java</h5>
              <p class="card-text">Java is a versatile, object-oriented programming language renowned for its
                portability and platform independence. It allows developers to write code that can run on various
                devices without modification.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <span class="d-flex justify-content-center"><i class='bx bxl-python'></i></span>
              <h5 class="card-title text-center">Python</h5>
              <p class="card-text">Python is a high-level, interpreted programming language celebrated for its
                simplicity and readability. Python promotes a clear and concise coding style, making it accessible for
                beginners and efficient for seasoned developers.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <span class="d-flex justify-content-center"><i class='bx bxl-html5'></i></span>
              <h5 class="card-title text-center">HTML 5</h5>
              <p class="card-text">HTML, or HyperText Markup Language, is the fundamental language for creating and
                structuring content on the World Wide Web. HTML provides a standardized way to design and organize
                information on web pages.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <span class="d-flex justify-content-center"><i class='bx bxl-css3'></i></span>
              <h5 class="card-title text-center">CSS 3</h5>
              <p class="card-text">CSS3, or Cascading Style Sheets Level 3, is the latest iteration of the CSS standard
                used in web development. It enhances the styling capabilities of HTML documents, CSS3 brings advanced
                features and improvements over its predecessors.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <span class="d-flex justify-content-center"><i class='bx bxl-javascript'></i></span>
              <h5 class="card-title text-center">JavaScript</h5>
              <p class="card-text">JavaScript is a versatile and dynamic programming language primarily employed for web
                development. It enhances the interactivity of websites by allowing developers to manipulate the content,
                modify the document structure, and respond to user actions.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <span class="d-flex justify-content-center"><i class='bx bxs-cog'></i></span>
              <h5 class="card-title text-center">Other</h5>
              <p class="card-text">Programming languages are formal systems designed for instructing computers to
                perform specific tasks. These languages provide a set of rules and syntax for creating software,
                enabling communication between humans and machines.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="js/navbar.js"></script>
</body>

</html>