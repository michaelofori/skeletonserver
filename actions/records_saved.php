<?php

include("../controllers/contact_controller.php");

//collecting from data
    if(isset($_POST['submit'])){
        $pname = $_POST['pname'];
        $pphoned = $_POST['pphoned'];
  
        addContact_ctr($pname,$pphoned);


       header ('Location:../view/form.php');


    }


 


?>