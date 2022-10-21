<?php
 include("../controllers/delete_controller.php");
 if(isset($_POST['delete'])){
    $id = $_POST['id'];



 delContact_ctr($id);

 header('Location:../view/form.php');
 }

?>