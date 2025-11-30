@props(['href'])

<li class="mb-3 rounded p-3 hover:bg-blue-900 transition duration-150 text-lg">
    <a href="{{ $href }}" class="flex items-center">
        {{ $slot }}        
    </a>
</li>
