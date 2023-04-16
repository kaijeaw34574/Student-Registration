<?php 
    session_start();
    include('server.php'); 
?>

<body>

<center>
    <h1>Semester Grade</h1>
    <h2>Search the semester that you would like to have a look</h2>
<form class="d-flex" method = "post" action = "semester_db.php">
        <?php
        ?>
        <input class="form-control me-2" type="Search" name = "Search"  id = "Search" value= "".$strKeyword placeholder="Search For semester" aria-label="Search">
        <input type = "Submit" name=" Submit" id = "Submit" value= "Go!!!!">
      </form>
       

</center>
</body>