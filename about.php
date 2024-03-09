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
  <link rel="stylesheet" href="css/about.css" />
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
              <a class="nav-link mx-lg-2 active" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="services.php">Services</a>
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

  <section class="about d-flex flex-column">
    <div class="container text-center p-3">
      <h1 class="title">About Us</h1>
      <p class="description">Eager to explore the realms of software development, cybersecurity, and more.</p>
    </div>
    <div class="container d-flex justify-content-center">
      <div class="row">
        <div class="col-lg-6">
          <div id="image">
            <img src="img/about1.png" class="img-fluid" alt="photo" id="pic">
          </div>
        </div>
        <div class="col-lg-6">
          <h2 class="heading">Coffee is a necessity in coding</h2>
          <p class="content">
            Meet Christian Grafil, a dedicated and aspiring software developer currently pursuing a Bachelor of Science
            in Information Technology with a specialization in Mobile and Internet Technology at National University -
            Fairview. As a sophomore based in Bulacan, Philippines, Christian is passionate about crafting innovative
            solutions in the digital realm. With a keen interest in mobile and internet technologies, he brings a fresh
            perspective to the world of software development. Explore Christian's journey and insights as he navigates
            the dynamic landscape of information technology.</p>
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