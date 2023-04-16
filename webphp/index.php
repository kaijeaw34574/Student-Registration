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
  
?>
<style>
    #bottom {
        position: absolute;
        bottom: 0;
        left: 0;
      }
  </style>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="ta.php">Register as TA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addinfo_student.php">addinfo_student</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="subjectregis.php">Subject_Registration</a></li>
            <li><a class="dropdown-item" href="info.php">info</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="allstudent.php">All students registered</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="search_to_add_grade.php">Add Student Grade</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="semester_grade.php">Semester Grade</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="teacher.php">Register as Teacher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="personal.php">Add personal Info</a>
        </li>
      </ul>
      <form class="d-flex" method = "post" action = "search_result.php">
        <input class="form-control me-2" type="Search" name = "Search"  id = "Search" value= "".$strKeyword placeholder="Search For Subjects" aria-label="Search">
        <input type = "Submit" name=" Submit" id = "Submit" value= "Go!!!!">
      </form>
    </div>
  </div>
</nav>


<body>
    
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
          <div id = "bottom">
            <p style="text-align: left,"><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
          <div id = "bottom">
        <?php endif ?>
    </div>
        <?php 
       // echo "hi: you are num()".$_SESSION['super']
        ?>
</body>
</html>