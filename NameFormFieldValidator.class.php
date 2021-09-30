<?php 

require_once("IFormFieldValidator.class.php");

class NameFormFieldValidator implements IFormFieldValidator {

    public function validate($input){

        $val = trim($input);

        if(empty($val)){
            return false;
        } else {
            if(!preg_match("/^[a-zA-Z0-9]{6,12}$/", $val)) {
                return false;
            }

            return true;
        }  
    }

}

?>