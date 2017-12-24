<?php require_once "app/lib/validation_helper.php"; ?>
<?php require_once "service/person_service.php"; ?>

<?php   
    function validatePersonForCreate(&$person, &$personErr){
        $isValid = true;
        if(empty($person['email'])){
            $isValid = false;
            $personErr['email'] = "*";
        }
        else if(isValidEmail($person['email'])==false){
            $isValid = false;
            $personErr['email'] = "Invalid email format";
        }
        else if(isUniquePersonEmail($person['email'])==false){
            $isValid = false;
            $personErr['email'] = "Email is not unique";
        }

        if(empty($person['name'])){
            $isValid = false;
            $personErr['name'] = "*";
        }
        else if(isValidPersonName($person['name'])==false){
            $isValid = false;
            $personErr['name'] = "At least two words required, Only letters and white space allowed";
        }
        return $isValid;
    }
    
    function validatePersonForUpdate(&$person, &$personErr){
        $isValid = true;
        if(empty($person['email'])){
            $isValid = false;
            $personErr['email'] = "*";
        }
        else if(isValidEmail($person['email'])==false){
            $isValid = false;
            $personErr['email'] = "Invalid email format";
        }
        else if(isUniquePersonEmailForUpdate($person['id'], $person['email'])==false){
            $isValid = false;
            $personErr['email'] = "Email is not unique";
        }

        if(empty($person['name'])){
            $isValid = false;
            $personErr['name'] = "*";
        }
        else if(isValidPersonName($person['name'])==false){
            $isValid = false;
            $personErr['name'] = "At least two words required, Only letters and white space allowed";
        }
        return $isValid;
    }
?>