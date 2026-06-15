<x-app-layout title="Kalender Masehi">
  <div class="flex items-center justify-between mb-6">
    <div class="flex items-center gap-4">
      <h2 class="text-2xl font-bold text-gray-900 dark:text-white">June 2026</h2>
      <div class="flex items-center bg-gray-100 dark:bg-gray-800 rounded-xl p-1">
        <button
          class="p-1 text-gray-500 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-white dark:hover:bg-gray-700 transition-colors">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button
          class="px-3 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors">Today</button>
        <button
          class="p-1 text-gray-500 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-white dark:hover:bg-gray-700 transition-colors">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>
    <div class="flex items-center bg-gray-200/50 dark:bg-gray-800/50 p-1 rounded-xl">
      <button
        class="px-4 py-1.5 text-sm font-medium rounded-lg text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 transition-all">Week</button>
      <button
        class="bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm px-4 py-1.5 text-sm font-medium rounded-lg transition-all">Month</button>
    </div>
  </div>

  <!-- Calendar Grid -->
  <div
    class="bg-white dark:bg-gray-900 rounded-3xl border border-gray-100 dark:border-gray-800 shadow-sm overflow-hidden flex-1 flex flex-col">

    <!-- Days of week header -->
    <div class="grid grid-cols-7 border-b border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-800/50">
      <div class="py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
        Sun</div>
      <div class="py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
        Mon</div>
      <div class="py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
        Tue</div>
      <div class="py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
        Wed</div>
      <div class="py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
        Thu</div>
      <div class="py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
        Fri</div>
      <div class="py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
        Sat</div>
    </div>

    <!-- Days grid -->
    <div class="flex-1 grid grid-cols-7 grid-rows-5 bg-gray-200 dark:bg-gray-800 gap-px">

      <!-- Empty previous month days -->
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col opacity-50">
        <span
          class="text-sm font-medium text-gray-400 dark:text-gray-500 w-7 h-7 flex items-center justify-center rounded-full">31</span>
      </div>

      <!-- 1st -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">1</span>
      </div>

      <!-- 2nd -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">2</span>
        <div class="mt-1">
          <div
            class="px-2 py-1 text-xs font-medium rounded-md bg-blue-100 text-blue-700 dark:bg-blue-500/20 dark:text-blue-300 truncate mb-1">
            Team Sync
          </div>
        </div>
      </div>

      <!-- 3rd -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">3</span>
      </div>

      <!-- 4th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">4</span>
      </div>

      <!-- 5th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">5</span>
        <div class="mt-1">
          <div
            class="px-2 py-1 text-xs font-medium rounded-md bg-green-100 text-green-700 dark:bg-green-500/20 dark:text-green-300 truncate">
            Code Review
          </div>
        </div>
      </div>

      <!-- 6th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">6</span>
      </div>

      <!-- 7th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">7</span>
      </div>

      <!-- 8th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">8</span>
      </div>

      <!-- 9th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">9</span>
        <div class="mt-1">
          <div
            class="px-2 py-1 text-xs font-medium rounded-md bg-purple-100 text-purple-700 dark:bg-purple-500/20 dark:text-purple-300 truncate mb-1 border border-purple-200 dark:border-purple-500/30">
            Design new landing page
          </div>
          <div
            class="px-2 py-1 text-xs font-medium rounded-md bg-blue-100 text-blue-700 dark:bg-blue-500/20 dark:text-blue-300 truncate">
            Team Sync
          </div>
        </div>
      </div>

      <!-- 10th (Today) -->
      <div
        class="bg-purple-50/30 dark:bg-purple-900/10 p-2 min-h-[100px] flex flex-col group hover:bg-purple-50/50 dark:hover:bg-purple-900/20 transition-colors cursor-pointer relative overflow-hidden">
        <!-- Indicator for today -->
        <div class="absolute top-0 right-0 w-8 h-8 bg-purple-500 transform translate-x-4 -translate-y-4 rotate-45">
        </div>

        <span
          class="text-sm font-bold text-white bg-purple-600 dark:bg-purple-500 w-7 h-7 flex items-center justify-center rounded-full shadow-md shadow-purple-500/30 relative z-10">10</span>

        <div class="mt-2 space-y-1 relative z-10">
          <div
            class="px-2 py-1 text-xs font-medium rounded-md bg-red-100 text-red-700 dark:bg-red-500/20 dark:text-red-300 truncate border border-red-200 dark:border-red-500/30">
            Urgent Bugfix
          </div>
        </div>
      </div>

      <!-- 11th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">11</span>
        <div class="mt-1">
          <div
            class="px-2 py-1 text-xs font-medium rounded-md bg-yellow-100 text-yellow-700 dark:bg-yellow-500/20 dark:text-yellow-400 truncate border border-yellow-200 dark:border-yellow-500/30">
            Update Laravel backend
          </div>
        </div>
      </div>

      <!-- 12th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">12</span>
      </div>

      <!-- 13th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">13</span>
      </div>

      <!-- 14th -->
      <div
        class="bg-white dark:bg-gray-900 p-2 min-h-[100px] flex flex-col group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer">
        <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300 w-7 h-7 flex items-center justify-center rounded-full">14</span>
      </div>

      <!-- Repeat for rest of month, empty to save tokens but realistic enough -->
      <!-- Row 3 -->
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">15</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]">
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">16</span>
        <div class="mt-1">
          <div
            class="px-2 py-1 text-xs font-medium rounded-md bg-blue-100 text-blue-700 dark:bg-blue-500/20 dark:text-blue-300 truncate">
            Team Sync</div>
        </div>
      </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">17</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">18</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">19</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">20</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">21</span> </div>

      <!-- Row 4 -->
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">22</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">23</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">24</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">25</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">26</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">27</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">28</span> </div>

      <!-- Row 5 -->
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">29</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px]"> <span
          class="text-sm font-medium text-gray-700 dark:text-gray-300">30</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px] opacity-50"> <span
          class="text-sm font-medium text-gray-400 dark:text-gray-500">1</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px] opacity-50"> <span
          class="text-sm font-medium text-gray-400 dark:text-gray-500">2</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px] opacity-50"> <span
          class="text-sm font-medium text-gray-400 dark:text-gray-500">3</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px] opacity-50"> <span
          class="text-sm font-medium text-gray-400 dark:text-gray-500">4</span> </div>
      <div class="bg-white dark:bg-gray-900 p-2 min-h-[100px] opacity-50"> <span
          class="text-sm font-medium text-gray-400 dark:text-gray-500">5</span> </div>

    </div>
  </div>

</x-app-layout>
