<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom styles can be added here */
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Icon when menu is closed. -->
            <!-- Heroicon name: menu -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <!-- Icon when menu is open. -->
            <!-- Heroicon name: x -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0">
            <img class="h-8 w-auto" src="{{ asset('logo/logo.png') }}" width="100px">
          </div>
          <div class="hidden sm:block sm:ml-6 flex-1">
            <div class="flex space-x-4">
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
              <a href="/register" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
              <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
        <a href="/register" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Register</a>
        <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>
      </div>
    </div>

    <!-- Header -->
    <header class="bg-gray-800 text-white py-4">
      <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center">Pieejamie apartamenti</h1>
      </div>
    </header>

    <!-- Main content -->
    <main class="container mx-auto py-8">
      <!-- Search and sort options -->
      <div class="flex justify-between mb-4">
        <div>
          <input type="text" placeholder="Meklēt pēc nosaukuma vai apraksta" class="px-4 py-2 border border-gray-300 rounded-md">
          <button class="px-4 py-2 bg-blue-500 text-white rounded-md ml-2">Meklēt</button>
        </div>
        <div>
          <label for="sort-select" class="mr-2">Kārtošana pēc:</label>
          <select id="sort-select" class="px-4 py-2 border border-gray-300 rounded-md">
            <option value="price">Cenas</option>
            <option value="date">Datuma</option>
          </select>
        </div>
      </div>

      <!-- Apartment list -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Sample apartment item -->
        <div class="border rounded-md p-4">
          <h2 class="text-lg font-semibold">Apartamenta nosaukums</h2>
          <p class="text-gray-600 mt-2">Apraksts: Īpašums ar skaistu skatu uz jūru un ērtu piekļuvi pludmalei.</p>
          <p class="text-gray-600 mt-2">Cena: $100 par nakti</p>
          <img src="../logo/hotel1.jpg" alt="Apartamenta attēls" class="mt-4">
          <a href="#" class="block text-blue-500 mt-2">Skatīt detaļas</a>
        </div>
        <!-- Sample apartment item -->
        <div class="border rounded-md p-4">
  <h2 class="text-lg font-semibold">Luksusa pludmales villa</h2>
  <p class="text-gray-600 mt-2">Apraksts: Izcila pludmales villa ar panorāmas skatu uz okeānu, privātu bezgalības baseinu un tiešu piekļuvi pludmalei.</p>
  <p class="text-gray-600 mt-2">Cena: $500 par nakti</p>
  <img src="../logo/hotel2.jpg" alt="Villas Attēls" class="mt-4">

  <a href="#" class="block text-blue-500 mt-2">Skatīt Detaļas</a>
</div>


        <!-- Repeat for each apartment item -->
        
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-8">
      <div class="container mx-auto text-center">
        <p>&copy; 2024 Apartamentu īre. Visas tiesības aizsargātas.</p>
      </div>
    </footer>

    <script>
      const menuButton = document.querySelector('button[aria-controls="mobile-menu"]');
      const mobileMenu = document.getElementById('mobile-menu');

      menuButton.addEventListener('click', () => {
        const isExpanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
        menuButton.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
      });
    </script>
  </nav>
</body>
</html>
