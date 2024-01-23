@extends('layout.master');

@section('page-title')
    Plans
@endsection
@include('layout.partils.header');
@section('main-content')
<!-- Carosel -->
<div id="default-carousel" class="relative w-full hidden md:block" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
      <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://icms-image.slatic.net/images/ims-web/b302dd19-0097-42b8-b574-360ab0d99cea.jpeg_1200x1200.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://icms-image.slatic.net/images/ims-web/732d1cd1-b496-4f3d-9805-48b2597a11e4.jpg"
          class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
      </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
        data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
        data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
        data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
        data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
      class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-prev>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button"
      class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-next>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>

  <!-- CArosel end -->

  <!-- Plans -->
  
  <div class="text-center pt-8 text-[50px] font-bold">
    <h1>Plans</h1>
  </div>


  <div class="flex justify-center items-center">
    <div class="my-10 grid sm:grid-cols-1 md:grid-cols-2 gap-2 lg:grid-cols-4">
  @foreach($plans as $plan)
      <div data-aos="flip-down" class="max-w-xs text-center m-4 cards bg-white border border-gray-200 rounded-lg shadow md:col-span-1">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow mx-auto">
          
            @if($plan->plan_img == 'No image found')
                <img src="/assets/images/no-img.jpg" alt="No image Found">
              @else
              <img src="/uploads/{{ $plan->plan_img }}" class="mx-auto " alt=" {{ $plan->plan_type }}">
            @endif
      
          
          <div class="p-10"  >
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight  text-gray-900">
                {{ $plan->plan_type }} </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">
            <p>Investment 1000</p>
            <p>{{ $plan->daily_earning }}</p>
            <p>{{ $plan->total_product }}</p>
            <p>{{ $plan->price }}</p>
            <p>{{ $plan->perday_balnce }}</p>
            </p>
            </p>
            <a href="/plan/payment/method/{{ $plan->id }}"
              class="inline-flex hover:text-[--orange] text-white bg-[#f57224] hover:bg-white border-2 border-[#f57224] font-medium rounded-lg text-sm px-3 py-2 items-center select_btn">
              Select Plan
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>
          </div>
        </div>
      </div>
  @endforeach
    

     
      </div>
    </div>
  </div>

      @include('layout.partils.footer');

  <!-- Plans end -->
@endsection
