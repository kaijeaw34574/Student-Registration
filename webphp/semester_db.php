<?php
session_start();
include('server.php');
?>
<style>
    table,
    td,
    th {
        border: 1px solid black;
    }

    #table1 {
        border-collapse: separate;
    }
</style>

<body>
    <center>
        <h1>This is the semester that is searched</h1>
        <h2>Check the GPA and Total Credit</h2>
        <table id="table1">
             <tr>
                    <th style =" text-align: center;">studentID</th>
                    <th style =" text-align: center;">semesterID</th>
                    <th style =" text-align: center;">semesterGrade</th>
                    <th style =" text-align: center;">totalCredits</th>
                </tr>
            <?php
            $stu_id = $_SESSION['username'];

            if (isset($_POST['Search'])) // search bar
            {
                $strKeyword = $_POST['Search'];
                //$info = strip_tags(); 
                //$find_info = sprintf("SELECT * FROM Subjects where subjectID like 'CPE'");
                $sql = mysqli_query($conn, "SELECT * FROM semesterGrade where semesterID LIKE '$strKeyword%' and studentID = '$stu_id'"); //   search for similarity
                $resultCheck = mysqli_num_rows($sql);
                if ($resultCheck > 0) {
                    //echo "There is a data in the search";
                    while ($row = mysqli_fetch_assoc($sql)) {
                        //echo "<br>The post search bar is ".$POST['Search'];
                        //echo "<br>The post keyworh bar is ".$strKeyword;
                        echo'<tr>';
                        echo '<td  style =" text-align: center;">' . $row['studentID'] . '</td>';
                        echo '<td  style =" text-align: center;">' . $row['semesterID'] . "</td>";
                        echo '<td  style =" text-align: center;">' . $row['GPA'] . "</td>";
                        echo '<td  style =" text-align: center;">' . $row['totalCredit'] . "</td>";
                        echo '</tr>';
                    }
                }
            } 
            else {
                echo " there is no search";
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