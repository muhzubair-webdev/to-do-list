@props([
    'title',
    'description',
    'completed' => false,
    'badgeLabel' => null,
    'badgeColor' => 'red',
    'timeLabel' => null,
])

@php
  // Logika class berdasarkan status task
  $isCompletedClass = $completed ? 'opacity-60' : '';
  $textStrikeClass = $completed ? 'line-through' : '';
  $titleClass = $completed
      ? 'text-gray-500 dark:text-gray-400 font-medium'
      : 'text-gray-900 dark:text-gray-100 font-semibold group-hover:text-purple-600 dark:group-hover:text-purple-400';
  $descClass = $completed ? 'text-gray-400 dark:text-gray-500' : 'text-gray-500 dark:text-gray-400';

  // Warna Badge
  $badgeColors = [
      'red' => 'bg-red-100 text-red-800 dark:bg-red-500/10 dark:text-red-400 border-red-200 dark:border-red-500/20',
      'blue' =>
          'bg-blue-100 text-blue-800 dark:bg-blue-500/10 dark:text-blue-400 border-blue-200 dark:border-blue-500/20',
  ];
  $badgeClass = $badgeColors[$badgeColor] ?? $badgeColors['red'];
@endphp

<div
  class="p-4 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors group flex items-start gap-4 {{ $isCompletedClass }}">
  <div class="pt-1">
    <input type="checkbox" @if ($completed) checked @endif
      class="w-5 h-5 rounded border-gray-300 dark:border-gray-600 text-purple-600 focus:ring-purple-500 cursor-pointer transition-all bg-white dark:bg-gray-900">
  </div>
  <div class="flex-1 min-w-0">
    <h3 class="text-base mb-1 transition-colors {{ $titleClass }} {{ $textStrikeClass }}">
      {{ $title }}
    </h3>
    <p class="text-sm line-clamp-1 {{ $descClass }} {{ $textStrikeClass }}">
      {{ $description }}
    </p>

    @if (!$completed && ($badgeLabel || $timeLabel))
      <div class="flex items-center gap-3 mt-2">
        @if ($badgeLabel)
          <span
            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border {{ $badgeClass }}">
            {{ $badgeLabel }}
          </span>
        @endif

        @if ($timeLabel)
          <span class="text-xs text-gray-400 flex items-center gap-1">
            @if (isset($timeIcon))
              {{ $timeIcon }}
            @else
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            @endif
            {{ $timeLabel }}
          </span>
        @endif
      </div>
    @endif
  </div>

  <div class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
    @if (!$completed)
      <button
        class="p-1.5 text-gray-400 hover:text-blue-500 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-500/10 transition-colors">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
      </button>
    @endif
    <button
      class="p-1.5 text-gray-400 hover:text-red-500 rounded-lg hover:bg-red-50 dark:hover:bg-red-500/10 transition-colors">
      <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
      </svg>
    </button>
  </div>
</div>
