<?php 
$email = $_POST["email"] ?? "";


function chekEmail($mail){
    
    if(str_contains($mail, "@") && str_contains($mail, ".")){
        return true;
    }else{
        return false;
    };

};

?>