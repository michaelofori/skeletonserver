<?php
 include("../functions/displayContact.php");

    // function viewContact() {

    //     $result=selectAllCtr();

    // echo json_encode($result);

    // return json_encode($result);
    // } 


    // viewContact();

    

    $result= json_encode(array(selectAllCtr()));
    echo $result;


?>