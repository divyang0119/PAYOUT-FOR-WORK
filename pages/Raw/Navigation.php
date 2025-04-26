<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="../assets/styles/tailwind.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
          href="./LandingPage.php">PAYOUT FOR WORK</a><button
          class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
          type="button" onclick="toggleNavbar('example-collapse-navbar')">
          <i class="text-white fas fa-bars"></i>
        </button>
      </div>
      <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
        id="example-collapse-navbar">
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
          <li class="inline-block relative">
            <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="#" onclick="openDropdown(event,'demo-pages-dropdown')">
              Services
            </a>
            <!-- <a id="nav-opt" class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="#">
              Services
            </a> -->
            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
              id="demo-pages-dropdown">
              <!-- <span
                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                Admin
              </span>
              <a href="./admin/dashboard.php"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Dashboard
              </a> -->

              <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
              <span
                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                User
              </span>
              <a href="./auth/login.php"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Login
              </a>
              <a href="./Find2.php"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Find
              </a>
              <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
              <span
                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                Worker
              </span>
              <a href="./New_Worker.php"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Join As a Worker
              </a>
              <a href="./ContactUs.php"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Profile
              </a>
            </div>
          </li>
          <li class="flex items-center">
            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
              id="example-collapse-navbar">
              <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                <?php             

             // Check if user is logged in
             if (isset($_SESSION['user'])) {  
          ?>
                <li class="flex items-center">
                  <button
                    class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                    type="button"><a href="./auth/signout.php">
                      Logout
                      <i class="fa-solid fa-right-to-bracket"></i></i> </a>
                  </button>
                </li>
                <?php
             } else {
          ?>
                <li class="flex items-center">
                  <button
                    class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                    type="button"><a href="./auth/login.php">
                      Login
                      <i class="fa-solid fa-right-to-bracket"></i></i> </a>
                  </button>
                </li>
                <?php
             } 
          ?>

              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script>
      
    /* Function for opning navbar on mobile */
    // function toggleNavbar(collapseID) {
    //     document.getElementById(collapseID).classList.toggle("hidden");
    //     document.getElementById(collapseID).classList.toggle("block");
    // }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }

  </script>
  <!-- <script>
    $(document).ready(function(){
        // Show feedback data when "Feedback" link is clicked
        $("#nav-opt").click(function(){
            $("#demo-pages-dropdown").toggleClass("hidden");
        });
    });
</script> -->
</body>

</html>