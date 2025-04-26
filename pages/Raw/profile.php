<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

// Retrieve form data
$email = mysqli_real_escape_string($con, $_POST['email']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);

// Query to check if worker profile exists
$query = "SELECT * FROM worker_profiles WHERE email = '$email' AND contact = '$contact'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    // Worker profile exists, redirect to profile page
    $row = mysqli_fetch_assoc($result);
    $profile_id = $row['id'];
    mysqli_close($con);
    header("Location: details.php?id=$profile_id");
    exit();
} else {
    // Worker profile not found, display error message or redirect to an error page
    echo "Worker profile not found.";
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Worker Profile Verification</title>
</head>
<body>
    <h2>Worker Profile Verification</h2>
    <form action="check_profile.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="contact">Contact:</label>
        <input type="number" id="contact" name="contact" required><br><br>
        <button type="submit" name="btnsubmit">View Profile</button>
    </form>
</body>
</html>
