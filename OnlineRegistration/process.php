
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $dob = htmlspecialchars($_POST['dob'] ?? '');
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $mobile = htmlspecialchars(trim($_POST['mobile'] ?? ''));
    $gender = htmlspecialchars($_POST['gender'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
    $address = htmlspecialchars(trim($_POST['address'] ?? ''));

    // Check empty fields
    if (
        $fullname == "" || $dob == "" ||
        $email == "" || $mobile == "" ||
        $gender == "" || $course == "" ||
        $address == ""
    ) {
        die("Please fill all the required fields.");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Validate mobile number
    if (!preg_match("/^[0-9]{10}$/", $mobile)) {
        die("Invalid mobile number.");
    }

    // Store form details in session
    $_SESSION['fullname'] = $fullname;
    $_SESSION['dob'] = $dob;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['gender'] = $gender;
    $_SESSION['course'] = $course;
    $_SESSION['address'] = $address;

    // Redirect to success page
    header("Location: success.php");
    exit();

} else {

    header("Location: index.html");
    exit();

}

?>
