<?php
// require('../controllers/edit_controller.php');
require('../controllers/selectone.php');


if (isset($_POST['edit'])){
    $id = $_POST['id'];

    $result=selectOneCtr($id);
    // print_r( selectOneCtr($id));
    // echo $result[0]['pname'];
    // echo $result[0]['pphoned'];


?>

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

  <br>
  <label for="pname">Update Information</label><br>
  <form action="../actions/edit_records.php" method="post">
    <!-- update name -->
    <input type="hidden" name="pid" value=" <?php  echo $result[0]['pid']; ?> ">
    <label for="pname">First name:</label><br>
    <input type="text" placeholder=" <?php  echo $result[0]['pname']; ?> " id="pname" name="pname" id="pname"><br>
    <!-- contact -->
    <label for="contact">Contact:</label><br>
    <input type="mobile" placeholder="<?php  echo $result[0]['pphoned']; }; ?> " id="pphoned" name="pphoned" id="pphoned"><br><br>
    <!-- submit button -->
    <input type="submit" value="update" name="edit">
  </form>


</body>

</html>