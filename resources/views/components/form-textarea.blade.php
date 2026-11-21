@props([
    'name',
    'label',
    'value' => null,
    'full' => false,
    'rows' => 3,
])

<div class="form-field {{ $full ? 'full' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}" {{ $attributes }}>{{ old($name, $value) }}</textarea>
    @error($name)
        <p class="field-error">{{ $message }}</p>
    @enderror
</div>
