<?php 
    session_start();
    include('server.php'); 
?>
<!DOCTYPE html>
<html>
<style>
table, td ,th {
    border: 1px solid black;
}
#table1 {
    border-collapse: separate;
}
</style>
<body>
<center>
<h1>All Student Registration</h1>
    <h2>List of all students that are registered </h2>
        <table id = "table1">
                <tr>
                    <th style =" text-align: center;">studentID</th>
                    <th style =" text-align: center;">subjectID</th>
                    <th style =" text-align: center;">Semester ID</th>
                    <th style =" text-align: center;">credits</th>
                    <th style =" text-align: center;">SubjectGrade</th>
                </tr>
                <?php
                if($_SESSION['super'] == 1) 
                {
                    $find_info = sprintf("SELECT * FROM subjectGrade; ");
                    $result = mysqli_query($conn,$find_info);
                    $resultCheck = mysqli_num_rows($result);
                    
                        while($row = mysqli_fetch_assoc($result)) // rows is now the Subject table
                        {
                            echo'<tr>';
                            echo '<td  style =" text-align: center;">' .$row['studentID'].'</td>';
                            echo '<td  style =" text-align: center;">' .$row['subjectID']."</td>";
                            echo '<td  style =" text-align: center;">' .$row['semesterID']."</td>";
                            echo '<td  style =" text-align: center;">' .$row['credit']."</td>";
                            echo '<td  style =" text-align: center;">' .$row['Grade']."</td>";
                            echo'</tr>';
                        }
                }
                else
                {
                    echo "Only Teacher Can Read The all Student data";
                }
                
                ?>
        </table> 

</center>
                    <div class="homecontent">
                    <!--  notification message -->
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="success">
                            <h3>
                                <?php 
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>
                
                    <!-- logged in user information -->
                    <?php if (isset($_SESSION['username'])) : ?>
                        
                       
                        <!--<p style="text-align: center;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>-->
                        <p style="text-align: left,"><a href="index.php" style="color: red;"><---Back To Home</a></p>
                        <p style="text-align: left,"><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
                    <?php endif ?>
                </div>
             </body>
</html>