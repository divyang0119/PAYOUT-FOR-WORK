<nav
            class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-gray-800 flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6 border-l-0 border-t-0 border-b-0 border-2 border-gray-800 border-r-2">
            <div
                class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button
                    class="cursor-pointer text-white opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="md:block text-left md:pb-2 text-white mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href="./LandingPage2.php" id="pfw">
                    PAYOUT FOR WORK
                </a>
                <ul class="md:hidden items-center flex flex-wrap list-none ">
                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block py-1 px-3" href="#"
                            onclick="openDropdown(event,'notification-dropdown')"></a>
                        <div class="hidden bg-blueGray-800 text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="notification-dropdown">
                            <a href="auth/login.php"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-300">Login</a><a
                                href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-300">Help
                                action</a><a href="./LandingPage.php"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-200">Log
                                Out
                                else here</a>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>

                        </div>
                    </li>
                    <li class="inline-block relative">
                        <a class="text-blueGray-200 block" href="#pablo"
                            onclick="openDropdown(event,'user-responsive-dropdown')">
                            <div class="items-center flex">
                                <!-- <span
                                    class="w-12 h-12 text-sm text-white bg-gray-800 inline-flex items-center justify-center rounded-full"><img
                                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                        src="img/user.png" /></span> -->
                            </div>
                        </a>
                        <div class="hidden bg-gray-800 text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="user-responsive-dropdown">
                            <a href="auth/login.php"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-300">Login</a><a
                                href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-300">Help
                            </a>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="./LandingPage.php"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-200">Log
                                out
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto bg-gray-800 p-4 overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                    id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-800">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <a class="md:block text-left md:pb-2 text-blueGray-200 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                                    href="./LandingPage.php">
                                    PAYOUT FOR WORK
                                </a>
                            </div>
                            <div class="w-6/12 flex justify-end">
                                <button type="button"
                                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                    onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                   
                    <!-- Heading -->
                    <h6
                        class="md:min-w-full text-blueGray-100 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                        User
                    </h6>
                    <!-- Navigation -->

                    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                        <li class="items-center">
                            <a href="./Find2.php"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-200 hover:text-blueGray-500">
                                <i class="fas fa-tv mr-2 text-sm text-blueGray-300"></i>
                                Dashboard
                            </a>
                        </li>                                            
                    </ul>

                    <!-- Divider -->
                    <hr class="my-4 md:min-w-full" />
                    <!-- Heading -->
                    <h6
                        class="md:min-w-full text-blueGray-100 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                        Worker
                    </h6>
                    <!-- Navigation -->
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                        <li class="items-center">
                            <a href="auth/Worker_Login.php"
                                class="text-blueGray-200 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                                <i class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"></i>
                                Login
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="./New_Worker.php"
                                class="text-blueGray-200 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                                <i class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i>
                                Register
                            </a>
                        </li>

                        <!-- <li class="items-center">
                            <a href="auth/register.php"
                                class="text-blueGray-200 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                                <i class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i>
                                <i class="fa-regular fa-address-card text-blueGray-300 mr-2 text-sm"></i>
                                Post a job
                            </a>
                        </li> -->
                    </ul>

                    <!-- Divider -->
                    <hr class="my-4 md:min-w-full" />
                    <!-- Heading -->
                    <!-- <h6
                        class="md:min-w-full text-blueGray-200 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                        Admin
                    </h6> -->
                    <!-- Navigation -->

                    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                        <li class="items-center">
                            <a href="./LandingPage2.php"
                                class="text-blueGray-200 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                                <i class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"></i>
                                Landing Page
                            </a>
                        </li>

                        <!-- <li class="items-center">
                            <a href="./Worker_Profile2.php"
                                class="text-blueGray-200 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                                <i class="fas fa-user-circle text-blueGray-300 mr-2 text-sm"></i>
                                 Profile Page
                            </a>
                        </li> -->
                    </ul>

                    <!-- Divider -->

                    </ul>
                </div>
            </div>
        </nav>