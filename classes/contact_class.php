<?php
// contact phone entity

require('../settings/db_class.php');

// add, edit, delete
/**
 * 
 */

 class ContactPhoneClass extends db_connection {

    //add
    public function addContact_cls($pname,$pphoned){
        //write the sql
         $sql = "INSERT INTO `phonebook` (`pname`,`pphoned`) VALUES ('$pname','$pphoned')";
        //execute the sql
        return $this-> db_query($sql);


    }

     //select
    public function selectOneContact($id){
        //write the sql
        $sql = "SELECT * FROM `phonebook` WHERE `pid` = '$id'";
        //execute the sql
        return $this-> db_fetch_all($sql);
        

    }

    public function selectAllContacts(){
        //write the sql
        $sql= "SELECT * FROM `phonebook` ";
        //execute the sql
        return $this-> db_fetch_all($sql);


    }

     //edit

     public function editContact_cls($id,$pname,$pphoned){
        $sql = "UPDATE `phonebook` SET `pname`='$pname',`pphoned` = '$pphoned' WHERE `pid` = '$id'";
        return $this-> db_query($sql);

    } //delete
    function deleteContact_cls($id){
         //write the sql
         $sql= "DELETE FROM `phonebook` WHERE `pid` = '$id' ";
         //execute the sql
         return $this-> db_query($sql);


    }
 }