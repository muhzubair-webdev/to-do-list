<div x-show="modalOpen" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
  role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

    <div x-show="modalOpen" class="fixed inset-0 bg-gray-900/75 backdrop-blur-sm transition-opacity"
      @click="modalOpen = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <div x-show="modalOpen"
      class="relative inline-block align-bottom bg-white dark:bg-gray-900 rounded-3xl text-left overflow-hidden shadow-2xl border border-gray-100 dark:border-gray-800 transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full"
      x-transition:enter="ease-out duration-300"
      x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
      x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

      <form>
        <div class="px-6 pt-6 pb-4">
          <h3 class="text-xl leading-6 font-bold text-gray-900 dark:text-white" id="modal-title">
            Add New Task
          </h3>
          <div class="mt-6 space-y-5">
            <div>
              <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Task
                Title</label>
              <input type="text" id="title"
                class="w-full px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-xl bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors outline-none"
                placeholder="E.g., Complete project proposal" required>
            </div>
            <div>
              <label for="description"
                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Description <span
                  class="text-gray-400 font-normal">(Optional)</span></label>
              <textarea id="description" rows="3"
                class="w-full px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-xl bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors outline-none resize-none"
                placeholder="Add details..."></textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label for="priority"
                  class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Priority</label>
                <select id="priority"
                  class="w-full px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-xl bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors outline-none appearance-none">
                  <option>Low</option>
                  <option selected>Medium</option>
                  <option>High</option>
                </select>
              </div>
              <div>
                <label for="due-date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Due
                  Date</label>
                <input type="date" id="due-date"
                  class="w-full px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-xl bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors outline-none">
              </div>
            </div>
          </div>
        </div>
        <div
          class="bg-gray-50 dark:bg-gray-800/50 px-6 py-4 flex items-center justify-end gap-3 border-t border-gray-100 dark:border-gray-800">
          <button type="button" @click="modalOpen = false"
            class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 dark:focus:ring-offset-gray-900">
            Cancel
          </button>
          <button type="submit"
            class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl hover:from-purple-500 hover:to-blue-500 transition-all shadow-md shadow-purple-500/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 dark:focus:ring-offset-gray-900 transform hover:scale-[1.02]">
            Create Task
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
