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
        <h1>Subjects that are searched</h1>
        <h2>Check the subject that you would like to add grade(Only add one subject at a time)</h2>
        <form method="post" action = "add_grade_db.php">
        <table id="table1">
             <tr>
                    <th>&nbsp;</th>
                    <th style =" text-align: center;">subjectID</th>
                    <th style =" text-align: center;">subjectName</th>
                    <th style =" text-align: center;">sectionID</th>
                    <th style =" text-align: center;">credits</th>
                    <th style =" text-align: center;">yearRequirement</th>
                    <th style =" text-align: center;">DegreeProgram</th>
                    <th style =" text-align: center;">room</th>
                    <th style =" text-align: center;">Seat</th>
                </tr>
            <?php

            if (isset($_POST['Search'])) // search bar
            {
                $strKeyword = $_POST['Search'];
                //$info = strip_tags(); 
                //$find_info = sprintf("SELECT * FROM Subjects where subjectID like 'CPE'");
                $sql = mysqli_query($conn, "SELECT * FROM Subjects where subjectID LIKE '$strKeyword%'"); //   search for similarity
                $resultCheck = mysqli_num_rows($sql);
                if ($resultCheck > 0) {
                    //echo "There is a data in the search";
                    while ($row = mysqli_fetch_assoc($sql)) {
                        //echo "<br>The post search bar is ".$POST['Search'];
                        //echo "<br>The post keyworh bar is ".$strKeyword;
                        echo'<tr>';
                        echo "<td><input type = 'checkbox' name ='checkbox[]' value = '".$row['subjectID']."'</td>";
                        echo '<td  style =" text-align: center;">' . $row['subjectID'] . '</td>';
                        echo '<td  style =" text-align: center;">' . $row['subjectName'] . "</td>";
                        echo '<td  style =" text-align: center;">' . $row['sectionID'] . "</td>";
                        echo '<td  style =" text-align: center;">' . $row['credits'] . "</td>";
                        echo '<td  style =" text-align: center;">' . $row['yearRequirement'] . "</td>";
                        echo '<td  style =" text-align: center;">' . $row['degreeProgram'] . "</td>";
                        echo '<td  style =" text-align: center;">' . $row['room'] . "</td>";
                        echo '<td  style =" text-align: center;">' . $row['Seat'] . "</td>";
                        echo '</tr>';
                    }
                }
            } 
            else {
                echo " there is no search";
            }
            ?>
        </table>
            <input type = "Submit" name=" Submit" id = "Submit" value= "Submit Record">
        </form>
    </center>
</body>
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
        <p style="text-align: left,"><a href="index.php" style="color: red;">
                <---Back To Home</a>
        </p>
        <p style="text-align: left,"><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
    <?php endif ?>
</div>