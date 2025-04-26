<?php 
//$con = mysqli_connect("localhost", "root", "", "payoutforwork");

include('../admin/db_connection.php');
if (!$con) {
    exit("Database Not Connected....!");
}

$row = null;
if (isset($_REQUEST['id'])) {
    $worker_id = mysqli_real_escape_string($con, $_REQUEST['id']);
    $query = "SELECT * FROM worker_profiles WHERE id=$worker_id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['Update'])) {
    // Validate and sanitize inputs
    $worker_id = mysqli_real_escape_string($con, $_GET['id']);
    $profile_picture = $_FILES['profilepicture']['name']; // Assuming you're storing file name
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['number']; // Assuming 'number' is for contact
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $profession = $_POST['profession'];
    $experience = $_POST['experience'];

    // Construct the query
    $query = "UPDATE worker_profiles SET ";
    if (!empty($profile_picture)) {
        $query .= "profile_picture='$profile_picture', ";
    }
    $query .= "email='$email', fname='$fname', lname='$lname', contact='$contact', gender='$gender', address='$address', city='$city', country='$country', zipcode='$zipcode', profession='$profession', experience='$experience' WHERE ID=$worker_id";
    // Execute the query
    mysqli_query($con, $query);

    // Redirect to landing page
    header("Location:../Worker_Profile2.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../assets/img/id-card.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../pages/img/id-card.png" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> UPDATE WORKER | PAYOUT FOR WORK</title>
</head>

<body class="text-white bg-gray-700 antialiased">
    <div id="root">
        <div class="relative md:ml-64">
            <!-- Header -->            
            <div class="px-4 md:px-10 w-full " style="margin-right:20px;">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-8/12 px-4 ">
                        <form method="POST" enctype="multipart/form-data">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-800 border-0 demo">
                                <div class="rounded-t bg-gray-800 mb-0 px-6 py-6">
                                    <div class="text-center flex justify-between">
                                        <h6 class="text-gray-300 mt-2 text-xl font-bold">
                                            <!-- <i class="fa-solid fa-user-plus"></i> -->
                                            Update Worker's Profile
                                        </h6>                                        
                                    </div>
                                </div>
                                <hr class="mt-2 border-b-1 mb-2 border-blueGray-300" />
                                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Worker Information
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Profile Picture
                                                </label>
                                                <input type="file" name="profilepicture" value="<?php echo $row['profile_picture']; ?>"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent 
                                                    rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Email address
                                                </label>
                                                <input type="email" name="email" 
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 bg-transparent text-blueGray-200  rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="<?php echo $row['email']; ?>" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    First Name
                                                </label>
                                                <input type="text" name="fname"
                                                    class="border-2 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent border-gray-400 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="<?php echo $row['fname']; ?>" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Last Name
                                                </label>
                                                <input type="text" name="lname"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="<?php echo $row['lname']; ?>" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Contact
                                                </label>
                                                <input type="number" name="number"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="<?php echo $row['contact']; ?>" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                for="Gender">
                                                Gender
                                            </label>
                                            <select id="gender" name="gender"
                                                class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">                                                
                                                <option class="bg-gray-700" value="Male">Male
                                                </option>
                                                <option class="bg-gray-700" value="Female">Female</option>
                                                <option class="bg-gray-700" value="Other">Other</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mt-6 border-b-1 border-blueGray-300" />

                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Contact Information
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Address
                                                </label>
                                                <input type="text" name="address"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="<?php echo $row['address']; ?>" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    City
                                                </label>
                                                <input type="text" name="city"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="<?php echo $row['city']; ?>" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Country
                                                </label>
                                                <input type="text" name="country"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="<?php echo $row['country']; ?>" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Postal Code
                                                </label>
                                                <input type="text"  name="zipcode"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="<?php echo $row['zipcode']; ?>" />
                                            </div>

                                        </div>

                                        <div class="w-full lg:w-6/12 px-4">
                                            <!-- Profession select control -->
                                            <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                for="profession">
                                                Profession
                                            </label>
                                            <select id="profession" name="profession"
                                                class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                <option value="" disabled selected name="profession">Select profession
                                                </option>
                                                <option class="bg-gray-700 " value="Developer">Developer</option>
                                                <option class="bg-gray-700 " value="Designer">Designer</option>
                                                <option class="bg-gray-700 " value="Engineer">Engineer</option>
                                                <option class="bg-gray-700 " value="constructionWorker">Construction Worker</option>
                                                <option class="bg-gray-700 " value="electrician">Electrician</option>
                                                <option class="bg-gray-700 " value="plumber">Plumber</option>
                                                <option class="bg-gray-700 " value="carpenter">Carpenter</option>
                                                <option class="bg-gray-700 " value="welder">Welder</option>                                                
                                                <option class="bg-gray-700 " value="mechanic">Mechanic</option>                                                
                                                <option class="bg-gray-700 " value="doctor">Doctor</option>
                                                <option class="bg-gray-700 " value="teacher">Teacher</option>                                                                                                                                                                                               
                                                <option class="bg-gray-700 " value="physical_therapist">Physical Therapist</option>
                                                <option class="bg-gray-700 " value="interior_designer">Interior Designer</option>
                                                
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                        
                                        <div class="w-full lg:w-6/12 px-4">
                                            <!-- Work Experience select control -->
                                            <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                for="work-experience">
                                                Work Experience
                                            </label>
                                            <select id="work-experience" name="experience"
                                                class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                <option class="bg-gray-700" value="" disabled selected>Select work
                                                    experience</option>
                                                <option class="bg-gray-700" value="Less than 1 year">Less than 1 year
                                                </option>
                                                <option class="bg-gray-700" value="1-3 years">1-3 years</option>
                                                <option class="bg-gray-700" value="3-5 years">3-5 years</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div> 
                                        <div class="w-full lg:w-6/12 px-4 my-3">                                    
                                        <input type="submit" name="Update"
                                            class=" bg-green-500 text-white active:bg-lightBlue-500 hover:bg-green-700 w-40 font-bold uppercase text-xs px-8 py-4 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                            value="UPDATE">                         
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>

            </div>
        </div>
    </div>
    
</body>

</html>
