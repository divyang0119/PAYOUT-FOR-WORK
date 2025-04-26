<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Worker</title>
    <!-- <link rel="stylesheet" href="./css/services.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #141b2d;
            color: #fff;
        }

        .find-worker-form {
            background-color: #111827;
            padding: 20px;
            margin: 100px auto;
            max-width: 400px;
            border-radius: 8px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #fff;
        }

        #profession,
        #zipcode {
            width: 80%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #4768a2;
            border-radius: 5px;
            background-color: #0e1625;
            color: #fff;
        }

        .find-btn {
            background-color: #87CEEB;
            /* Sky Blue */
            color: #141b2d;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .find-btn:hover {
            background-color: #4682b4;
            /* Darker shade of Sky Blue */
        }

        table {
            width: fit-content;
            border-collapse: collapse;
            margin-top: 20px;
            color: #ffffff;
        }

        th {
            border: none;
            padding: 10px;
            text-align: left;
        }

        td {
            border: none;
            padding: 10px;
            text-align: left;
            width: 30%;
        }

        th {
            background-color: transparent;
            color: #3498db;
            /* Blue color */
            font-weight: bold;
            width: 30%;
            /* Set a fixed width for labels */
        }

        td {
            /* background-color: #3a5572; */
            /* Darker blue */
            margin-top: 5px;
        }

        tr {
            display: block;
            margin-bottom: 10px;
        }

        #main {
            margin-top:-50px;
        }

        .profiles {
            margin-top:30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            
        }

        .profile-box {
            width:fit-content;
            word-wrap: break-word;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            text-align: center;
            background-color: #111827;
            font-weight:bolder;
        }

        .profile-box img {
            border-radius: 10%;
            margin-bottom: 20px;
            margin:0 25%;
        }

        .profile-box p {
            margin: 5px 0;
        }
        .appointment-btn {
    background-color: #38A169;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.appointment-btn:hover {
    background-color: #2C7A7B;
}
    </style>
    <script>
        $(document).ready(function () {
            $(".login-btn").click(function () {
                $("#main").slideDown("slow");
            });
        });
    </script>
</head>

<body class="bg-blueGray-700">
    <?php include('./navigation/links.php'); ?>
    <?php include('./navigation/vertical_navbar.php'); ?>
    <form class="find-worker-form" method="POST">
        <label for="profession">Worker's Profession:</label>
        <select id="profession" name="profession">
            <option value="Select">Select</option>
            <option value="constructionWorker">Construction Worker</option>
            <option value="electrician">Electrician</option>
            <option value="plumber">Plumber</option>
            <option value="carpenter">Carpenter</option>
            <option value="welder">Welder</option>
            <option value="machinist">Machinist</option>
            <option value="mechanic">Mechanic</option>
            <option value="nurse">Nurse</option>
            <option value="doctor">Doctor</option>
            <option value="teacher">Teacher</option>
            <option value="firefighter">Firefighter</option>
            <option value="policeOfficer">Police Officer</option>
            <option value="chef">Chef</option>
            <option value="bartender">Bartender</option>
            <option value="waiter">Waiter/Waitress</option>
            <option value="physical_therapist">Physical Therapist</option>
            <option value="interior_designer">Interior Designer</option>
            <option value="elementary_teacher">Elementary Teacher</option>
        </select>

        <label for="zip-code">Zip Code:</label>
        <input type="number" id="zipcode" name="zipcode" placeholder="Enter zip code" required>

        <button type="submit" class="find-btn" name="find">Find</button>
    </form>
    <?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

if (isset($_POST['find'])) {
    // Validate and sanitize inputs
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
    $profession = mysqli_real_escape_string($con, $_POST['profession']);

    // Fetch data based on ZIP code and profession
    $q = "SELECT * FROM worker_profiles WHERE zipcode = ? AND profession = ?";

    
    $stmt = mysqli_prepare($con, $q);
    mysqli_stmt_bind_param($stmt, 'ss', $zipcode, $profession);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    // Display fetched data
if (mysqli_num_rows($result) > 0) {
    echo "<div id='main'>";
        echo "<h2 align='center' style='font-size:25px;'>{$profession} in ZIP Code {$zipcode}:</h2>";
        echo "<div class='profiles'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='profile-box'>";
            echo "<table>";
            echo "<tr><td><img src='./uploaded/profilepicture/{$row['profile_picture']}' alt='Profile Picture' height='100' width='100' ></td></tr>";
            echo "<tr><td><p>{$row['fname']} {$row['lname']}</p></td></tr>";
            echo "<tr><td><p>Contact: {$row['contact']}</p></td></tr>";
            echo "<tr><td><p>Email: {$row['email']}</p></td></tr>";
            echo "<tr><td><p>Profession: {$row['profession']}</p></td></tr>";
            echo "<tr><td><button class='appointment-btn'><a href='appoint.php?id={$row['id']}'>Make Appointment</a></button>"; // Appointment button
            echo "</table>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p align='center' class='text-xs uppercase py-3 font-bold'>No {$profession} Found for ZIP Code {$zipcode}</p>";
    }



    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>

</body>

</html>