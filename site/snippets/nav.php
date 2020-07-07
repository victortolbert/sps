<!-- This example requires Tailwind CSS v1.4.0+ -->
<div class="relative bg-white">
  <div class="flex items-center justify-between px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
    <div>
      <?= snippet('logo-link') ?>
    </div>
    <div class="-my-2 -mr-2 md:hidden">
      <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
    <div class="hidden md:flex-1 md:flex md:items-center md:justify-between md:space-x-12">
      <nav class="flex space-x-10">
        <div class="relative">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="inline-flex items-center space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out group hover:text-gray-900 focus:outline-none focus:text-gray-900">
            <span>About</span>
            <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->
            <svg class="w-5 h-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </button>
        </div>
        <div class="relative">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="inline-flex items-center space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out group hover:text-gray-900 focus:outline-none focus:text-gray-900">
            <span>New to ECCO</span>
            <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->
            <svg class="w-5 h-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </button>
        </div>


        <a href="/spf-overview" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-900">
          SPF Overview
        </a>
        <a href="/resources" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-900">
          Resources
        </a>
        <a href="/media" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-900">
          Media
        </a>
        <a href="/training" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-900">
          Training
        </a>
      </nav>

      <div class="flex items-center space-x-8">
        <a href="https://www.georgiamds.uga.edu/PublicHome/Index" target="_blank" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-900">
          MDS
        </a>
        <a href="http://gaspsdata.net/" target="_blank" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-900">
          GA Data Warehouse
        </a>
        <span class="inline-flex rounded-md shadow-sm">
          <a href="http://ecco.ga-sps.org/login.php" target="_blank" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
          Ecco v4.0 Sign in
          </a>
        </span>
      </div>
    </div>
  </div>

  <div class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden">
    <div class="rounded-lg shadow-lg">
      <div class="bg-white divide-y-2 rounded-lg shadow-xs divide-gray-50">
        <div class="px-5 pt-5 pb-6 space-y-6">
          <div class="flex items-center justify-between">
            <div>
              <?= snippet('logo-link') ?>
            </div>
            <div class="-mr-2">
              <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="px-5 py-6 space-y-6">
          <div class="space-y-6">
            <span class="flex w-full rounded-md shadow-sm">
              <a href="http://ecco.ga-sps.org/login.php" target="_blank" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                Ecco v4 Sign in
              </a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>