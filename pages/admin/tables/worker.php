<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../../assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png" />
    <link rel="stylesheet" href="../../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../../../assets/styles/tailwind.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Admin Panel</title>
</head>
<body class="text-blueGray-700 antialiased bg-gray-900">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root">
    <?php include('../adminnav.php'); ?>
    <!-- Header -->
    <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
        <!-- Boxes section -->
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap mt-4">
                <!-- Box 1: Workers -->
                <div class="w-full md:w-1/2 xl:w-1/4 p-4">
                    <div class="border border-gray-200 rounded p-6 bg-white">
                        <a href="#" id="showWorkers" class="text-xl font-semibold text-pink-600">Workers</a>
                    </div>
                </div>
                <!-- Workers Information Table -->
                <div id="workersData" class="w-full md:w-1/2 xl:w-3/4 p-4">
                    <table class="bg-gray-900 border-collapse rounded-md w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-300 uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-300 uppercase">Contact</th>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-300 uppercase">Profession</th>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-300 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $con = mysqli_connect("localhost", "root", "", "payoutforwork");
                            if (!$con) {
                                exit("Database Not Connected !");
                            }   
                            $q = "select * from workers_profiles";
                            $res = mysqli_query($con, $q);
                            while ($row = mysqli_fetch_object($res)) { ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300"><?php echo $row->fname . ' ' . $row->lname; ?></td>               
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300"><?php echo $row->contact; ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300"><?php echo $row->profession; ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300"><a href="#" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">View Profile</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script to show/hide workers data -->
<script>
    $(document).ready(function(){
        // Show workers data when "Workers" link is clicked
        $("#showWorkers").click(function(){
            $("#workersData").toggleClass("hidden");
        });
    });
</script>
</body>
</html>
