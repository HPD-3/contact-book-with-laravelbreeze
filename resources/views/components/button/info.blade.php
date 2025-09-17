@props(['href' => null, 'type' => 'button'])

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn btn-info']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'btn btn-info']) }}>
        {{ $slot }}
    </button>
@endif
