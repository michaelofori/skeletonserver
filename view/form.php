<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/formcss/css/bootstrap.min.css">

  <title>Form</title>
</head>

<body>
  <!-- action="../actions/records_saved.php" -->
  <form action="../actions/records_saved.php" method="post">
    <!-- first name -->
    <label for="pname">First name:</label><br>
    <input type="text" id="pname" name="pname" placeholder="Enter your first name" id="pname" required><br>
    <!-- contact -->
    <label for="contact">Contact:</label><br>
    <input type="mobile" id="pphoned" name="pphoned" placeholder="Enter your phone number" id="pphoned" required><br><br>
    <!-- submit button -->
    <input type="submit" value="Submit" name="submit">
  </form>


  <?php
  include("../functions/displayContact.php");
  displayAllCtr();
  ?>

</br>


</body>

</html>