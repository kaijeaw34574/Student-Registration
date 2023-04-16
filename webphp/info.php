<?php 
    session_start();
    include('server.php'); 
?>
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
            <p style="text-align: left,"><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
  
        <?php endif ?>

        <?php
        if($_SESSION['super'] ==1)
        {
          $info = strip_tags($_SESSION['username']);
          $find_info = sprintf("SELECT * FROM teacher where teacherID = $info");
          $result = mysqli_query($conn,$find_info);
          $rows = mysqli_fetch_array($result);
          $find_name = ("SELECT * FROM personalInfo WHERE personalID = 'T$info'");
          $results = mysqli_query($conn,$find_name);
          $fname = mysqli_fetch_array($results);
                echo "Name: ",$fname['FirstName']. "<br>";
                echo "lastName: ",$fname['LastName']. "<br>";
                echo "Gender: ",$fname['Gender']. "<br>";
                echo "Teacher ID: ",$rows['teacherID']."<br>";  
                echo "Department: ",$rows['teacherDepartment']. "<br>";
                echo "Faculty: ",$rows['teacherFaculty']."<br>"; 
                echo "Advisor ID: ",$rows['advisorID']. "<br>";
               
        }
        else
        {
         $info = strip_tags($_SESSION['username']);
         $find_info = sprintf("SELECT * FROM Students where StudentID = $info");
         $result = mysqli_query($conn,$find_info);
         $rows = mysqli_fetch_array($result);
         $find_name = ("SELECT * FROM personalInfo WHERE personalID = 'S$info'");
         $results = mysqli_query($conn,$find_name);
         $fname = mysqli_fetch_array($results);
                echo "Name: ",$fname['FirstName']. "<br>";
                echo "lastName: ",$fname['LastName']. "<br>";
                echo "Gender: ",$fname['Gender']. "<br>";
                echo "StudentID: ",$rows['StudentID']. "<br>";
                echo "GPAX: ",$rows['GPAX']."<br>"; 
                echo "Program: ",$rows['DOB']. "<br>";
                echo "Date of Birth: ",$rows['DegreeProgram']."<br>";
                echo "Status: ",$rows['Status']. "<br>";
                echo "Faculty: ",$rows['Faculty']."<br>"; 
                echo "Department: ",$rows['Department']. "<br>";
                echo "Academic Year: ",$rows['AcadYear']."<br>";  
        }
         
        ?>
    </div>