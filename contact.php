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
  <link rel="stylesheet" href="css/contact.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
              <a class="nav-link mx-lg-2" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 active" href="contact.php">Contact</a>
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

  <div class="container mt-5">
    <div class="row g-2">
      <div class="col-lg-6">
        <div class="container" id="forms">
          <div class="register">
            <div class="container">
              <form action="contact.php" method="POST">
                <h1 class="text-center account">Create Account</h1>
                <div class="row g-2">
                  <div class="col">
                    <div class="mb-3">
                      <label for="fname" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="lname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name">
                    </div>
                  </div>
                </div>
                <div class="row g-2">
                  <label for="">Address</label>
                  <div class="col">
                    <div class="mb-3">
                      <select name="country" class="form-select" id="country">
                        <option value="" disabled selected>Choose Country</option>
                      </select>
                      <input type="hidden" class="form-control" name="country_text" id="country-text">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <select class="form-select" name="province" id="province">
                        <option value="" disabled selected>Choose State/Province</option>
                      </select>
                      <input type="hidden" class="form-control" name="province_text" id="province-text">
                    </div>
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col">
                    <div class="mb-3">
                      <select name="city" class="form-select" id="city">
                        <option value="" disabled selected>Choose City/Municipality</option>
                      </select>
                      <input type="hidden" class="form-control" name="city_text" id="city-text">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <select name="barangay" class="form-select" id="barangay">
                        <option value="" disabled selected>Choose Barangay</option>
                      </select>
                      <input type="hidden" class="form-control" name="barangay_text" id="barangay-text">
                    </div>
                  </div>
                </div>
                <div class="row g-3">
                  <div class="col">
                    <div class="mb-3">
                      <input type="text" class="form-control" id="lot" name="lot" placeholder="Blk/Lot">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <input type="text" class="form-control" id="street" name="street" placeholder="Street">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <input type="text" class="form-control" id="phase" name="phase" placeholder="Phase/Subdivision">
                    </div>
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col">
                    <label for="contact" class="form-label">Contact No.</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">+63</span>
                      <input type="text" class="form-control" id="contact" name="contact"
                        placeholder="Enter contact number">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email address">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="confirm" class="form-label">Repeat Password</label>
                      <input type="password" class="form-control" id="confirm" name="confirm">
                    </div>
                  </div>
                </div>
                <div class="mb-3 text-center">
                  <button type="submit" class="btn" name="register">Register</button>
                </div>
                <div class="mb-3 text-center">
                  <p>Already have an account? <span class="move" onclick="loginpage()">Log in now!</span></p>
                </div>
              </form>
            </div>
          </div>
          <div class="login">
            <div class="container">
              <form action="contact.php" method="POST">
                <h1 class="text-center signin">Sign in</h1>
                <div class="mb-3">
                  <label for="email_login" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email_login" placeholder="Enter email address">
                </div>
                <div class="mb-3">
                  <label for="password_login" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password_login">
                </div>
                <div class="mb-3 text-center">
                  <button type="submit" class="btn" name="login">Login</button>
                </div>
                <div class="mb-3 text-center">
                  <p>Don' have an account? <span class="move" onclick="signuppage()">Register now!</span></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-3 p-3">
          <form action="contact.php" method="POST">
            <h4 class="form-label message">Send me a message</h4>
            <textarea class="form-control border border-0" id="message" name="message" rows="8"></textarea>
            <button type="submit" class="btn float-end my-3" name="msg">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="container mt-2 d-flex justify-content-center">
    <?php
      // Check if the form is submitted for user registration
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
        // Retrieve form data
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $country = $_POST["country_text"];
        $province = $_POST["province_text"];
        $city = $_POST["city_text"];
        $barangay = $_POST["barangay_text"];
        $lot = $_POST["lot"];
        $street = $_POST["street"];
        $phase = $_POST["phase"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];
        $errors = array();

        // Validate fields
        if (empty($fname) || empty($lname) || empty($country) || empty($province) || empty($city) || empty($barangay) || empty($lot) || empty($street) || empty($phase) || empty($contact) || empty($email) || empty($password) || empty($confirm)) {
            $errors[] = "All fields are required. If not applicable, type N/A.";
        } else {
            // Validate contact number
            if (strlen($contact) !== 11) {
                $errors[] = "Contact number must be 11 digits.";
            }
            // Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
            }
            // Validate password
            if (strlen($password) < 8) {
                $errors[] = "Password must be 8 or more characters.";
            } elseif ($password !== $confirm) {
                $errors[] = "Passwords do not match.";
            }
        }

        // If there are no errors, proceed with registration
        if (empty($errors)) {
            // Hash the password
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            // Prepare SQL statement to insert data into the database
            $sql = "INSERT INTO users (fname, lname, country, province, city, barangay, lot, street, phase, contact, email, password) 
                    VALUES ('$fname', '$lname', '$country', '$province', '$city', '$barangay', '$lot', '$street', '$phase', '$contact', '$email', '$hashed')";

            // Execute the SQL statement
            if ($conn->query($sql) === TRUE) {
                // Registration successful
                $_SESSION["username"] = $fname;
                echo '<div class="alert alert-success" role="alert">Registration successful! You may now submit your message.</div>';
            } else {
                // Error in registration
                echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
            }
        } else {
            // Display validation errors
            foreach ($errors as $error) {
                echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
            }
        }
      }

      // Check if the form is submitted for user login
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
        // Retrieve form data
        $email = $_POST["email_login"];
        $password = $_POST["password_login"];
        $errors = array();

        // Check if email and password are provided
        if (empty($email) || empty($password)) {
            $errors[] = "All fields are required.";
        } else {
            // Check if the email exists in the database
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Email found, now retrieve the hashed password
                $row = $result->fetch_assoc();
                $hashedPassword = $row['password'];
                // Verify the password
                if (password_verify($password, $hashedPassword)) {
                    // Password is correct, proceed with login
                    $_SESSION["username"] = row['$fname'];
                    echo '<div class="alert alert-success" role="alert">Login successful! You may now submit your message.</div>';
                } else {
                    // Password is incorrect
                    $errors[] = "Incorrect password.";
                }
            } else {
                // Email not found
                $errors[] = "Email not found.";
            }
        }
        // Display errors, if any
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
            }
        }
      }

      // Check if the form is submitted for message submission
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["msg"])) {
        // Check if the user is logged in
        if (!isset($_SESSION["username"])) {
            // User is not logged in, display an error message
            echo '<div class="alert alert-danger" role="alert">Please register or log in to submit a message.</div>';
        } else {
            // User is logged in, proceed with message submission
            $message = $_POST["message"];
            $errors = array();
            if (empty($message)) {
                $errors[] = "Message should not be blank.";
            } else {
                if (strlen($message) > 255) {
                    $errors[] = "Message exceeded the maximum characters.";
                }
            }
            if (empty($errors)) {
                // Prepare SQL statement to insert message into the database
                $sql = "INSERT INTO messages (fname, message) VALUES ('" . $_SESSION["username"] . "', '$message')";

                // Execute the SQL statement
                if ($conn->query($sql) === TRUE) {
                    // Message submission successful
                    echo '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
                } else {
                    // Error in message submission
                    echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
                }
            } else {
                // Display validation errors
                foreach ($errors as $error) {
                    echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                }
            }
        }
      }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/address.js"></script>
    <script>
      const login = document.querySelector('.login');
      const signup = document.querySelector('.register');

      signuppage = () => {
        login.style.display = 'none';
        signup.style.display = 'flex';
      };
      loginpage = () => {
        signup.style.display = 'none';
        login.style.display = 'flex';
      };

      $(document).ready(function() {
        $(".alert").delay(2000).fadeOut("slow");
      });
    </script>
</body>

</html>