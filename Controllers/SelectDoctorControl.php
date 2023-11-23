<?php 
    include '../models/Database.php';
    $doctorname= "";
    if(isset($_GET['click'])){
        if(!empty($_GET['doctorname'])){
            $doctorname=$_GET['doctorname'];
            echo $doctorname;
            header("location:../views/InsertAppointment.php?doctorname=$doctorname");
        }
        else{
            echo '<script>';
            echo 'var userResponse = confirm("Doctor is required!");';
            echo 'if (userResponse == true) {';
            echo '  alert("You clicked OK!");';
            echo '  window.location.href = "../views/SelectDoctor.php";';
            echo '} else {';
            echo '  alert("You clicked Cancel!");';
            echo '  window.location.href = "../views/SelectDoctor.php";';
            echo '}';
            echo '</script>';
        }
        
    }

?>