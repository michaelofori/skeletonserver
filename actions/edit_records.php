

<?php
 include("../controllers/edit_controller.php");
 if(isset($_POST['edit'])){
    $id = $_POST['pid'];
    $pname = $_POST['pname']; 
    $pphoned = $_POST['pphoned'];




 editContact_ctr($id,$pname,$pphoned);

 
 };
 header('Location:../view/form.php');





?>