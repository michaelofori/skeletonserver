<?php
 include("../functions/displayContact.php");

    // function viewContact() {

    //     $result=selectAllCtr();

    // echo json_encode($result);

    // return json_encode($result);
    // } 


    // viewContact();

    

    $result= selectAllCtr();
    $encoded=json_encode($result);
    echo $encoded;


?>