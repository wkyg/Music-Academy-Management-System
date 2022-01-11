<?php
$emailCrash = false;
$phoneCrash = false;
session_start();
$response = array();
$userID = $_SESSION["userID"];
$child_id = $_GET["child_id"];
$childName = $_POST['childName'];
$childAge = $_POST['childAge'];
$childCourse = $_POST['childCourse'];
$childTeacher = $_POST['childTeacher'];
$childStatus = $_POST['childStatus'];

$conn = mysqli_connect("localhost", "root", "", "music_academy");

if ($conn) {

    $sql = "SELECT * FROM CHILD LEFT JOIN PARENT ON CHILD.PARENT_ID = PARENT.PARENT_ID WHERE CHILD_ID = '$child_id'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $db_child_name = $row["CHILD_NAME"];
        $db_child_age = $row["CHILD_AGE"];
        $db_child_status = $row["CHILD_STATUS"];
        $db_child_teacher = $row["TEACHER_ID"];
        $db_child_course = $row["COURSE_ID"];
        $db_child_parent = $row["PARENT_STATUS"];
    }

    // IF NOTHING CHANGE
    if ($childName == $db_child_name && $childAge == $db_child_age && $childStatus ==  $db_child_status && $childCourse ==  $db_child_course && $childTeacher ==  $db_child_teacher) {
        $response['title']  = 'Nothing Changed!';
        $response['status']  = 'info';
        $response['message'] = 'All info are same!';
    }

    // IF GOT CHANGE, UPDATE CHILD
    else {
        // IF PARENT IS INACTIVE, ALL CHILDREN CANNOT UPDATE INFO
        if ($db_child_parent == 'inactive') {
            $response['title']  = 'Error!';
            $response['status']  = 'error';
            $response['message'] = 'Child cannot update due to inactive parent!';
        } else {
            $sql2 = "UPDATE CHILD SET CHILD_NAME ='$childName', CHILD_AGE = '$childAge', CHILD_STATUS = '$childStatus', TEACHER_ID = '$childTeacher' , COURSE_ID = '$childCourse' WHERE CHILD_ID = '$child_id' ";

            if (mysqli_query($conn, $sql2)) {
                $response['title']  = 'Done!';
                $response['status']  = 'success';
                $response['message'] = 'Child edited!';
            } else {
                $response['title']  = 'Error!';
                $response['status']  = 'error';
                $response['message'] = 'mysql error';
            }
        }
    }
} else {
    die("FATAL ERROR");
}

$conn->close();
echo json_encode($response);
