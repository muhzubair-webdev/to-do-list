@props([
    'title' => 'Aplikasi Saya', // Nilai default jika tidak dikirim
    'hideSidebar' => false, // Nilai default: sidebar selalu muncul
])
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }} - To-Do App</title>
  <link rel="stylesheet" href="/src/style.css">
  <!-- Alpine.js is added purely for template interactivity (like opening modals), very common in Laravel ecosystems, but it can be stripped if not needed -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body
  class="bg-gray-50 dark:bg-gray-950 text-gray-900 dark:text-gray-100 font-sans antialiased h-screen overflow-hidden flex"
  x-data="{ sidebarOpen: window.innerWidth >= 1024, modalOpen: false, activeTab: 'all' }">

  <x-sidebar/>
  <div class="flex-1 flex flex-col min-w-0 bg-gray-50 dark:bg-gray-950">

    @include('layouts.header', ['title' => $title])
    <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">
      <div class="max-w-5xl mx-auto space-y-8">
        {{ $slot }}
      </div>
    </main>
  </div>
</body>

</html>
