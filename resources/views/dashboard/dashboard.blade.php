<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/Assets/colors.css">
    <link rel="stylesheet" href="/Assets/dashstyle.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <!-- Navbar -->

    <nav class="bg-white dark:border-gray-700 shadow-lg shadow-[#F9F9F9] mb-3">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../Assets/DarazzMall-logo.png" class="h-8" alt="Darazz Mall Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap"></span>
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-transparent md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-[--orange] border-transparent  hover:bg-[#FFB688] hover:text-white  rounded"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-[--orange] border-transparent  hover:bg-[#FFB688] hover:text-white rounded">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-[--orange] border-transparent  hover:bg-[#FFB688] hover:text-white rounded">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-[--orange] border-transparent  hover:bg-[#FFB688] hover:text-white rounded">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar end -->

    <!-- Cards -->

    <div class="flex justify-center items-center">
        <div class="my-10 grid sm:grid-cols-1 md:grid-cols-2 gap-4">
            <div class="w-full cards bg-white border border-gray-200 rounded-lg shadow md:col-span-1">

                <iframe class="mx-auto"
                    src="https://lottie.host/embed/5f909ba3-6cf8-45d2-98fd-8e6105202b6c/nbsnBFahx6.json"></iframe>

                <div class="p-5">
                    <a href="/profile/{{ Auth::user()->id }}" >
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900">
                            My Profile</h5>
                    </a>
                </div>
            </div>

            <div class="w-full cards bg-white border border-gray-200 rounded-lg shadow md:col-span-1">

                <iframe class="mx-auto" src="https://lottie.host/embed/0f1df879-de1e-4dc9-b9e2-0bc4252998a2/prjhYdsKsg.json"></iframe>

                <div class="p-5">
                    <a href="/login-signup/login.html">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900">
                            My Work</h5>
                    </a>
                </div>
            </div>

            <div class="w-full cards bg-white border border-gray-200 rounded-lg shadow md:col-span-1">

                <iframe class="mx-auto" src="https://lottie.host/embed/4912b41c-6f00-4217-b603-44570d0f3260/qviZHF8E0t.json"></iframe>

                <div class="p-5">
                    <a href="/login-signup/login.html">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900">
                            Payments Wallet</h5>
                    </a>
                </div>
            </div>

            <div class="w-full cards bg-white border border-gray-200 rounded-lg shadow md:col-span-1">

                <iframe class="mx-auto" src="https://lottie.host/embed/90bcdbd9-2dc5-41d7-a4a7-cc31ba21427b/Akb38c2oH6.json"></iframe>

                <div class="p-5">
                    <a href="/login-signup/login.html">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900">
                            Your Team Referal Link</h5>
                    </a>
                </div>
            </div>

            <div class="w-full cards bg-white border border-gray-200 rounded-lg shadow md:col-span-2 sm:col-span-1">

                <iframe class="mx-auto" src="https://lottie.host/embed/4f8e2136-b3b2-45a3-897d-78bb234826b2/DT3uRqmFJp.json"></iframe>

                <div class="p-5">
                    <a href="/login-signup/login.html">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900">
                            Daraz Reward</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Cards end -->

    <!-- Footer -->



    <footer>
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="../Assets/DarazzMall-logo.png" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Darazz Mall</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 ">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-4 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a
                    href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>



    <!-- Footer end -->
    
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->
</body>
</html>