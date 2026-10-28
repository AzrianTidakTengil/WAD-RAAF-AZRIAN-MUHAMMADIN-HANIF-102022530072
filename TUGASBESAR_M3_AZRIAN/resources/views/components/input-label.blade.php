@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-espresso-900']) }}>
    {{ $value ?? $slot }}
</label>
