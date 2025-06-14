<?php
class validate {
    public function checkEmpty($data, $fields) {
        $msg = null;
        foreach($fields as $value) {
            if(empty($data[$value])) {
                $msg .= "<p>$value field empty<p/>";
            }
        }
        return $msg;
    }
    // To check if employee hours is valid
    public function validHours($hours) {
        return is_numeric($hours) && $hours >= 0 && $hours <= 23;
    }
    // To check if employee age is valid
    public function validAge($age) {
        return is_numeric($age) && $age >= 1 && $age <= 120;
    }
    // To check if employee email is valid
    public function validEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    // To check if employee phone number is a valid canadian number with either of the following formats 1234567890, 123-456-7890 or (123) 456-7890
    public function validPhone($phone) {
        return preg_match('/^(\+1\s?)?(\(\d{3}\)|\d{3})[\s.-]?\d{3}[\s.-]?\d{4}$/', $phone);
    }
    // To verify employee gender
    public function actualGender($gender) {
        if($gender == 'male') {
            return 'Male';
        }elseif($gender == 'female') {
            return 'Female';
        }
        return 'Others';
    }
    // To check if employee address is in a valid format
    public function validAddress($address) {
        return is_string($address) && strlen(trim($address)) >= 5;
    }
}