@props(['active'=>false])

<a {{ $attributes }} class="px-4 py-2 rounded-lg {{ $active ? 'bg-gray-600 text-white font-semibold' : '' }}">
    {{ $slot }}
</a>