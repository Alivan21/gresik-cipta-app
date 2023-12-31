<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
  type="button"
  class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
  <span class="sr-only">Open sidebar</span>
  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd"
      d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
    </path>
  </svg>
</button>
<aside id="default-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
  aria-label="Sidebar">
  <div class="h-full px-5 py-4 overflow-y-auto bg-gray-100 relative">
    <div class="flex justify-center">
      <img src="{{ asset('assets/img/logo-gcs.svg') }}" alt="" class="w-28">
    </div>
    <hr class="border my-4">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="#"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-400 hover:text-white group">
          <i
            class="fa-solid fa-house text-lg text-gray-500 transition duration-75 group-hover:text-white"></i>
          <span class="ml-3">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-400 hover:text-white group">
          <i
            class="fa-solid fa-credit-card text-lg text-gray-500 transition duration-75 group-hover:text-white"></i>
          <span class="ml-3">Finansial</span>
        </a>
      </li>
      <li>
        <a href="#"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-400 hover:text-white group">
          <i class="fa-solid fa-user text-lg text-gray-500 transition duration-75 group-hover:text-white"></i>
          <span class="ml-3">Profil</span>
        </a>
      </li>
    </ul>
    <ul class="space-y-2 font-medium fixed bottom-5 w-10/12">
      <li class="">
        <a href="#"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-red-500 hover:text-white group">
          <i
            class="fa-solid fa-arrow-right-from-bracket text-lg text-gray-500 transition duration-75 group-hover:text-white"></i>
          <span class="ml-3">Logout</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
