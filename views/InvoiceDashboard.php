<?php
include '../controllers/InvoiceDashboardControl.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Dashboard</title>
    </head>

    <body>
       <center> <table border="1" style="width: 700px;">
            <tr style="width: 200px; height: 50px;">
                <td style="text-align:right"> 
                <a href="../controllers/Logout.php">Logout</a></td>
            </tr>
            <tr>
                <td>
                    <h1>Invoice Dashboard</h1><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
                    <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
                    <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
                    <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
                    <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
                    <a href="">Seetings</a> &nbsp &nbsp &nbsp <br><br><br><br> -->
                    &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                    <input type="text" value="<?php echo "Total Payment: ",$totalpayment;?>"  style="height: 100px;text-align:center;"readonly> &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                    <input type="text" value="<?php echo "Due: ",$totaldue;?>" style="height: 100px;text-align:center;" readonly> <br><br>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                    <input type="text" value="<?php echo "Total Paid:",$totalpaid;?>" style="height:100px;" readonly> &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                    <input type="text" value="<?php echo "Total Unpaid:",$totalunpaid;?>" style="height:100px;" readonly> &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                    <br><br><br><br><br>
                    <form method="post">&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                    <select name="doctorname">
                      <option value="">Select_Doctor</option>
                      <option value="A">A</option>
                      <option value="B">B</B></option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                      <option value="F">F</option>
                    </select>&nbsp &nbsp
                    <input type="submit" name="searchdoctor" value="click">&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                    <input type="text" value="<?php echo "Payment per doctor:",$total_specific_doctor_payment;?>" style="height:100px;" readonly> <br><br>
                    
                    <center><input type="submit" name="transitionlist" value="TransactionList" style="height:30px;color:blue;"></center>
                    </form>

                    <br><br><br><br>
                </td>
            </tr>
        </table></center>
    </body>
</html>
