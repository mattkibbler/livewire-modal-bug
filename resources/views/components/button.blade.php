<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'bg-gray-400 px-4 py-2 rounded-md text-white'
    ]) }}
>
    {{ $slot }}
</button>