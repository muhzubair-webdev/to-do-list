<!-- Header -->
<header
  class="h-16 flex items-center justify-between px-4 sm:px-6 lg:px-8 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 sticky top-0 z-10">
  <div class="flex items-center gap-4">
    <button @click.stop="sidebarOpen = true"
      class="p-2 text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
      <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
    <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-100">{{ $title ?? 'Good morning' }}</h1>
  </div>

  <div class="flex items-center gap-4">
    <button
      class="p-2 text-gray-500 hover:text-purple-500 hover:bg-purple-50 dark:hover:bg-purple-500/10 rounded-full transition-colors relative">
      <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
      </svg>
      <span
        class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 border-2 border-white dark:border-gray-900 rounded-full"></span>
    </button>
    <div class="w-9 h-9 rounded-full bg-gradient-to-r from-purple-500 to-blue-500 p-0.5 cursor-pointer">
      <img src="https://ui-avatars.com/api/?name=Alex+Doe&background=random" alt="Profile"
        class="w-full h-full rounded-full border-2 border-white dark:border-gray-900 object-cover">
    </div>
  </div>
</header>
