@props([
    'id' => '',
    'class' => ''
])

<div id="{{ $id }}" class="w-full h-full fixed top-0 left-0 bg-gray-950/70 transition-all translate-y-[100%] opacity-0 duration-200 ease-in {{ $class }}">
    <div class="w-1/2 p-3 bg-slate-50 rounded">
        {{ $slot }}
    </div>
</div>