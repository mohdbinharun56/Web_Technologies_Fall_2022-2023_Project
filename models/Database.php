<?php
include 'Conection.php';

//staff Login
function getlogin($username,$password){
    $con = getconection();
    $sql="select * from staff where S_Username='$username' and Password='$password'";
    $result = mysqli_query($con,$sql);
    if($result->num_rows>0){
        while($r=mysqli_fetch_assoc($result)){
            $_SESSION['username'] = $r['S_Username'];
            header("location:../views/Dashboard.php");
        }
    }
}


// Dashboard 

//counting the total patient.
function gettotalpatient(){
        
    $con= getconection();
    $sql = "SELECT SUM(total_count) as total_sum FROM ( SELECT COUNT(*) as total_count FROM patient UNION ALL SELECT COUNT(*) as total_count FROM patientinfo ) as counts;";
    $resultsum = mysqli_query($con,$sql);
    $r=mysqli_fetch_assoc($resultsum);
    $total_patientsum=$r['total_sum'];
    return $total_patientsum;
}

//counting the total appointment.
function gettotalAppointment(){
     
    $con= getconection();
    $sql1 = "SELECT COUNT(*) as toatl_count from appointment;";
    $resultcount = mysqli_query($con,$sql1);
    $r=mysqli_fetch_assoc($resultcount);
    $total_appcount=$r['toatl_count'];
    return $total_appcount;

}

//average patient per doctor.
function getavgpatientperdoctor(){
     
    $con= getconection();
    $sql2="SELECT AVG(total_patients) AS average_patients_per_doctor FROM ( SELECT COUNT(Patient_name) AS total_patients FROM appointment GROUP BY Doctor_name) AS patient_counts;";
    $resultavg=mysqli_query($con,$sql2);
    $r=mysqli_fetch_assoc($resultavg);
    $avg_patient_per_doctor=$r['average_patients_per_doctor'];
    return $avg_patient_per_doctor;
}

//Appointment scheduling
function scheduleAppointment(){
    
    $con= getconection();
    $sql4 = "select * from appointment order by AppoinmentID";
    $result=mysqli_query($con,$sql4);
    return $result;
}

//not workingxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
function searchAppointSchedule($appdate){
    $con = getconection();
    $sql3 = "SELECT * FROM `appointment` WHERE Appoinment_date='$appdate'";
    $result = mysqli_query($con,$sql3);
    return $result;
}


function getPatient(){
    $con = getconection();
    $sql = "select * from patient";
    $result = mysqli_query($con,$sql);
    return $result;
}


function getInsertpatient($patientname,$patientemail,$patientusername,$patientpass,$patientgender,$patientphone,$patientaddress){
    $con = getconection();
    $sql = "INSERT INTO `patient`(`Patient_Name`, `Email`, `Username`, `Password`, `Gender`, `Phone`, `Address`) VALUES ('$patientname','$patientemail','$patientusername','$patientpass','$patientgender',$patientphone,'$patientaddress');";
    mysqli_query($con,$sql);
    //header("Location:../Views/PatientView.php");
}

//view patient profile
function getPatientProfile($viewid){
    $con = getconection();
    $sql="select * from patient where SLNo='$viewid';";
    $result=mysqli_query($con,$sql);
    return $result;
}

//delete patient from list
function getdeletePatient($delid){
    $con = getconection();
    $sql="delete from patient WHERE SLNo ='$delid';";
    mysqli_query($con,$sql);
    // return 
}

//update patient 
function getupdatePatient($pname,$pemail,$pusername,$pgender,$pphone,$paddress,$slno){
    $con = getconection();
    $sql1 = "update patient set Patient_Name='$pname', Email='$pemail', Username='$pusername', Gender='$pgender', Phone=$pphone, Address= '$paddress' where SLNo=$slno";
    mysqli_query($con,$sql1);
}

//select update patient
function getselectupdatePatient($patientedit){
    $con = getconection();
    $sql="select * from patient where SLNo=$patientedit";
    $result = mysqli_query($con,$sql);
    return  $result;
}

//view Appointment
function getAppointmentview(){
    $con = getconection();
    $sql = "select * from appointment order by AppoinmentID";
    $result = mysqli_query($con,$sql);
    return $result;
}

//check the unique appointmentID
function getcheckuniqueID($id){
    
    $con = getconection();
    //check the appointment id is unique or already exist.
    $sql ="SELECT * from appointment where AppoinmentID='$id'";
    $result = mysqli_query($con,$sql);
    return $result;
}
//insert appointment
function getaddAppointment($id,$patient_name,$doctor_name,$department,$Date,$time,$serial){
    $con = getconection();
    $result = getcheckuniqueID($id);
    if($result->num_rows > 0){
      echo '<script>alert("This appointment id already exist!")</script>';
    }
    else{
      $sql2 = "INSERT INTO appointment(`AppoinmentID`, `Patient_name`, `Doctor_name`, `Department`, `Appoinment_date`,`Appoinment_time`, `Serial`) VALUES ('$id','$patient_name','$doctor_name','$department','$Date','$time',$serial)";
      mysqli_query($con,$sql2);
      header("Location:../views/AppointmentView.php");
    }
}
?>
