<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="Stylesheet" href="css/index.css"/>
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
          <li><a href="index.php">Home</a></li>
          <li><a href="review.html"> Review</a></li>
        </ul>
      </div>
    </nav>
    <header>
      <h1>Welcome to Tutor Finder</h1>
    </header>
    <main>
      <section id="home">
        <h2>Become a Tutor Today!!!</h2>

        <div class="form-container">
          <form class="form-box" action="/Assignment1/index.php" method="post" enctype="multipart/form-data">
           <div class="form-container">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" required><br/><br/>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" required><br/><br/>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email"><br/><br/>
            <label for="password">Password</label>
            <input type="password" name="password" required><br/><br/>

            <div class="subjects">
                <label for="subjects"> Subjects:</label>
                <input type="checkbox" id="math" name="subjects[]" value="math">
                <label for="math"> Math</label><br>
                <input type="checkbox" id="english" name="subjects[]" value="english">
                <label for="english"> English</label><br>
                <input type="checkbox" id="science" name="subjects[]" value="science">
                <label for="science"> Science</label><br>
                <input type="checkbox" id="computer" name="subjects[]" value="computer">
                <label for="computer"> Computer</label><br><br>
            </div>
            <div class="experience">
                <label for="experience">Your experience:</label>
                <input type="number" id="experience" name="experience" min="1" max="70"> Year(s)
            </div>
            <br>
            <div class="rate">Your rate
                <label for="rate">($):</label>
                <input type="number" id="rate" name="rate" min="1" max="70"> per hour
            </div>
            <br>
            <div class="availability">
                <label for="availability">Your availability:</label><br>
                <textarea id="availability" name="availability" rows="4" cols="50" placeholder="Monday-Friday 5-8.00 pm">
                </textarea><br><br>
            </div>
              <br>
            <button class="button" type ="submit"><a href="review.php"></a><div class="submit-button">Submit</div></button>
        </form>
        </div>
    </section>
</main>
<br>
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

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $subjects = implode(",", $_POST['subjects']); // Convert subjects array to string
    $experience = $_POST['experience'];
    $rate = $_POST['rate'];
    $availability = $_POST['availability'];

    // Database Connectivity
    $servername="localhost";
    $username="root";
    $password="";
    $database="tutor_finder";

    // Creating a connection
    $conn=mysqli_connect($servername, $username, $password, $database);

    // Die if connection failed
    if(!$conn) {
        die("Sorry, connection failed!!".mysqli_connect_error());
    } else {
        echo "Connection Successful";
    }

    // Insert the form data into the database
    $sql="INSERT INTO tutors (fname, lname, email, password, subjects, experience, rate, availability) VALUES ('$fname', '$lname', '$email', '$password', '$subjects', '$experience', '$rate', '$availability')";
    
    if(mysqli_query($conn,$sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Data not inserted due to  ".mysqli_error($conn);
    }
}
?>

</body>
</html>

