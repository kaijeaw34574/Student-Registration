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
        <h2>Add personal Info</h2>
    </div>

    <form action="personal_db.php" method="post">
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
            <label for="FirstName">FirstName(No initial)</label>
            <input type="text" name="FirstName">
        </div>
        <div class="input-group">
            <label for="LastName">LastName</label>
            <input type="text" name="LastName">
        </div>
        <div class="input-group">
            <label for="Gender">Gender (Male/Female (Only))</label>
            <input type="text" name="Gender">
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