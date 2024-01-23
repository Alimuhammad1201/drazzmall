@extends('layout.master');
@section('page-title')
    Payment-Page
@endsection
<!-- Navbar -->
   @include('layout.partils.header');
<!-- Navbar end -->
@section('main-content')
<div data-aos="zoom-in-up" class="bg-[#f57224] py-6">
        <div class="text-white text-center font-bold text-3xl md:text-4xl lg:text-5xl">
            Welcome to Darazz Mall
        </div>
        <p class="text-white text-center mt-2 font-medium">
            Your Ultimate Shopping Destination
        </p>
    </div>

     <div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32">

      </div>
      <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
        <div data-aos="fade-right" class="px-4 pt-8">
          <p class="text-xl font-medium">Order Summary</p>
          <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
          <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
              
            @if($record->plan_img == 'No image found')
                <img src="/assets/images/no-img.jpg" alt="No image Found">
              @else
              <img src="/uploads/{{ $record->plan_img }}" alt=" {{ $record->plan_type }}">
            @endif
              <div class="flex w-full flex-col px-4 py-4">
                <span class="font-semibold">{{ $record->plan_type }}</span>
                <span class="float-right text-gray-400"></span>
                <p class="text-lg font-bold">{{ $record->price }}</p>
              </div>
            </div>
            <!-- <div class="flex flex-col rounded-lg bg-white sm:flex-row">
              <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" />
              <div class="flex w-full flex-col px-4 py-4">
                <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
                <span class="float-right text-gray-400">42EU - 8.5US</span>
                <p class="mt-auto text-lg font-bold">$238.99</p>
              </div>
            </div> -->
          </div>
      
          <!-- <p class="mt-8 text-lg font-medium">Shipping Methods</p> -->
        <!--   <form class="mt-5 grid gap-6">
            <div class="relative">
              <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
              <span class="peer-checked:border-[#fb923c] absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
              <label  data-aos="fade-up" class="peer-checked:border-2 peer-checked:border-[#fb923c] peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_1">
                <img class="w-14 object-contain" src="https://componentland.com/images/naorrAeygcJzX0SyNI4Y0.png" alt="" />
                <div class="ml-5">
                  <span class="mt-2 font-semibold">Fedex Delivery</span>
                  <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_2" type="radio" name="radio" checked />
              <span class="peer-checked:border-[#fb923c] absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
              <label  data-aos="fade-up" class="peer-checked:border-2 peer-checked:border-[#fb923c] peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_2">
                <img class="w-14 object-contain" src="https://componentland.com/images/oG8xsl3xsOkwkMsrLGKM4.png" alt="" />
                <div class="ml-5">
                  <span class="mt-2 font-semibold">Fedex Delivery</span>
                  <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                </div>
              </label>
            </div>
          </form> -->
          <form name="formCreate" id="formCreate" action="/plan/payment/method/" method="post">
            @csrf
           <div  data-aos="fade-up" class="mt-10 border border-gray-100 rounded-xl px-4 pt-8 pb-4 lg:mt-0 mb-2">
            <p class="text-xl font-medium mb-4">Personal Information</p>
            <div class="mb-3">
                <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="John Doe" />
            </div>
            <div class="mb-3">
                <label for="phone_no" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="phone_no" name="phone_no" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="+1 555-1234" />
            </div>
        </div>
        </div>
        <div data-aos="fade-left" class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
          <p class="text-xl font-medium">Payment Details</p>
          <p class="text-gray-400">Complete your order by providing your payment details.</p>
          <div class="">
            <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
            <div class="relative">
              <input type="text" id="email" name="email" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="your.email@gmail.com" />
              <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
              </div>
            </div>
            <label for="card_holder_name" class="mt-4 mb-2 block text-sm font-medium">Card Holder</label>
            <div class="relative">
              <input type="text" id="card_holder_name" name="card_holder_name" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm uppercase shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="Your full name here" />
              <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>
              </div>
            </div>
            <label for="card_no" class="mt-4 mb-2 block text-sm font-medium">Card Details</label>
            <div class="flex">
              <div class="relative w-7/12 flex-shrink-0">
                <input type="text" id="card_no" name="card_no" class="w-full rounded-md border border-gray-200 px-2 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="xxxx-xxxx-xxxx-xxxx" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                  <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z" />
                    <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z" />
                  </svg>
                </div>
              </div>
              <input type="text" name="date" id="date" class="w-full rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="Expiry Date" />
              <input type="text" name="cvc" id="cvc" class="w-1/6 flex-shrink-0 rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="CVC" />
            </div>
            <label for="address" class="mt-4 mb-2 block text-sm font-medium">Billing Address</label>
            <div class="flex flex-col sm:flex-row sm:space-x-1 sm:space-y-0 space-x-0 space-y-1">
              <div class="relative flex-shrink-0 sm:w-7/12">
                <input type="text" id="address" name="address" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="Street Address" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                  <img class="h-4 w-4 object-contain" src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg" alt="" />
                </div>
              </div>
              <select type="text" name="state" id="state" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-[#fdba74] focus:ring-blue-500">
                <option value="State">State</option>
              </select>
              <input type="text" name="zip" id="zip" class="flex-shrink-0 rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none sm:w-1/6 focus:z-10 focus:border-[#fdba74] focus:ring-blue-500" placeholder="ZIP" />
            </div>
      
            <!-- Total -->
            <div class="mt-6 border-t border-b py-2">
              <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-500">Subtotal</p>
                <p class="font-semibold text-text-gray-500">{{ $record->price }}</p>
              </div>
              <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-500">Shipping</p>
                <p class="font-semibold text-gray-500">$8.00</p>
              </div>
            </div>
            <div class="mt-6 flex items-center justify-between">
              <p class="text-sm font-medium text-[#f57224]">Total</p>
              <p class="text-2xl font-semibold text-[#f57224]">{{ $record->price }}</p>
            </div>
          </div>
          <button class="mt-4 mb-8 w-full rounded-md bg-[#f57224] hover:bg-[#ea580c] transition-all px-6 py-3 font-medium text-white" type="submit">Place Order</button>
        </div>
      </div>
  </form>

   <div class="max-w-full w-[80%] mx-auto mt-10 mb-10">

        
    
    
    
        <!-- Thank You Message -->
        <div data-aos="zoom-in-up" class="mt-10 border border-gray-100 rounded-xl px-8 py-6 lg:mt-0">
            <div class="text-center">
                <p class="text-2xl font-semibold text-[#f57224] mb-4">Thank You for Shopping with Darazz Mall!</p>
                <p class="text-gray-700">
                    Your order has been successfully placed. We will send you a confirmation email shortly. If you have any
                    questions or concerns, feel free to contact our customer support.
                </p>
            </div>
        </div>
     </div>
    <!-- Footer -->



    <!-- <footer>
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="Assets/DarazzMall-logo.png" class="h-8" alt="Flowbite Logo" />
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
            <hr class="my-4 border-gray-200 sm:mx-auto dark:border-[#fb923c] lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a
                    href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer> -->



    <!-- Footer end -->

    <script src="https://cdn.tailwindcss.com"></script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>
@endsection

   