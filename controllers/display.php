<?php
require("../classes/contact_class.php");

// insert
function selectAllCtr(){
    $display= new ContactPhoneClass();
    return $display->selectAllContacts();
}