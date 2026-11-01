
<?php
session_start();

if (!isset($_SESSION['fullname'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Registration Successful!</h2>

    <p>Your application has been submitted successfully.</p>

    <hr><br>

    <h3>Application Details</h3><br>

    <p><b>Full Name:</b>
    <?php echo $_SESSION['fullname']; ?></p>

    <p><b>Date of Birth:</b>
    <?php echo $_SESSION['dob']; ?></p>

    <p><b>Email:</b>
    <?php echo $_SESSION['email']; ?></p>

    <p><b>Mobile:</b>
    <?php echo $_SESSION['mobile']; ?></p>

    <p><b>Gender:</b>
    <?php echo $_SESSION['gender']; ?></p>

    <p><b>Course:</b>
    <?php echo $_SESSION['course']; ?></p>

    <p><b>Address:</b>
    <?php echo $_SESSION['address']; ?></p>

    <br>

    <button onclick="window.print()">Print Application</button>

    <a href="index.html">
        <button type="button">Back to Registration</button>
    </a>

</div>

</body>
</html>
