<?php
 include("../functions/displayContact.php");

    function viewContact() {

        $result=displayAllCtr();

    echo json_encode($result);

    return json_encode($result);
    } 

 


?>