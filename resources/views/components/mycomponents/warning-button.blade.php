@props([
    'type' => 'submit',
    'class' => ''
])

<button type={{ $type }} class="rounded bg-amber-500 px-2 mx-5 transition-transform duration-75 active:scale-75 {{ $class }}">
    {{ $slot }}
</button>
