<?php 

require_once("IFormFieldValidator.class.php");

class EmailFormFieldValidator implements IFormFieldValidator {
    private $errors = [];

    // public $errorMessage = null;

    public function validate($input) {

        $val = trim($input);
        // Erste Prüfung - Inhalt vorhanden
        if(empty($val)){
            header("Location: http://192.168.64.2/email-signature-generator/outlook_form.php");
            $this->addError('email', 'email cannot be empty');
            echo "Debug: Cannot be empty" . "<br>";
            return false;
        } else {
            // Zweite Prüfung - Email String/Syntax korrekt
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                header("Location: http://192.168.64.2/email-signature-generator/outlook_form.php");
                $this->addError('email', 'email must be a valid email address');
                echo "Debug: email must be a valid email address" . "<br>";
                return false;
            } else {
                echo "Debug: Email is correct!" . "<br>";
                return true;
            }
        }
    }

    private function addError($key, $val){
        $this->errors[$key] = $val;
      }
}



?>