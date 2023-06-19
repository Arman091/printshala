<?php
session_start();
// Retrieve form data
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['token_response'])){

$url="https://www.google.com/recaptcha/api/siteverify";
$secret='6LdlNa0mAAAAAPhUQ47Mhwt6UFUUH6Pv3gOYsDea';
$recaptcha_response=$_POST['token_response'];

$request=file_get_contents($url.'?secret='.$secret.'&response='.$recaptcha_response);
$response=json_decode($request); 

if($response->success==true){
// reCAPTCHA verification successful
// Process the form submission


$host = "localhost";
$username = "root";
$password = "PUT_YOUR_PASSWORD";
$dbname="users";


// Establish the database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$dateOfBirth = $_POST['dob'];
$gender = $_POST['gender'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];


$sql = "INSERT INTO user (`first_name`, `last_name`, `dob`, `gender`, `telephone`, `email`) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$gender', '$telephone', '$email')";

if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
$_SESSION['success'] = true;

if($_SESSION['success']){
header('Location: index.php');
}


}

else{
    echo '<script language="javascript">';
    echo 'alert("Error")';
    echo '</script>';
    echo "<script> setTimeout(\"location.href='index.php';\",00)</script>";
}

}


?>







