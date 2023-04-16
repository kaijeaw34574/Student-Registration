<?php // back end of add info
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['add_info'])) {
        $fname = mysqli_real_escape_string($conn, $_POST['FirstName']);
        $lname = mysqli_real_escape_string($conn, $_POST['LastName']);
        $Gen = mysqli_real_escape_string($conn, $_POST['Gender']);

        if (empty($fname)) {
            array_push($errors, "FirstName is required");
            $_SESSION['error'] = "FirstName is required";
        }
        if (empty($lname)) {
            array_push($errors, "LastName is required");
            $_SESSION['error'] = "LastName is required";
        }
        if (empty($Gen)) {
            array_push($errors, "Gender  is required");
            $_SESSION['error'] = "Gender  is required";
        }
        $username = $_SESSION['username']; // student id in the system
        $sql = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
        $find_PID = mysqli_fetch_assoc($sql);
        $get_email = $find_PID['email'];
        $get_PID = $find_PID['personalID'];
        $user_check_query = "SELECT * FROM personalInfo WHERE personalID = '$get_PID'  OR Email = '$get_email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);
        
        if ($result) { // if user exists
            if ($result['StudentID'] === $username)
            {
                array_push($errors, "StudentID already exists");
            }
            if ($result['personalID'] === $find_PID) 
            {
                array_push($errors, "PersonalID already exists");
            }
        }

        if (count($errors) == 0) 
        {

            $just_insert = "INSERT INTO personalInfo (personalID,FirstName,LastName,Email,Gender) VALUES ('$get_PID', '$fname', '$lname','$get_email','$Gen')";
            mysqli_query($conn, $just_insert);
            header('location: index.php');
        } 
        else {
            header("location: personal.php");
        }
    }
?>