<?php
  $visitor  = $_GET['visitor'];
  $destination_email = "jlb2886@rit.edu";
  $email_subject = "(2109) iSchool Madrid, MI-Your last name, firtname  Baker, Julianna";
  $email_body = "Visitor name  $visitor\n";
  mail($destination_email, $email_subject, $email_body);
  echo "Data Sent";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Julianna Baker</title>
  <link rel="stylesheet" type="text/css" href="assets/css/exercise04.css">
</head>
<body>
  <ul class="menu">
      <li><a href="#">home</a></li>
      <li><a href="#">activities</a></li>
      <li><a href="#">food</a></li>
      <li><a href="#">people</a></li>
    </ul> <!-- end of navigation menu -->
  <br><h2 class="header">Please tell us about your visit</h2>
  <div class="form">
    <form action="assets/php/process1.php">
      Name:<br>
      <input type="text" id="visitor" name="visitor">
      <br><br>
      How many people in your group: <br>
      <input type="text" name="groupSize">
      <br><br>
      <label for="start">What date did you visit:</label>
        <input type="date" id="start" name="trip-start"
        min="01-01-2000" max="09-29-2019">
      <br><br>
      <p>Select a place you visited:</p>
      <div>
        <input type="radio" id="huey" name="place">
        <label for="place1">Royal Palace of Madrid</label>
      </div>

      <div>
        <input type="radio" id="dewey" name="place">
        <label for="place2">Plaza Mayor</label>
      </div>

      <div>
        <input type="radio" id="louie" name="place">
        <label for="place3">Palacio de Cristal</label>
      </div>
      <br><br>
        Please rate your trip: <br><br>
        0
        <input type="range" name="points" min="0" max="10">
        10
      <br><br>
      <input type="submit" value="Submit">
    </form>
  </div> <!-- end of div class form -->
</body>
</html>