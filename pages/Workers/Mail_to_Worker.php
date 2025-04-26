<?php
//$con = mysqli_connect("localhost", "root", "", "payoutforwork") or die("Connetion Failed !");
include('../admin/db_connection.php');

// Check if ID is provided in the URL
if(isset($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($con, $id);

    // Query to fetch data from the database
    $query = "SELECT * FROM worker_profiles WHERE id = '$id'";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Check if query was successful
    if($result) {
        // Check if data exists for the given ID
        if(mysqli_num_rows($result) > 0) {
            // Fetch the data as an associative array
            $row = mysqli_fetch_assoc($result);
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-900 text-white">
    <div class="container mx-auto p-16">
        <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
            <div class="col-span-4 sm:col-span-3">
                <div class="bg-gray-700 shadow rounded-lg p-6">
                    <!-- Email label and input box -->
                    <h1 for="email" class="font-semibold text-gray-300 mb-2">Email:</h1>
                    <input type="text" id="email" name="email" class="w-full bg-gray-800 text-gray-300 border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 mb-4"
                        value="<?php echo $row['email']; ?>"
                        readonly>
                </div>
            </div>
            <div class="col-span-4 sm:col-span-9">
                <div class="bg-gray-700 shadow rounded-lg px-10 py-4">
                    <!-- Form to submit message -->
                    <form action="#" method="POST" enctype="multipart/form-data">
                    <input type="text" id="email" name="email" class="hidden w-full bg-gray-800 text-gray-300 border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 mb-4"
                        value="<?php echo $row['email']; ?>"
                        readonly>
                        <h2 class="text-xl font-bold mb-4">Write Your Message</h2>
                        <!-- Textarea for message -->
                        <textarea name="message" class="w-full h-40 bg-gray-800 text-gray-300 border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 resize-none"
                            placeholder="Write your message here..."></textarea>
                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
        } else {
            // No data found for the given ID
            echo "No data found for the provided ID.";
        }
    } else {
        // Query execution failed
        echo "Error: " . mysqli_error($con);
    }

    // Free the result set
    mysqli_free_result($result);

    // Close the database connection
    mysqli_close($con);
} else {
    // ID is not provided in the URL
    echo "ID is not provided in the URL.";
}
?>