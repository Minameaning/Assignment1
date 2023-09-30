<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="Stylesheet" href="css/review.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Tutor Finder</title>
  </head>
  <body>
    <nav class="navbar-box">
      <div class="navbar">
        <div>
          <!-- logo and brand name -->
          <a href="index.php"><img class="Tlogo" src="image/T_logo.png" alt="Tlogo"/></a>
          <h1 class="Brand">Tutorian</h1>
        </div>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="review.html"> Review</a></li>
        </ul>
      </div>
    </nav>
    <header>
      <h1>TUTOR INFORMATION</h1>
    </header>
    <main>
      <section id="home">
      <div class="info">
    <table id="tutor-info">

<?php

$servername="localhost";
$username="root";
$password="";
$database="tutor_finder";

//creating a connection
$conn=mysqli_connect($servername, $username, $password, $database);

//die if connection failed
if(!$conn) {
   die("connection failed" .mysqli_connect_error());
} else {
    echo "Submit Successfully";
}

$sql="SELECT * FROM `tutors`";
$result=mysqli_query($conn,$sql);

//find number of record in the table
$num=mysqli_num_rows($result);
echo "<p>Total of tutors: " . $num . "</p>";

echo "<tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-mail</th>
        <th>Subjects</th>
        <th>Experience</th>
        <th>Rate ($) </th>
        <th>Availability</th>
      </tr>";

while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" .$row['subjects'] . "</td>";
    echo "<td>" .$row['experience']. "</td>";
    echo "<td>" .$row['rate']. "</td>";
    echo "<td>" .$row['availability']. "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</div>
</div>
</div>
<footer id="contact">
            <div class="footer-container">
              <div class="row">
                <div class="contact-info">
                  <h5 class="contactUs">Contact Us</h5>
                  <ul class="f-address">
                    <li>
                      <div class="row">
                        <div class="col-1"></div>
                          <h6 class="font-weight-bold mb-0"> <i class="fa-solid fa-envelope"></i> Have any questions?</h6>
                          <p>Support@gmail.com</p>
                        </div>
                    </li>
                    <li>
                      <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                          <h6 class="font-weight-bold mb-0"><i class="fa-solid fa-phone"></i> Phone:</h6>
                          <p>+123456789</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <p class="footer-copyright">© 2023 Tutor Finder. All rights reserved.</p>
    </footer>
</body>
</html>
