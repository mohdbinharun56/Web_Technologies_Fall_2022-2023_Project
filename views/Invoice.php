<?php
include '../controllers/InvoiceControl.php';
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <form method="post">
      <center><table border="1" style="width: 800px;">
        <tr style="width:200px; heigth: 10px;">
        <td style="text-align: right;" ><a href="../controllers/Logout.php">Logout</a> <br><br><br></td>

        </tr>
        <tr style="height:200px;">
          <td><h1>Invoice</h1><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
            <a href="">Patient</a>&nbsp &nbsp &nbsp
            <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
            <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
            <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
            <a href="">Seetings</a> &nbsp &nbsp &nbsp <br> <br><br><br> -->
            
            <center>
              <select name="checkstatus" id="">
                <option value="">Select Status</option>
                <option value="Paid">Paid</option>
                <option value="Unpaid">Unpaid</option>
              </select>
              <button name="searchStatus">search</button>
              <table border="" style="width: 500px; text-align:center;">
                 <tr style="text-align:center;">
                    <br><br>
                    <th>Appointment ID</th>
                    <th>Patient Name</th>
                    <th>Doctor name</th>
                    <th>Appoinment Date</th>
                    <th>Appoinment Time</th>
                    <th>Payment</th>
                    <th>Payment Type</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                                
                  <?php while($r=mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td><?php echo $r['Appointment_ID']; ?></td>
                    <td><?php echo $r['Patient_Name'];?></td>
                    <td><?php echo $r['Doctor_Name']; ?></td>
                    <td><?php echo $r['Appointment_Date']; ?></td>
                    <td><?php echo $r['Appoinment_time']; ?></td>
                    <td><?php echo $r['Payment'];?></td>
                    <td><?php echo $r['Payment_Type']; ?></td>
                    <td><?php echo $r['Status'];?></td>
    </form>
                    <td>
                      <form action="EditInvoice.php" method="get"><button type="submit" name="edit" value="<?php echo $r["SLNo"] ; ?>">Edit</button></form> 
                      <button type="submit" name="delete" value="<?php echo $r['SLNo'] ; ?>">Delete</button>
                    </td>
                                  
                  </tr>
                  <?php }?>
              </table><br><br>
            </center>

          </td>
        </tr> <br><br><br><br>
      </table></center>
    
  </body>
</html>