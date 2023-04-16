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
    #bottom {
        position: absolute;
        bottom: 0;
        left: 0;
      }
</style>
<!DOCTYPE html>
<html>
<body>
<center>
<h1>Student Registration</h1>
    <h2>Check the subject that you would like to choose</h2>
        <form method="post" action = "add_thegrade.php">
        <table id = "table1">
                <tr> 
                    <th>&nbsp;</th>
                    <th style =" text-align: center;">studentID</th>
                    <th style =" text-align: center;">subjectID</th>
                    <th style =" text-align: center;">semesterID</th>
                    <th style =" text-align: center;">credits</th>
                    <th style =" text-align: center;">grade</th>
                    <th style =" text-align: center;">add Grade</th>
                </tr>
                <?php
                if(isset($_POST['Submit']))
                {
                    $sel = $_POST['checkbox'][0];
                    $result = mysqli_query($conn,"SELECT * FROM subjectGrade WHERE subjectID = '$sel' ORDER BY studentID ASC");
                    if ( false===$result ) 
                    {
                        printf("error: %s\n", mysqli_error($conn));
                    }
                   /// $resultCheck = mysqli_num_rows($result);
                   $i = 0;
                            while($row = mysqli_fetch_assoc($result)) // rows is now the Subject table
                            {
                                echo'<tr>';
                                echo "<td><input type = 'checkbox' name ='checkbox[]' value = '".$row['studentID']."'</td>";
                                echo '<td  style =" text-align: center;">' .$row['studentID'].'</td>';
                                echo '<td  style =" text-align: center;">' .$row['subjectID']."</td>";
                                echo '<td  style =" text-align: center;">' .$row['semesterID']."</td>";
                                echo '<td  style =" text-align: center;">' .$row['credit']."</td>";
                                echo '<td  style =" text-align: center;">' .$row['Grade']."</td>";
                                ?>
                                <td><input type = 'text' name ="textgrade[]"></td>
                                <?php
                                echo'</tr>';
                                $i+=1;
                            }
                          //  echo "i is".$i;
                          
                }
                echo" <input type='hidden' name='hdnsub' value='$sel'";
               ?> 
               </table>
        <input type = "Submit" name="Submit" id = "Submit" value= "Submit Record">
        <input id = "bottom" type="hidden" name="hdnLine" value="<?php echo $i;?>">
     
       </form>

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

    <div id = "bottom">
        <p style="text-align: left,"><a href="index.php" style="color: red;">
                <---Back To Home</a>
        </p>
        <p style="text-align: left,"><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
    </div>
    <?php endif ?>
</div>