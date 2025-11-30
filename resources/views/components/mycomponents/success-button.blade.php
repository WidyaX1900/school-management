@props([
    'type' => 'submit',
    'class' => ''
])

<button type={{ $type }} class="rounded bg-green-700 text-slate-100 px-2 transition-transform duration-75 active:scale-75 {{ $class }}">
    {{ $slot }}
</button>
