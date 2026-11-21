@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null,
    'full' => false,
])

<div class="form-field {{ $full ? 'full' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes }}
    >
    @error($name)
        <p class="field-error">{{ $message }}</p>
    @enderror
</div>
