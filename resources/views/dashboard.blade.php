<x-app-layout title="Dashboard Utama">
  <!-- Main Scrollable Area -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <x-stat-card title="Total Tasks" count="24" color="blue">
      <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
      </svg>
    </x-stat-card>

    <x-stat-card title="Completed" count="12" color="green">
      <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </x-stat-card>

    <x-stat-card title="In Progress" count="12" color="purple">
      <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </x-stat-card>
  </div>

  <div
    class="bg-white dark:bg-gray-900 rounded-3xl border border-gray-100 dark:border-gray-800 shadow-sm overflow-hidden">
    <div
      class="p-6 border-b border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
      <h2 class="text-xl font-bold text-gray-900 dark:text-white">Recent Tasks</h2>

      <div class="flex items-center gap-3">
        <input type="text" placeholder="Search tasks..."
          class="pl-10 pr-4 py-2 border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full sm:w-64 transition-all">

        <button @click="modalOpen = true"
          class="flex-shrink-0 bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-500 hover:to-blue-500 text-white px-4 py-2 rounded-xl text-sm font-medium flex items-center gap-2 shadow-lg shadow-purple-500/20 hover:shadow-purple-500/40 transition-all transform hover:scale-[1.02]">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
          Add Task
        </button>
      </div>
    </div>

    <div class="divide-y divide-gray-100 dark:divide-gray-800">
      <x-task-item title="Design new landing page"
        description="Create wireframes and high-fidelity mockups for the new marketing site."
        badge-label="High Priority" badge-color="red" time-label="Today, 5:00 PM" />

      <x-task-item title="Review pull requests" description="Review the latest frontend changes submitted by the team."
        badge-label="Development" badge-color="blue" time-label="Tomorrow">
        <x-slot name="timeIcon">
          <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </x-slot>
      </x-task-item>

      <x-task-item title="Prepare monthly report"
        description="Gather analytics data and format into the presentation template." :completed="true" />

    </div>

    <div class="p-4 border-t border-gray-100 dark:border-gray-800 bg-gray-50/50 dark:bg-gray-800/20 text-center">
      <button
        class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 transition-colors">
        View all completed tasks
      </button>
    </div>
  </div>
  <!-- Add Task Modal (Alpine.js used for simple toggle logic) -->
  <x-task-modal />
</x-app-layout>
