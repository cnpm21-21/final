<?php

if (isset($_POST['update_admin'])) {
  adminUpdate();
}

function adminUpdate()
{

  $admin_id = $_POST['admin_id'];
  $admin_name = $_POST['admin_name'];
  $admin_email = $_POST['admin_email'];
  $admin_contact = $_POST['admin_contact'];
  $admin_oldgpic = $_POST['admin_oldgpic'];
  //die();
  $c_image = $_FILES['admin_picture']['name'];
  $c_image_temp = $_FILES['admin_picture']['tmp_name'];

  if ($c_image_temp != "") {
    move_uploaded_file($c_image_temp, "../images/$c_image");
    $sql = "update admin set admin_name='$admin_name', admin_email= '$admin_email', admin_contact = '$admin_contact' , admin_picture= '$c_image'  where admin_id='$admin_id'";

    unlink("../images/$admin_oldgpic");
  } else {
    //echo "dd"; die();
    // $sql ="update admin set admin_name='$admin_name', admin_email='$admin_email', where admin_id='$admin_id'";

    $sql = "UPDATE admin SET admin_name= '$admin_name', admin_email= '$admin_email', admin_contact = '$admin_contact' WHERE admin_id = '$admin_id' ";
  }

  require_once 'connect_db.php';
  $retval = mysqli_query($conn, $sql);

  //  if(! $retval ) {
  //     die('Could not get data: ' . mysql_error());
  //  }       // get id of the created user

  header('location: profile.php');
}
if (isset($_POST['btn_add'])) {
  changePassword();
}

function changePassword()
{

  // $admin_id = $_POST['admin_id'];
  $admin_name = $_POST['admin_name'];
  $admin_pass = $_POST['admin_pass'];
  // $admin_email = $_POST['admin_email'];
  // $admin_contact = $_POST['admin_contact'];
  //die();

  $sql = "UPDATE admin SET admin_name= '$admin_name', admin_password = '$admin_pass'";


  require_once 'connect_db.php';
  $retval = mysqli_query($conn, $sql);

  //  if(! $retval ) {
  //     die('Could not get data: ' . mysql_error());
  //  }       // get id of the created user

  header('location: profile.php');
}


if (isset($_POST['add_trainer'])) {
  addTrainer();
}


if (isset($_POST['edit_package'])) {
  updatePackage();
}

function updatePackage()
{
  $package_id = $_POST['package_id'];
  $package_name = $_POST['packageName'];
  $package_price = $_POST['packagePrice'];
  $package_validity = $_POST['package_validity'];

  require_once 'connect_db.php';
  $sql = "UPDATE package SET package_name= '$package_name', package_price= '$package_price', package_validity = '$package_validity' WHERE package_id = '$package_id' ";

  $conn = connection();
  $conn->query($sql);
  if ($conn->affected_rows != 1) {
    die('Could not get data: ' . $conn->error);
  }

  header('location: package_list.php');
}

if (isset($_POST['btn_tupdate'])) {
  updateTrainer();
}

function updateTrainer()
{
  $trainer_id = $_POST['trainer_id'];
  $trainer_fname = $_POST['trainer_fname'];
  $trainer_lname = $_POST['trainer_lname'];
  $trainer_email = $_POST['trainer_email'];
  $trainer_contact = $_POST['trainer_contact'];
  $trainer_gender = $_POST['trainer_gender'];
  $trainer_aadhar = $_POST['trainer_aadhar'];
  $trainer_time_id   = $_POST['trainer_time_id'];
  $trainer_address   = $_POST['trainer_address'];

  //die();

  $sql = "UPDATE trainer SET trainer_fname= '$trainer_fname', trainer_lname= '$trainer_lname', trainer_email = '$trainer_email',trainer_contact = '$trainer_contact',trainer_gender = '$trainer_gender',trainer_aadhar = '$trainer_aadhar',trainer_time_id = '$trainer_time_id',trainer_address = '$trainer_address' WHERE trainer_id = '$trainer_id' ";


  require_once 'connect_db.php';
  $retval = mysqli_query($conn, $sql);


  //  if(! $retval ) {
  //     die('Could not get data: ' . mysql_error());
  //  }       // get id of the created user

  header('location: trainer-list.php');
}
if (isset($_POST['btn_time'])) {
  updateTime();
}

function updateTime()
{
  $timeslote_id = $_POST['timeslote_id'];
  $timeslote_time = $_POST['timeslote_time'];

  //die();

  $sql = "UPDATE timeslote SET timeslote_time= '$timeslote_time' WHERE timeslote_id = '$timeslote_id' ";


  require_once 'connect_db.php';
  $retval = mysqli_query($conn, $sql);

  //  if(! $retval ) {
  //     die('Could not get data: ' . mysql_error());
  //  }       // get id of the created user

  header('location: timeslote-list.php');
}


if (isset($_POST['btn_uupdate'])) {
  updateUser();
}

function updateUser()
{
  $insData = $_POST;
  //$user_id =  $insData['user_id'];
  $new =   array_splice($insData, 0, 1); // user id
  $array = \array_diff($insData, [""], ["12"]); // hole array
  //$first_color = unset($insData["user_id"]); 
  $user_id = $new['user_id'];
  //print_r($_POST);
  print_r($array);
  //die();
  $user_id = $_POST['user_id'];
  $user_fname = $_POST['userFirstname'];
  $user_lname = $_POST['userLastname'];
  $user_email = $_POST['userEmail'];
  $user_contact = $_POST['userContact'];
  $user_dob = $_POST['userDob'];
  $user_gender   = $_POST['userGender'];
  $user_timeslote   = $_POST['userTime'];
  $user_trainer   = $_POST['userTrainer'];
  $user_package   = $_POST['userPackage'];
  $user_address   = $_POST['userAddress'];
  //die();

  // $columns = implode(", ", array_keys($array));
  // $escaped_values = array_map(mysqli_real_escape_string(), array_values($array));
  // $values  = implode("','", $escaped_values);

  //$sql = "UPDATE users SET ($columns) VALUES ('$values')  WHERE user_id = '$user_id' ";


  $sql = "UPDATE users SET user_fname='$user_fname',user_lname='$user_lname',user_email='$user_email',user_gender='$user_gender',user_contact='$user_contact',user_timeslote='$user_timeslote',user_trainer='$user_trainer',user_address='$user_address',user_dob='$user_dob',user_package='$user_package' WHERE user_id = '$user_id'";
  require_once 'connect_connect_db.php';
  $conn = connection();
  $conn->query($sql);

  if ($conn->affected_rows != 1) {
    die('Could not get data: ' . $conn->error);
  }       // get id of the created user

  header('location: member_list.php');
}
