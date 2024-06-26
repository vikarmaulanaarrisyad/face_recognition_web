<div {{ $attributes->merge(['class' => 'card card-outline card-primary']) }}>
    @isset($header)
        <div {{ $attributes->merge(['class' => 'card-header']) }}>
            {{ $header }}
        </div>
    @endisset

    <div class="card-body">
        {{ $slot }}
    </div>

    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endisset
</div>
