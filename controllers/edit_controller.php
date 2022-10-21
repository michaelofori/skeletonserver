<?php
//make the controller aware of the existense of the class
require('../classes/contact_class.php');

//edit, select/ update/ delete function

function editContact_ctr($id,$pname,$pphoned){
   
 
    $editcontact = new ContactPhoneClass();

    return $editcontact->editContact_cls($id,$pname,$pphoned);



   
}


?>

