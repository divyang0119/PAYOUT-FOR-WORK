<?php
session_start();
// $con = mysqli_connect("localhost", "root", "", "payoutforwork");

include('../admin/db_connection.php');

if (!$con) {
    exit("Database Not Connected....!");
}

if (!isset($_SESSION['is_worker'])) {    
    // User not logged in, redirect to login page
    header("Location: ../LandingPage2.php"); // Replace LoginPage.php with your login page
    exit;
} else {
    $worker = $_SESSION['is_worker'];
}

// Query to get the appointment history for the logged-in user
$query = "SELECT * FROM appointment_history WHERE worker_email = '$worker'";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment History</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">

<div
            class="container mx-auto mt-10 px-8 py-8 md:w-2/3 sm:w-full lg:w-2/3 sm:mx-auto md:mx-auto bg-gray-800 rounded-lg">
            <h2 class="text-2xl font-bold text-center text-gray-300 mb-4">Appointment Requests</h2>

            <form method="POST" enctype="multipart/form-data" action="../Mail_Service/Accept_appointment.php">
                <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="flex justify-between text-white items-center border-b border-gray-700 py-4 mb-4">
                    <div>
                        <p><span class="font-bold">Client Name:</span>
                            <?php echo $row["client_name"]; ?>
                        </p>
                        <p class="hidden"><span class="font-bold">Client Email:</span>
                            <input class="text-black" type="text" name="client_email" id="client_email" value="<?php echo $row["client_email"]; ?>" >
                        </p>                         
                        <p><span class="font-bold">Contact:</span>
                            <?php echo $row["contact"]; ?>
                        </p>
                        <p><span class="font-bold">Appointment Date:</span>
                            <?php echo $row["appointment_date"]; ?>
                        </p>
                        <p><span class="font-bold">Appointment Time:</span>
                            <?php echo $row["appointment_time"]; ?>
                        </p>
                        <p><span class="font-bold">Address:</span>
                            <?php echo $row["your_address"]; ?>
                        </p>
                    </div>
                    <div>
                        <input type="hidden" name="appointment_date" value="<?php echo $row["appointment_date"]; ?>">
                        <?php if (!$row["appointment_accepted"]): ?>
                        <input type="submit" name="accept" value="Accept" 
                            class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2"/>
                        <input type="submit" name="reject" value="Reject"
                            class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" />
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                <p class="text-center">No Appointment Found !!!</p>
                <?php endif; ?>

                <div class="text-center mt-4">
                    <a href="../LandingPage2.php"
                        class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Landing
                        Page</a>
                </div>
                <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Add event listener to all accept buttons
            var acceptButtons = document.querySelectorAll("input[name='accept']");
            acceptButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    // Hide the clicked accept button
                    button.style.display = "none";
                });
            });
        });
    </script> -->
            </form>
        </div>

</body>

</html>

<?php
mysqli_close($con);
?>
