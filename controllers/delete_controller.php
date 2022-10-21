<?php
//make the controller aware of the existense of the class
require('../classes/contact_class.php');

//edit, select/ update/ delete function

function delContact_ctr($id){
   
 
    $delcontact = new ContactPhoneClass();

    return $delcontact->deleteContact_cls($id);




}


?>

