@props([
    'type' => 'submit',
    'id' => '',
    'class' => ''
])

<button type={{ $type }} id="{{ $id }}" class="bg-blue-950 text-slate-50 rounded transition-transform duration-75 active:scale-75 shadow-xl shadow-blue-950/25 active:shadow-transparent {{ $class }}">
    {{ $slot }}
</button>
