<?php
//require_once 'connect_db.php';

//connect_to_database();
// call the register() function if register_btn is clicked
$errors = array();
if (isset($_POST['register_btn'])) {
    userRegister();
}

if (isset($_POST['add_package'])) {
    addPackage();
}
if (isset($_POST['add_time'])) {
    addTimeslote();
}
if (isset($_POST['add_trainer'])) {
    addTrainer();
}

function userRegister()
{
    // call these variables with the global keyword to make them available in function
    global $connect_db, $errors, $username, $email;
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    // receive all input values from the form. Call the e() function
    // defined below to escape form values
    $newDate = date("m/d/Y", strtotime($_POST['userDob']));

    $user_fname    =  $_POST['userFirstname'];
    $user_lname       = $_POST['userLastname'];
    $user_email  =  $_POST['userEmail'];
    $user_gender  =  $_POST['userGender'];
    $user_contact  =  $_POST['userContact'];
    $user_timeslote  = $_POST['userTime'];
    $user_trainer  =  $_POST['userTrainer'];
    $user_address  =  $_POST['userAddress'];
    $user_package  =  $_POST['userPackage'];
    $user_dob  =  $newDate;

    $user_cdate  = date("m/d/Y");
    $user_joindate  = date("m/d/Y");

    $sql = "INSERT INTO users(user_fname, user_lname, user_email, user_gender, user_contact, user_timeslote, user_trainer, user_address, user_package, user_dob, user_cdate,user_joindate) VALUES 
('$user_fname', '$user_lname', '$user_email', '$user_gender', '$user_contact', '$user_timeslote', '$user_trainer', '$user_address', '$user_package', '$user_dob','$user_cdate','$user_joindate');";
    //mysqli_query($connect_db, $query);
    require_once 'connect_db.php';

    //$conn=mysqli_connect("localhost", "root", "", "fitness_club");
    $res = connection()->query($sql);

    //  if(! $retval ) {
    //     die('Could not get data: ' . $conn->error);
    //  }       // get id of the created user
    //$logged_in_user_id = mysqli_insert_id($connect_db);

    //$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
    //$_SESSION['success']  = "You are now logged in";
    header('location: member_list.php');
}

function addPackage()
{
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $package_name = $_POST['packageName'];
    $package_price = $_POST['packagePrice'];
    $package_validity = $_POST['package_validity'];
    $package_cdate = date("m/d/yy");
    require_once 'connect_db.php';
    $sql = "INSERT INTO package(package_name, package_price, package_validity, package_cdate) VALUES ('$package_name', '$package_price', '$package_validity','$package_cdate');";
    $conn = connection();
    $conn->query($sql);

     if($conn->affected_rows != 1) {
        die('Could not get data: ' . $conn->error);
     }   

    session_start();
    $_SESSION['success_message'] = "Contact form saved successfully.";
    header('location: package_list.php');
}

function addTimeslote()
{
    date_default_timezone_set("Asia/Ho_Chi_minh");
    $timeslote_time = $_POST['timeslot'] < 12 ? $_POST['timeslot'] . "AM" : ($_POST['timeslot'] - 12) . 'PM';
    $timeslote_cdate = date("m/d/Y");

    require_once 'connect_db.php';
    $sql = "INSERT INTO timeslote(timeslote_time,timeslote_cdate) VALUES ('$timeslote_time', '$timeslote_cdate');";
    $conn = connection();
    $conn-> query($sql);

     if($conn->affected_rows != 1) {
        die('Could not get data: ' . $conn->error);
     }   

    header('location: timeslot_list.php');
}

function addTrainer()
{
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $trainer_fname    =  $_POST['trainerFname'];
    $trainer_lname    =  $_POST['trainerLname'];
    $trainer_email    =  $_POST['trainerEmail'];
    $trainer_contact    =  $_POST['trainerContact'];
    $trainer_time    =  $_POST['trainerTime'];
    $trainer_address    =  $_POST['trainerAddress'];
    $trainer_cdate = date("m/d/Y");

    require_once 'connect_db.php';
    $sql = "INSERT INTO trainer(trainer_fname, trainer_lname, trainer_email, trainer_contact, trainer_timeslot, trainer_address, trainer_cdate) VALUES ('$trainer_fname', '$trainer_lname', '$trainer_email', '$trainer_contact', '$trainer_time', '$trainer_address', '$trainer_cdate')";
    $conn = connection();
    $conn->query($sql);

     if($conn->affected_rows != 1) {
        die('Could not get data: ' . $conn->error);
     }   

    header('location: trainer_list.php');
}
