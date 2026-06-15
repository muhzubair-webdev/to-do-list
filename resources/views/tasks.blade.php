 <x-app-layout title="Task maneger">
   <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">
     <div class="max-w-7xl mx-auto h-full flex flex-col dark:bg-gray-950">

       <!-- Toolbar -->
       <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
         <div class="flex items-center bg-gray-200/50 dark:bg-gray-800/50 p-1 rounded-xl">
           <button @click="activeTab = 'all'"
             :class="activeTab === 'all' ? 'bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm' :
                 'text-gray-500 hover:text-gray-700 dark:hover:text-gray-300'"
             class="px-4 py-1.5 text-sm font-medium rounded-lg transition-all">All Tasks</button>
           <button @click="activeTab = 'pending'"
             :class="activeTab === 'pending' ? 'bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm' :
                 'text-gray-500 hover:text-gray-700 dark:hover:text-gray-300'"
             class="px-4 py-1.5 text-sm font-medium rounded-lg transition-all">Pending</button>
           <button @click="activeTab = 'completed'"
             :class="activeTab === 'completed' ? 'bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm' :
                 'text-gray-500 hover:text-gray-700 dark:hover:text-gray-300'"
             class="px-4 py-1.5 text-sm font-medium rounded-lg transition-all">Completed</button>
         </div>

         <div class="flex items-center gap-3">
           <div class="relative">
             <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
             </svg>
             <input type="text" placeholder="Search tasks..."
               class="pl-10 pr-4 py-2 border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full sm:w-64 transition-all shadow-sm">
           </div>
           <button
             class="bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-xl text-sm font-medium flex items-center gap-2 transition-colors border border-gray-200 dark:border-gray-700">
             <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
             </svg>
             Filter
           </button>
         </div>
       </div>

       <!-- Task List Container -->
       <div
         class="bg-white dark:bg-gray-900 rounded-3xl border border-gray-100 dark:border-gray-800 shadow-sm overflow-hidden flex-1 flex flex-col">

         <div class="overflow-y-auto flex-1 divide-y divide-gray-100 dark:divide-gray-800">
           <!-- Pending Task Item -->
           <div x-show="activeTab === 'all' || activeTab === 'pending'"
             class="p-5 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors group flex items-start gap-4">
             <div class="pt-1">
               <input type="checkbox"
                 class="w-5 h-5 rounded border-gray-300 dark:border-gray-600 text-purple-600 focus:ring-purple-500 cursor-pointer transition-all bg-white dark:bg-gray-900">
             </div>
             <div class="flex-1 min-w-0">
               <div class="flex items-start justify-between gap-4 mb-1">
                 <h3
                   class="text-base font-semibold text-gray-900 dark:text-gray-100 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                   Design new landing page</h3>
                 <span
                   class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-500/10 dark:text-red-400 border border-red-200 dark:border-red-500/20 whitespace-nowrap">
                   High Priority
                 </span>
               </div>
               <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 w-3/4">Create wireframes and
                 high-fidelity mockups for the new marketing site. Focus on the hero section and pricing table.</p>
               <div class="flex items-center gap-4 mt-3">
                 <span class="text-xs font-medium text-red-500 dark:text-red-400 flex items-center gap-1.5">
                   <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                   </svg>
                   Due Today, 5:00 PM
                 </span>
                 <span
                   class="text-xs text-gray-400 flex items-center gap-1.5 border-l border-gray-200 dark:border-gray-700 pl-4">
                   <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                   </svg>
                   Design
                 </span>
               </div>
             </div>
             <div class="flex flex-col items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
               <button
                 class="p-2 text-gray-400 hover:text-blue-500 rounded-xl hover:bg-blue-50 dark:hover:bg-blue-500/10 transition-colors">
                 <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                 </svg>
               </button>
               <button
                 class="p-2 text-gray-400 hover:text-red-500 rounded-xl hover:bg-red-50 dark:hover:bg-red-500/10 transition-colors">
                 <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                 </svg>
               </button>
             </div>
           </div>

           <!-- Another Pending Task Item -->
           <div x-show="activeTab === 'all' || activeTab === 'pending'"
             class="p-5 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors group flex items-start gap-4">
             <div class="pt-1">
               <input type="checkbox"
                 class="w-5 h-5 rounded border-gray-300 dark:border-gray-600 text-purple-600 focus:ring-purple-500 cursor-pointer transition-all bg-white dark:bg-gray-900">
             </div>
             <div class="flex-1 min-w-0">
               <div class="flex items-start justify-between gap-4 mb-1">
                 <h3
                   class="text-base font-semibold text-gray-900 dark:text-gray-100 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                   Update Laravel backend</h3>
                 <span
                   class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-500/10 dark:text-yellow-400 border border-yellow-200 dark:border-yellow-500/20 whitespace-nowrap">
                   Medium Priority
                 </span>
               </div>
               <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 w-3/4">Integrate the new HTML
                 templates into Laravel Blade components. Create the necessary routes and controllers.</p>
               <div class="flex items-center gap-4 mt-3">
                 <span class="text-xs font-medium text-gray-500 dark:text-gray-400 flex items-center gap-1.5">
                   <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                   </svg>
                   Tomorrow
                 </span>
                 <span
                   class="text-xs text-gray-400 flex items-center gap-1.5 border-l border-gray-200 dark:border-gray-700 pl-4">
                   <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                   </svg>
                   Development
                 </span>
               </div>
             </div>
             <div class="flex flex-col items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
               <button
                 class="p-2 text-gray-400 hover:text-blue-500 rounded-xl hover:bg-blue-50 dark:hover:bg-blue-500/10 transition-colors">
                 <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                 </svg>
               </button>
               <button
                 class="p-2 text-gray-400 hover:text-red-500 rounded-xl hover:bg-red-50 dark:hover:bg-red-500/10 transition-colors">
                 <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                 </svg>
               </button>
             </div>
           </div>

           <!-- Completed Task Item -->
           <div x-show="activeTab === 'all' || activeTab === 'completed'"
             class="p-5 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors group flex items-start gap-4 opacity-60">
             <div class="pt-1">
               <input type="checkbox" checked
                 class="w-5 h-5 rounded border-gray-300 dark:border-gray-600 text-purple-600 focus:ring-purple-500 cursor-pointer transition-all bg-white dark:bg-gray-900">
             </div>
             <div class="flex-1 min-w-0">
               <div class="flex items-start justify-between gap-4 mb-1">
                 <h3 class="text-base font-medium text-gray-500 dark:text-gray-400 line-through">Prepare monthly
                   report</h3>
               </div>
               <p class="text-sm text-gray-400 dark:text-gray-500 line-clamp-2 w-3/4 line-through">Gather analytics
                 data and format into the presentation template.</p>
               <div class="flex items-center gap-4 mt-3">
                 <span class="text-xs font-medium text-gray-400 dark:text-gray-500 flex items-center gap-1.5">
                   <svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                   </svg>
                   Completed yesterday
                 </span>
               </div>
             </div>
             <div class="flex flex-col items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
               <button
                 class="p-2 text-gray-400 hover:text-red-500 rounded-xl hover:bg-red-50 dark:hover:bg-red-500/10 transition-colors">
                 <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                 </svg>
               </button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </main>
 </x-app-layout>
