<?php
session_start();
include('server.php');
?>
<style>

<?php 
$num_stu = count($_POST['checkbox']);
$_POST['textgrade']= array_values(array_filter($_POST['textgrade']));
echo "the real tick is $num_stu <br>";
if(isset($_POST['Submit']))
{
    for($i=0;$i<$num_stu;$i+=1)
    {
        echo"<br><br>start i is $i <br>";
        print_r($student_id);
        echo "next is  check box (studentID) <br> ";
        print_r( $_POST['checkbox']);
        $subject = $_POST['hdnsub'];
        echo "<br>Subject: $subject <br>next is text grade in array[0]<br>";
        print_r($_POST["textgrade"]);
        $GPA_to_add = $_POST['textgrade'][$i]; // 1 2 3 4
        $student_loc = $_POST['checkbox'][$i];// student_id 3xxx
        echo"<br>GPA to add is $GPA_to_add";
        echo"<br>std to add is $student_loc <br>";
        if($GPA_to_add !="" && $student_loc != "")
        {
            echo"lolllll<br>";
            $search_to_add = "UPDATE subjectGrade SET Grade = $GPA_to_add WHERE studentID = '$student_loc' and subjectID = '$subject'";
            $sql = mysqli_query($conn,$search_to_add);
            if ( false===$sql ) 
                    {
                        printf("error: %s\n", mysqli_error($conn));
                    }

        }
        echo"<br><br>i endis $i <br>";
    }
   header("location:index.php");
}
?>