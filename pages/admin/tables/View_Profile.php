
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8fafc;
            color: #1a202c;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #edf2f7;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-data {
            margin-bottom: 20px;
        }

        .profile-data p {
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-delete {
            background-color: #e53e3e;
            color: #fff;
            margin-right: 10px;
        }

        .btn-delete:hover {
            background-color: #c53030;
        }

        .btn-send-mail {
            background-color: #48bb78;
            color: #fff;
        }

        .btn-send-mail:hover {
            background-color: #38a169;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
// Step 1: Get the ID from the URL
$id = $_GET['id']; // Assuming your URL is like: example.com/page.php?id=123

// Step 2: Query the database to retrieve the data
// Replace this with your actual database connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payoutforwork";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data based on the ID
$sql = "SELECT * FROM worker_profiles WHERE id = $id";
$result = $conn->query($sql);

// Step 3: Display the data
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<img src='" .'/uploaded/profilepicture'. $row["profile_picture"] . "'><br>";
        echo "First Name: " . $row["fname"] . "<br>";
        echo "Last Name: " . $row["lname"] . "<br>";
        echo "Gender: " . $row["gender"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Contact: " . $row["contact"] . "<br>";
        echo "Profession: " . $row["profession"] . "<br>";
        echo "Experience: " . $row["experience"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "City: " . $row["city"] . "<br>";
        echo "Country: " . $row["country"] . "<br>";
        echo "Postal Code: " . $row["zipcode"] . "<br>";
        
        // Delete button
        echo "<form action='delete.php' method='POST'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='Delete'>";
        echo "</form>";
        
        // Send Mail button
        echo "<form action='sendmail.php' method='POST'>";
        echo "<input type='hidden' name='email' value='" . $row['email'] . "'>";
        echo "<input type='submit' value='Send Mail'>";
        echo "</form>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
        <!-- <div class="profile-data">
            <img src="profilepicture.jpg" alt="Profile Picture">
            <p><strong>First Name:</strong> John</p>
            <p><strong>Last Name:</strong> Doe</p>
            <p><strong>Gender:</strong> Male</p>
            <p><strong>Email:</strong> john@example.com</p>
            <p><strong>Contact:</strong> +1234567890</p>
            <p><strong>Profession:</strong> Developer</p>
            <p><strong>Experience:</strong> 5 years</p>
            <p><strong>Address:</strong> 123 Main Street</p>
            <p><strong>City:</strong> Anytown</p>
            <p><strong>Country:</strong> Country</p>
            <p><strong>Postal Code:</strong> 12345</p>
        </div> -->
        <!-- <form action="delete.php" method="POST">
            <input type="hidden" name="id" value="123">
            <button type="submit" class="btn btn-delete">Delete</button>
        </form>
        <form action="sendmail.php" method="POST">
            <input type="hidden" name="email" value="john@example.com">
            <button type="submit" class="btn btn-send-mail">Send Mail</button>
        </form> -->
    </div>
</body>
</html>
