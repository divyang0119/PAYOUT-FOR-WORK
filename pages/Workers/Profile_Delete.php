<?php
//$con = mysqli_connect("localhost", "root", "", "payoutforwork") or die("Connection Failed !");

include('../admin/db_connection.php');

// Check if ID is provided in the URL
if(isset($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($con, $id);

    // Query to delete data from the database
    $query = "DELETE FROM worker_profiles WHERE id = '$id'";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Check if query was successful
    if($result) {
        // Redirect back to the admin panel or any other appropriate page
        header("Location: ../LandingPage2.php");
        exit();
    } else {
        // Deletion failed
        echo "Error deleting record: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
} else {
    // ID is not provided in the URL
    echo "ID is not provided in the URL.";
}
?>
