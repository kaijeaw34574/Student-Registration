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
<head>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Student Registration</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="subjectregis.php">Subject_Registration</a></li>
                <li><a class="dropdown-item" href="info.php">Info</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav></head> -->
    

<body>
<center>
    <?php
    $if_TA = "TA".$_SESSION['username']; 
    //echo "if ta = $if_TA<br>";
    $find_inform = $_SESSION['username'];
    //echo"find inform= $find_inform<br>";
    $check_ta = "SELECT * FROM TA WHERE TAID = '$if_TA' LIMIT 1";
    $query = mysqli_query($conn,$check_ta); 
    $res = mysqli_fetch_assoc($query);
    //echo"Res is this mf:".$res;
    if($res)// if there is an TA assigned
    {
        echo"Hello TA";
    }
    else // add new ta
    {
        $sql = "SELECT * FROM Students where StudentID = '$find_inform'";
        $back_result = mysqli_query($conn,$sql);
        $row_TA = mysqli_fetch_array($back_result);
        $TA_Dep = $row_TA['Department'];
        $TA_Fac = $row_TA['Faculty'];
        $TA_perID = $row_TA['personalID'];
        echo "$TA_Dep , $TA_Fac,$TA_perID,$if_TA";
        $add_TA = "INSERT INTO TA (TAID,TADepartment,TAFaculty,personalID) VALUES('$if_TA','$TA_Dep','$TA_Fac','$TA_perID')";
        mysqli_query($conn,$add_TA);
    }
    ?>
<h1>TA Registration</h1>
    <h2>Check the subject that you would like be the TA</h2>
        <form method="post" action = "ta_db.php">
        <table id = "table1">
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
                $find_info = sprintf("SELECT * FROM Subjects; ");
                $result = mysqli_query($conn,$find_info);
                $resultCheck = mysqli_num_rows($result);
                    
                        while($row = mysqli_fetch_assoc($result)) // rows is now the Subject table
                        {
                            echo'<tr>';
                            echo "<td><input type = 'checkbox' name ='checkbox[]' value = '".$row['sectionID']."'</td>";
                            echo '<td  style =" text-align: center;">' .$row['subjectID'].'</td>';
                            echo '<td  style =" text-align: center;">' .$row['subjectName']."</td>";
                            echo '<td  style =" text-align: center;">' .$row['sectionID']."</td>";
                            echo '<td  style =" text-align: center;">' .$row['credits']."</td>";
                            echo '<td  style =" text-align: center;">' .$row['yearRequirement']."</td>";
                            echo '<td  style =" text-align: center;">' .$row['degreeProgram']."</td>";
                            echo '<td  style =" text-align: center;">'.$row['room']."</td>";
                            echo '<td  style =" text-align: center;">' .$row['Seat']."</td>";
                            echo'</tr>';
                        }
                    echo '</table>'; 
                ?> 
        <input type = "Submit" name="Submit" id = "Submit" value= "Submit Record">
       </form>
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