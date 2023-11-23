<?php
include '../Models/Database.php';
    $name= $age = $email = $username= $password=$Phone=$gender=$weight=$bloodgroup=$address="";
    $nameError = $ageError = $emailError = $usernameError = $passwordError = $PhoneError = $genderError = $weightError = $bloodgroupError = $addressError="";

    if(isset($_POST['register'])){
        if(empty($_POST['name'])){
        $nameError = "Name is Required";
        }
        else{
        $name = $_POST['name'];
        }
        if(empty($_POST['email'])){
        $emailError = "Email is Required";
        }
        else{
        $email = $_POST['email'];
        }
        if(empty($_POST['username'])){
        $usernameError = "User Name is Required";
        }
        else{
        $username = $_POST['username'];
        }
        if(empty($_POST['password'])){
        $passwordError = "Password is Required";
        }
        else{
        $password = $_POST['password'];
        }
        if(empty($_POST['gender'])){
        $genderError = "Gender is Required";
        }
        else{
        $gender = $_POST['gender'];
        }
        if(empty($_POST['address'])){
        $addressError = "Address is Required";
        }
        else{
        $address = $_POST['address'];
        }
        if(empty($_POST['phone'])){
        $PhoneError = "Phone number is Required";
        }
        else{
            $Phone = $_POST['address'];
        }

        if( !empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['address'] && !empty($_POST['phone']))){
            $patientname=$_POST['name'];
            $patientemail=$_POST['email'];
            $patientusername=$_POST['username'];
            $patientpass=$_POST['password'];
            $patientgender=$_POST['gender'];
            $patientaddress=$_POST['address'];
            $patientphone = $_POST['phone'];
            $insert = getInsertpatient($patientname,$patientemail,$patientusername,$patientpass,$patientgender,$patientphone,$patientaddress);
            header("location:../Views/PatientList.php");
        }


    }
?>