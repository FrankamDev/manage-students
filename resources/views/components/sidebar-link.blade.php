{{-- @props([
    'href' => '#',
    'active' => false,
])

<a href="{{ $href }}"
    {{ $attributes->class([
        'group flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-all',
        'bg-indigo-50 dark:bg-indigo-900/40 text-indigo-700 dark:text-indigo-300' => $active,
        'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' => !$active,
    ]) }}>

    <span class="flex-shrink-0 w-5 h-5 transition-transform group-hover:scale-110">
        {{ $icon ?? '' }}
    </span>

    <span>{{ $slot }}</span>

    @if ($active)
        <span class="ml-auto w-1.5 h-1.5 rounded-full bg-indigo-600 dark:bg-indigo-400"></span>
    @endif
</a> --}}




@props(['active' => false])

<a {{ $attributes->merge(['wire:click' => $attributes['wire:click'] ?? null]) }}
    class="group flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors
          {{ $active ? 'bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800' }}">

    <span
        class="flex-shrink-0 text-gray-500 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400">
        {{ $icon ?? '' }}
    </span>

    {{ $slot }}
</a>
