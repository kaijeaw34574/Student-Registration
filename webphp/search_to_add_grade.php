<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
    if($_SESSION['super'] != 1)
    {
        echo "Sorry, Only Teacher can add grade";

    }
?>

<body>

<center>
    <h1>Add Student Grade</h1>
    <h2>Search the subject that you would like to add</h2>
<form class="d-flex" method = "post" action = "add_grade.php">
        <?php 
        if($_SESSION['super'] != 1 )
        header('location:index.php');
        ?>
        <input class="form-control me-2" type="Search" name = "Search"  id = "Search" value= "".$strKeyword placeholder="Search For Subjects to add grade" aria-label="Search">
        <input type = "Submit" name=" Submit" id = "Submit" value= "Go!!!!">
      </form>
       

</center>
</body>