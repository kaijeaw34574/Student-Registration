<?php // back end of add info
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['add_info'])) {
        $DPG = mysqli_real_escape_string($conn, $_POST['DegreeProgram']);
        $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
        $ID_num = mysqli_real_escape_string($conn, $_POST['ID_num']);
        $FAC = mysqli_real_escape_string($conn, $_POST['Faculty']);
        $DEP = mysqli_real_escape_string($conn, $_POST['Department']);
        $ACAD = mysqli_real_escape_string($conn, $_POST['Aca_year']);
        $ROOM = mysqli_real_escape_string($conn, $_POST['Room']);

        if (empty($DPG)) {
            array_push($errors, "DegreeProgram is required");
            $_SESSION['error'] = "DegreeProgram is required";
        }
        if (empty($DOB)) {
            array_push($errors, "Date of Birth is required");
            $_SESSION['error'] = "Date of Birth is required";
        }
        if (empty($ID_num)) {
            array_push($errors, "Identification Number is required");
            $_SESSION['error'] = "Identification Number is required";
        }
        if (empty($FAC)) {
            array_push($errors, "Faculty is required");
            $_SESSION['error'] = "Faculty is required";
        }
        if (empty($DEP)) {
            array_push($errors, "Department is required");
            $_SESSION['error'] = "Department is required";
        }
        if (empty($ACAD)) {
            array_push($errors, "Academic Year is required");
            $_SESSION['error'] = "Academic Year is required";
        }
        if (empty($ROOM)) {
            array_push($errors, "Room is required");
            $_SESSION['error'] = "Room is required";
        }
        $username = $_SESSION['username']; // student id in the system
        $sql = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
        $find_PID = mysqli_fetch_assoc($sql);
        $check_per_id = $find_PID['personalID'];
        $user_check_query = "SELECT * FROM Students WHERE StudentID = '$username'  OR personalID = '$check_per_id' LIMIT 1";
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

            $just_insert = "INSERT INTO Students (StudentID,Status,personalID,DegreeProgram,DOB,IdentificationNum,Faculty,Department,AcadYear,Room,AdvisorID,GPAX) VALUES ('$username', 'Normal', '$check_per_id','$DOB','$DPG','$ID_num','$FAC','$DEP','$ACAD','$ROOM','T123456',NULL)";
            mysqli_query($conn, $just_insert);
            header('location: index.php');
        } 
        else {
            header("location: addinfo_student.php");
        }
    }
?>