<nav class="bg-white dark:border-gray-700 shadow-lg shadow-[#F9F9F9] mb-3">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="/Assets/DarazzMall-logo.png" class="h-8" alt="Darazz Mall Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
      </a>
      <button data-collapse-toggle="navbar-multi-level" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-multi-level" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
        <ul
          class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-transparent md:dark:bg-transparent dark:border-gray-700">
          <li>
            <a href="#"
              class="block py-2 px-3 text-[--orange] border-transparent hover:bg-[#FFB688] hover:text-white rounded"
              aria-current="page">Home</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-[--orange] border-transparent hover:bg-[#FFB688] hover:text-white rounded">Services</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-[--orange] border-transparent hover:bg-[#FFB688] hover:text-white rounded">Pricing</a>
          </li>
          <li>
          <!-- <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>