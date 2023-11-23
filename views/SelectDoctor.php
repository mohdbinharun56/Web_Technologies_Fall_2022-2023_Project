<?php
include '../controllers/SelectDoctorControl.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Schedule Date</title>
</head>
<body>
    <form method="get" action="../controllers/SelectDoctorControl.php">
        <center>
            <table border="1" style="width: 700px;">
                <tr>
                    <td style="height: 50px;text-align:right;">
                        <a href="Logout.php">Logout</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Date </h3><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <a href="Dashboard.php">Dashboard</a>&nbsp &nbsp &nbsp 
                        <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
                        <a href="AppointmentView.php">Appointment</a> &nbsp &nbsp &nbsp
                        <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
                        <!-- <a href="Notification.php">Notification</a>&nbsp &nbsp &nbsp
                        <a href="Settings.php">Settings</a>&nbsp &nbsp &nbsp <br><br><br><br> -->
                        <center>
                            <table border="1" style="width: 200px;">
                                <tr>
                                    <td><br>
                                        <select name="doctorname">
                                            <option value="">Select Doctor Name</option>
                                            <option value="A">A</option>
                                            <option value="B">B</B></option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select><br><br>
                                        <input type="submit" name="click" value="click">
                                        <br><br>
                                    </td>
                                </tr>
                            </table><br>
                        </center>
                    </td>
                </tr>
            </table>
        </center>
    </form>
    
</body>
</html>