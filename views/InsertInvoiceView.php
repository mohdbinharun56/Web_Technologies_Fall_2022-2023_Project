<?php 
//include '../models/Conection.php';
include '../controllers/InsertInvoiceValidation.php';

$con = getconection();
?>
<!DOCTYPE HTML>
<html>
    <body>
        <form method="post">
      <center> <table border="1" style="width: 700px;">
            <tr>
            <td style="text-align: right;" ><a href="../controllers/Logout.php">Logout</a> <br><br><br></td>

            </tr>
            <tr style="height:200px;">
            <td><h3>Invoice</h3> <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
            <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
            <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
            <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
            <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
            <a href="Settings.php">Seetings</a> &nbsp &nbsp &nbsp 
            <br> <br><br><br> -->
            <center>
              <table border="1" style="width: 500px;">
                <tr style="text-align:center;">
                  <?php while($r=mysqli_fetch_assoc($result)){?>
                    <td><br><br>

                      Appoinment ID
                      <input type="text" name="appointmentid" value="<?php echo $r['AppoinmentID'];?>" readonly> <br><br><br>
                      
                      Patient Name
                      <input type="text" name="patientname" value="<?php echo $r['Patient_name'];?>" readonly><br><br><br>

                      Doctor Name
                      <?php
                      $doctor_name = $r['Doctor_name'];
                      ?>
                      <input type="text" name="doctorname" value="<?php echo $doctor_name;?>" readonly><br><br><br>
                      
                      Serial
                      <input type="number" name="serial" value="<?php echo $r['Serial'];?>" readonly><br><br><br>
                      
                      Date: 
                      <input type="date" name="date" value="<?php echo $r['Appoinment_date'];?>" readonly><br><br><br>

                      Time:
                      <input type="text" name="time" value="<?php echo $r['Appoinment_time']; ?>" readonly><br><br><br>

                      <?php }?>
                       
                      <?php 
                        $sql = "select Distinct Fees from doctor where Doctor_name = '$doctor_name'";
                        $res = mysqli_query ($con,$sql);
                        while($row = mysqli_fetch_assoc($res)){ ?>
                      Payment:
                        <input type="number" name="payment" value="<?php echo $row['Fees'];?>" readonly> <br><br>
                          <?php } ?>
                        Payment Type:
                        <input type="text" name="paymenttype" ><br>
                        <?php if(empty($_POST['paymenttype'])){?>
                        <span style="color:red;"><?php echo $payment_typeError;?></span><br><br>
                        <?php } ?>

                        <select name="status" id="" >
                          <option value="">Select_Status</option>
                          <option value="Paid">Paid</option>
                          <option value="Unpaid">Unpaid</B></option>
                          <option value="Required">Required</option>
                        </select><br>
                        <?php if(empty($_POST['status'])){?>
                        <span style="color:red;"><?php echo $statusError;?></span><br><br>
                        <?php }?>
                        <input type="submit" name="register" value="Save" style="color:blue;" ><br><br>
                    </td>
                </tr>
                </table><br><br>
            </center>
            </tr>
        </table>
    </center>
    </form>
    </body>
</html>