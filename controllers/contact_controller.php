<?php
//make the controller aware of the existense of the class
require('../classes/contact_class.php');

//edit, select/ update/ delete function

function addContact_ctr($pname, $pphoned){
    //create instance of the class
    $addpname = new ContactPhoneClass();

    return $addpname->addContact_cls($pname,$pphoned);

    //run t
    header('Location:view/form.php');

}


?>


