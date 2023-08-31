<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gresik Cipta App</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  {{-- Icon --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans">
  @include('components.sidebar')
  <div class="p-4 sm:ml-64">
    <header class="p-4 py-5 rounded-lg dark:border-gray-700">
      <div class="flex justify-between">
        <div class="flex flex-col gap-2">
          <p class="font-bold text-lg">Sup, Admin.. good to see you, Mate!</p>
          <p class="font-light text-sm">Your Device : Mozilla/5.0 (Windows NT 10.0; Win64; x64)
            AppleWebKit/537.36 (KHTML, like Gecko)
            Chrome/115.0.0.0 Safari/537.36
          </p>
        </div>
        <div class="flex items-center gap-3">
          <p class="text-blue-500 font-medium">Dashboard</p>
          <button type="button"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2">
            <i class="fa-solid fa-gear"></i>
          </button>
        </div>
      </div>
    </header>
    <main class="p-4 py-5">
      <section class="flex gap-5 items-start">
        <div class="grid grid-cols-2 gap-5">
          <div
            class="max-w-sm flex gap-6 items-center p-6 py-8 bg-white border border-gray-200 rounded-lg shadow">
            <img class="ml-4 w-24 rounded-full" src="{{ asset('assets/img/profile/profile-1.png') }}"
              alt="Rounded avatar">
            <div class="flex flex-col gap-4">
              <p class="text-gray-600">Arva Bayu Susanto</p>
              <p class="font-extrabold text-xl">2041720116</p>
              <p class="text-green-400">+ 3 Minutes login</p>
            </div>
          </div>
          @include('components.columnChart')
          <div
            class="w-full col-span-2 flex gap-4 items-center justify-center p-6 py-8 bg-white border border-gray-200 rounded-lg shadow">
            <img src="{{ asset('assets/img/logo-gcs.svg') }}" alt="" class="w-[5rem]">
            <p class="font-bold">
              12:00 PM
            </p>
          </div>
        </div>
        <div>
          @include('components.lineChart')
        </div>
      </section>
      <section class="flex flex-col gap-5 mt-10 mb-5">
        <div class="w-fit focus:outline-none text-white bg-red-700 rounded-xl text-sm px-5 py-2.5">
          <h1 class="font-bold text-lg">Dalam Ribu</h1>
        </div>
        <div class="flex gap-5 overflow-auto">
          @include('components.radialChart')
          @include('components.radialChart2')
          @include('components.radialChart3')
          @include('components.radialchart4')
        </div>
      </section>
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>
