<?php
if (isset($_REQUEST['id'])) {
    userDelete();
}

if (isset($_REQUEST['packid'])) {
    packageDelete();
}

if (isset($_REQUEST['timeid'])) {
    timesloteDelete();
}

if (isset($_REQUEST['trainerid'])) {
    trinarDelete();
}

function userDelete()
{
    $user_id = $_REQUEST['id'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $user_udate = date("m/d/yy");
    require_once 'connect_db.php';
    $sql = "DELETE FROM users WHERE user_id = '$user_id' ";
    $conn = connection();
    $conn->query($sql);

    if($conn->affected_rows != 1 ) {
       die('Could not get data: ' . $conn->error);
    }   

    header('location: member_list.php');
}

function packageDelete()
{
    $package_id = $_REQUEST['packid'];
    require_once 'connect_db.php';
    $sql = "DELETE FROM package WHERE package_id = '$package_id' ";
    $conn = connection();
    $conn->query($sql);

    if($conn->affected_rows != 1) {
       die('Could not get data: ' . $conn->error);
    }   

    header('location: package_list.php');
}

function timesloteDelete()
{
    $timeslote_id = $_REQUEST['timeid'];
    require_once 'connect_db.php';
    $sql = "DELETE FROM timeslote WHERE timeslote_id = '$timeslote_id'";
    $conn = connection();
    $conn->query($sql);

    if($conn->affected_rows != 1) {
       die('Could not get data: ' . $conn->error);
    }   

    header('location: timeslot_list.php');
}


function trinarDelete()
{
    $trainer_id = $_REQUEST['trainerid'];
    require_once 'connect_db.php';

    $sql = "DELETE FROM trainer WHERE trainer_id = '$trainer_id'";
    $conn = connection();
    $conn->query($sql);

    if($conn->affected_rows != 1) {
       die('Could not get data: ' . $conn->error);
    }   

    header('location: trainer_list.php');
}
