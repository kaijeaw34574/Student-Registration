<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add in formation information Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="addinfo_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="DegreeProgram">DegreeProgram(inter/normal)</label>
            <input type="text" name="DegreeProgram">
        </div>
        <div class="input-group">
            <label for="DOB">Date of Birth(dd/mm/yy)</label>
            <input type="text" name="DOB">
        </div>
        <div class="input-group">
            <label for="ID_num">Identification Number</label>
            <input type="text" name="ID_num">
        </div>
        <div class="input-group">
            <label for="Faculty">Faculty</label>
            <input type="text" name="Faculty">
        </div>
        <div class="input-group">
            <label for="Department">Department </label>
            <input type="text" name="Department">
        </div>
        <div class="input-group">
            <label for="Aca_year">Academic Year </label>
            <input type="text" name="Aca_year">
        </div>
        <div class="input-group">
            <label for="Room">Room (A/B)</label>
            <input type="text" name="Room">
        </div>
        <div class="input-group">
            <button type="submit" name="add_info" class="btn">Add information</button>
        </div>
    </form>
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