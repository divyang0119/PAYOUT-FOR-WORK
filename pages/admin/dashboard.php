<?php
session_start(); // Start session at the top

// Check if the user is logged in and if the logged-in user is an admin
if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
    // User is logged in and is an admin
    // Redirect to dashboard.php
    header("Location: ./dashboard2.php");
    exit; // Terminate script execution after redirect
}
//  elseif(isset($_SESSION['user']) && isset($_SESSION['is_worker'])) {
//     // User is logged in but is not an admin
//     // Redirect to LandingPage2.php and display an alert
//     echo "<script>alert('Access denied. You are not authorized to view this page.');</script>";
//     echo "<script>window.location.href = '../LandingPage2.php';</script>";
//     exit; // Terminate script execution after redirect
//  } 
//else {
//     // User is logged in but is not an admin
    // Redirect to LandingPage2.php and display an alert
    echo "<script>alert('Access denied. You are not authorized to view this page.');</script>";
    echo "<script>window.location.href = '../LandingPage2.php';</script>";
    exit; // Terminate script execution after redirect
//}
?>
