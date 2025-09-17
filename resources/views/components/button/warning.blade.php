@props(['href' => null, 'type' => 'button'])

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn btn-warning']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'btn btn-warning']) }}>
        {{ $slot }}
    </button>
@endif
