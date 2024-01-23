



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget Password</title>
    <link rel="stylesheet" href="main.css" />
    <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-auth.js"></script>
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="/assets/colors.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="sweetalert2.min.css" />
    <!--Adding Bootstrap-->
    <!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    /> -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    />
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[--orange]">
    <!-- login section -->
    <section>
      <div
        class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0"
      >
        <div
          data-aos="zoom-in"
          class="w-full bg-white rounded-lg md:mt-0 sm:max-w-md xl:p-0 login-box"
        >
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <a
              href="#"
              class="flex mb-6 text-2xl font-semibold text-gray-900 justify-center"
            >
              <img
                class="w-22 h-20 mr-2"
                src="http://darazzmall.com.co/public/assets/images/logo.png"
                alt="logo"
              />
            </a>
            <h1 class="text-xl font-bold leading-tight tracking-tight">
              Forget Password to your account
            </h1>

            <!-- login form -->
            
    <form method="POST" action="{{ route('password.email') }}" id="resetPasswordForm" >
                  @csrf
            <div class="space-y-4 md:space-y-6">
              
              <div class="relative z-0 w-full mb-5 group">
            <x-text-input id="email"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder="Email address"
                  required type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                  <x-input-label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" />
            
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
            

             
              
              <x-primary-button class="w-full text-white hover:text-[#f57224] bg-[#f57224] hover:bg-white border-2 border-[#f57224] font-medium rounded-lg text-sm px-5 py-2.5 text-center" id="resetPasswordButton">
                {{ __('Reset Password Link') }}
               </x-primary-button>
              

    </form>
              <!-- <script src="script.js"></script> -->


              <script>
  // Function to show SweetAlert
  function showSuccessAlert() {
    Swal.fire({
      title: "Check Email!",
      text: "You clicked the button!",
      icon: "success"
    });
  }

  // Wait for the document to be ready
  document.addEventListener('DOMContentLoaded', function () {
    // Get the form and button elements
    const resetPasswordForm = document.getElementById('resetPasswordForm');
    const resetPasswordButton = document.getElementById('resetPasswordButton');

    // Add a click event listener to the button
    resetPasswordButton.addEventListener('click', function (event) {
    

      showSuccessAlert();
    });
  });
</script>
              <script src="script-login.js"></script>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Include the login script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->
  </body>
</html>

