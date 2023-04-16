<?php 
    session_start();
    include('server.php'); 
?>
<?php 
    if(isset($_POST['Submit']))
    {
        $chkkar = $_POST['checkbox'];
        $Stuid = $_SESSION['username'];
        //echo $_POST['checkbox'];
        
        foreach($chkkar as $subjectID)
        {
            $info =strip_tags($subjectID);
            //echo mysqli_num_rows($chkkar);
            $find_info ="SELECT * FROM Subjects WHERE subjectID = '$info'";
            $result = mysqli_query($conn,$find_info);
            $rows = mysqli_fetch_array($result);
            //$total = mysqli_num_rows($result);
            //echo "row:$rows";
            $sec = $rows['sectionID'];
            $credit = $rows['credits'];
            $sem_id = $rows['semesterID'];
            $sql = "INSERT INTO subjectGrade (studentID, subjectID, semesterID,credit,Grade) VALUES ('$Stuid', '$subjectID', '$sem_id',$credit,NULL)"; //insert to subjectGrade
            mysqli_query($conn,$sql);
            $add_to_subreg = "INSERT INTO subjectRegistration (studentID,subjectID,semesterID,sectionID) VALUES ('$Stuid','$subjectID','$sem_id','$sec')";
            mysqli_query($conn,$add_to_subreg);
            $del_seat ="UPDATE Subjects SET Seat=Seat - 1 WHERE sectionID = '$sec'"; 
            mysqli_query($conn,$del_seat);
        }
       // header("location:index.php");
      
    }
?>

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
            
           
            <p style="text-align: center;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p style="text-align: left,"><a href="index.php" style="color: red;"><---Back To Home</a></p>
            <p style="text-align: left,"><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>
 