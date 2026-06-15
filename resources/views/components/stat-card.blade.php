@props(['title', 'count', 'color' => 'blue'])

@php
    $colors = [
        'blue' => 'bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-blue-400',
        'green' => 'bg-green-50 dark:bg-green-500/10 text-green-600 dark:text-green-400',
        'purple' => 'bg-purple-50 dark:bg-purple-500/10 text-purple-600 dark:text-purple-400',
    ];

    $colorClass = $colors[$color] ?? $colors['blue'];
@endphp

<div class="bg-white dark:bg-gray-900 p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm flex items-center justify-between">
  <div>
    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $title }}</p>
    <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1">{{ $count }}</p>
  </div>
  <div class="w-12 h-12 rounded-xl flex items-center justify-center {{ $colorClass }}">
    {{ $slot }}
  </div>
</div>
