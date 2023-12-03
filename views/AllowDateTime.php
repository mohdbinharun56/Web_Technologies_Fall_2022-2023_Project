<?php
include '../controllers/AllowDateTimeValidation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Schedule Date and Time</title>
</head>
<body>
    <form method="post">
        <center>
            <table border="1" style="width: 700px;">
                <tr>
                    <td style="height: 50px;text-align:right;">
                        <a href="../controllers/Logout.php">Logout</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Allowed Date and Time</h3><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
                                        Time
                                        <input type="time" name="selecttime"><br>
                                        <?php if(empty($_POST['selecttime'])){?>
                                            <span style="color:red;"><?php echo $timeError;?></span>
                                        <?php } ?><br><br>
                                        <select name="doctorname">
                                            <option value="">Select Doctor Name</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select><br>
                                        <?php if(empty($_POST['doctorname'])){?>
                                            <span style="color:red;"><?php echo $doctorError;?></span>
                                        <?php } ?><br><br>

                                        <select name="department">
                                            <option value="">Select Doctor Department</option>
                                            <option value="Medicine">Medicine(A)</option>
                                            <option value="Cardiologists">Cardiologists(B)</option>
                                            <option value="Allergists">Allergists(C)</option>
                                            <option value="Gastroenterologists">Gastroenterologists(D)</option>
                                            <option value="Dermatologists">Dermatologists(E)</option>
                                            <option value="Neorology">Neorology(F)</option>
                                        </select><br>
                                        <?php if(empty($_POST['department'])){?>
                                            <span style="color:red;"><?php echo $departmentError;?></span>
                                        <?php } ?><br><br>


                                        <input type="submit" name="insert" value="insert">
                                        <br><br>
                                    </td>
                                </tr>
                            </table><br>
                        </center>
                        <h4>Date Time slot</h4>
                        <center>
                            <table border="1">
                                <tr>
                                    <th>Doctor Name</th>
                                    <th>Department</th>
                                    <th>Time</th>
                                </tr>
                                <?php while($r=mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?php echo $r['Doctor_name'] ?></td>
                                        <td><?php echo $r['Department'] ?></td>
                                        <td><?php echo $r['Time'] ?></td>
                                    </tr>
                                <?php } ?>    
                            </table><br><br>
                        </center>

                    </td>
                </tr>
            </table>
        </center>
    </form>
    
</body>
</html>