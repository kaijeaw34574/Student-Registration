<?php 
    session_start();
    include('server.php'); 
?>
<?php 
    if(isset($_POST['Submit']))
    {
        $chkkar = $_POST['checkbox'];
        $teacherID = $_SESSION['username'];
        //echo $_POST['checkbox'];
        foreach($chkkar as $sectionID)
        {
            $info =strip_tags($sectionID);
            //echo mysqli_num_rows($chkkar);
            $find_info ="SELECT * FROM Subjects WHERE sectionID = '$info'";
            $result = mysqli_query($conn,$find_info);
            $rows = mysqli_fetch_array($result);
            //$total = mysqli_num_rows($result);
            //echo "row:$rows";
            $sem_id = $rows['semesterID'];
            $sql = "INSERT INTO Teacherassigned (teacherID, sectionID, semesterID) VALUES ('$teacherID', '$info', '$sem_id')"; //insert to subjectGrade
            mysqli_query($conn,$sql);
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
 