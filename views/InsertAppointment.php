<?php 
include '../controllers/InsertAppointmentValidation.php';
?>
<!DOCTYPE HTML>
<html>Appointment Insertion</title>
  </head>
  <body>
    <form method="get" action="../controllers/InsertAppointmentValidation.php">
      <center><table border="1" style="width: 700px;">
        <tr style="width:200px; heigth: 10px;">
        <td style="text-align: right;" ><a href="Logout.php">Logout</a> <br><br><br></td>

        </tr>
        <tr style="height:200px;">
          <td><h1>Appointment Register</h1> <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
            <a href="">Patient</a>&nbsp &nbsp &nbsp
            <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
            <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
            <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
            <a href="">Seetings</a> &nbsp &nbsp &nbsp <br> <br> -->
            <center>
              <table border="1" style="width: 500px;">
                <tr style="text-align:center;">
                  <td><br><br>
                    Appointment_ID: 
                    <input type="text" name="appointmentId"><br>
                    <?php if(empty($_GET['appointmentId'])){?>
                    <span style="color:red;"><?php echo $apnmnt_IDError;?></span><br><br>
                    <?php } ?>
                    Patient Name: 
                    <input type="text" name="patientname"><br>
                    <?php if(empty($_GET['patientname'])){?>
                    <span style="color:red;"><?php echo $patnt_nameError;?></span><br><br>
                    <?php } ?>
                    
                    Department: 
                    <?php $sql5="select Department from allowed_date_time where Doctor_name='$doctor_name'";
                    $resultdep=mysqli_query($con,$sql5);
                    $r=mysqli_fetch_assoc($resultdep);
                    if($resultdep->num_rows > 0){
                      $department = $r['Department'];
                    }
                    ?>
                    <input type="text" name="department" value="<?php echo $department;?>" readonly><br>
                    <?php if(empty($_GET['department'])){?>
                    <span style="color:red;"><?php echo $deprtmntError;?></span><br><br>
                    <?php } ?>

                    Doctor: 
                    <input type="text" name="doctor" value="<?php echo $doctor_name;?>"readonly><br>
                    <?php if(empty($_GET['doctor'])){?>
                    <span style="color:red;"><?php echo $dctr_nameError;?></span><br><br>
                    <?php } ?>

                    serial:
                     <input type="number" name="serial" id="" ><br>
                     <?php if(empty($_GET['serial'])){?>
                     <span style="color:red;"><?php echo $srlError;?></span><br><br>
                     <?php } ?>
                     Appointment Date:
                     <select name="date">
                      <option value="">Select_date</option>
                      <?php
                        $sql3="select DISTINCT Date from allowed_date_time where Doctor_name='$doctor_name'";
                        $res = mysqli_query($con,$sql3);
                        while($r=mysqli_fetch_assoc($res)){ //  option multiple value from database?>
                          <option value="<?php echo $r['Date'];?>"><?php echo $r['Date'];?></option>
                      <?php } ?>    
                    </select><br><br>
                    Appointment Time:
                     <select name="time">
                      <option value="">Select_time</option>
                      <?php
                        $sql4="select DISTINCT Time from allowed_date_time where Doctor_name='$doctor_name'";
                        $res = mysqli_query($con,$sql4);
                        while($r=mysqli_fetch_assoc($res)){ //  option multiple value from database ?> 
                          <option value="<?php echo $r['Time'];?>"><?php echo $r['Time'];?></option>
                      <?php } ?>    
                    </select><br>
                     <br><br>
                    <input type="submit" name="register" value="Save" style="color:blue;" ><br><br>
                  </td>
                </tr>
              </table><br><br>
            </center>

          </td>
        </tr> <br><br><br><br>
      </table></center>
    </form>
    
  </body>
</html>