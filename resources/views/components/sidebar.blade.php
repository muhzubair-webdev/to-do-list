<!-- Mobile sidebar bacGood Morning, Alexkdrop -->
<div x-show="sidebarOpen" class="fixed inset-0 z-20 bg-black/50 backdrop-blur-sm transition-opacity"
  @click="sidebarOpen = false" x-transition:enter="transition-opacity ease-linear duration-300"
  x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
  x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0">
</div>

<aside @click.outside="sidebarOpen = false"
  class="fixed inset-y-0 left-0 z-30 w-64 bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 transform transition-transform duration-300 lg:translate-x-0 lg:relative lg:inset-0 flex flex-col"
  :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
  <div class="flex items-center justify-center h-16 border-b border-gray-200 dark:border-gray-800 px-4">
    <div class="flex items-center gap-2">
      <div
        class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-600 to-blue-600 flex items-center justify-center shadow-lg shadow-purple-500/20">
        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
        </svg>
      </div>
      <span
        class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">TaskFlow</span>
    </div>
  </div>

  <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
    <a href="{{ route('dashboard') }}"
      class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition-colors group {{ request()->routeIs('dashboard') ? 'bg-purple-500/10 text-purple-600 dark:text-purple-400' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800/50' }}">
      <svg class="w-5 h-5 transition-colors {{ request()->routeIs('dashboard') ? '' : 'group-hover:text-purple-500' }}"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      <span class="font-medium">Dashboard</span>
    </a>
    <a href="{{ route('tasks') }}"
      class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition-colors group {{ request()->routeIs('tasks') ? 'bg-purple-500/10 text-purple-600 dark:text-purple-400' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800/50' }}">
      <svg class="w-5 h-5 transition-colors {{ request()->routeIs('tasks') ? '' : 'group-hover:text-purple-500' }}"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="font-medium">My Tasks</span>
      <span class="ml-auto bg-gray-100 dark:bg-gray-800 text-xs py-0.5 px-2 rounded-full font-medium">12</span>
    </a>
    <a href="{{ route('calender') }}"
      class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition-colors group {{ request()->routeIs('calender') ? 'bg-purple-500/10 text-purple-600 dark:text-purple-400' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800/50' }}">
      <svg class="w-5 h-5 transition-colors {{ request()->routeIs('calender') ? '' : 'group-hover:text-purple-500' }}"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      <span class="font-medium">Calendar</span>
    </a>
  </nav>

  <div class="p-4 border-t border-gray-200 dark:border-gray-800">
    <a href="/login.html"
      class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-500/10 rounded-xl transition-colors">
      <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
      </svg>
      <span class="font-medium">Logout</span>
    </a>
  </div>
</aside>
