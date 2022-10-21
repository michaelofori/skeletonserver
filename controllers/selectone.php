<?php
require("../classes/contact_class.php");

// insert
function selectOneCtr($id){
    $display= new ContactPhoneClass();
    return $display->selectOneContact($id);
    
}