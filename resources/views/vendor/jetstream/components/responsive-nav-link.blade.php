@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex '
            : 'flex transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
