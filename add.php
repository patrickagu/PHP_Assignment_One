<?php
// include the other classes
include_once('crud.php');
include_once('validate.php');
// create new class objects for crud, validate classes
$crud = new crud();
$valid = new validate();
// to make sure the form has been submitted
if(isset($_POST["submit"])) {
    $name = $crud -> escape_string($_POST["name"]);
    $hours = $crud -> escape_string($_POST["hours"]);
    $age = $crud -> escape_string($_POST["age"]);
    $email = $crud -> escape_string($_POST["email"]);
    $phone = $crud -> escape_string($_POST["phone"]);
    $gender = $crud -> escape_string($_POST["gender"]);
    $address = $crud -> escape_string($_POST["address"]);

    $msg = $valid -> checkEmpty($_POST, array(["name", "hours", "age", "email", "phone", "gender", "address"]));
    $checkHours = $valid->validHours($_POST["hours"]);
    $checkAge = $valid->validAge($_POST["age"]);
    $checkEmail = $valid->validEmail($email);
    $checkPhoneNumber = $valid->validPhone($_POST["phone"]);
    $checkAddress = $valid->validAddress($_POST["address"]);
    $confirmGender = $valid->actualGender($_POST["gender"]);

    // Validation messages (assume these variables are set earlier in the script)
    if ($msg !== "null") {
        echo "<p>$msg</p>";
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
    } elseif (!$checkHours) {
        echo "<p>Your input is not a valid number for hours. Please enter a valid number.</p>";
    } elseif (!$checkAge) {
        echo "<p>Your input is not a valid age. Please enter a valid age.</p>";
    } elseif (!$checkEmail) {
        echo "<p>Your input is not a valid email. Please enter a valid email.</p>";
    } elseif (!$checkPhoneNumber) {
        echo "<p>Your input is not a valid phone number. Please enter a valid phone number.</p>";
    } elseif (!$checkAddress) {
        echo "<p>Your input is not a valid address. Please enter a valid address.</p>";
    } elseif (!$confirmGender) {
        echo "<p>Your input is not a valid gender. Please select one from the list.</p>";
    } else {
        // All validations passed, proceed to insert
        $result = $crud->execute(
            "INSERT INTO employees(name, hours, age, email, phone, gender, address, checkbox_items) 
         VALUES('$name', '$hours', '$age', '$email', '$phone', '$gender', '$address', '$chk')"
        );
    }

    // To let the user know that the record has been added
    echo "<p>Your data has been successfully added</p>";
    echo "<a href='javascript:self.history.back();'>Go Back</a>";
}
