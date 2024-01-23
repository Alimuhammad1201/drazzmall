<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('page-title')</title>
  <link rel="stylesheet" href="Assets/style.css" />
  <link rel="stylesheet" href="Assets/colors.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <!-- Navbar -->
    
  <!-- Navbar end -->

   <!-- Plans Start -->
   @yield('main-content')
  <!-- Plans end -->




  
  <!-- Footer -->

    
  <!-- Footer end -->

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: "#da373d",
          },
        },
      },
    };
  </script>

  <!-- AOS -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>