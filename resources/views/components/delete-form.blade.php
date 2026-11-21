@props([
    'action',
    'label' => 'Delete',
    'buttonClass' => 'text-action danger',
    'confirm' => 'Are you sure you want to delete this record?',
])

<form action="{{ $action }}" method="POST" class="inline-form" onsubmit="return confirm(@js($confirm))">
    @csrf
    @method('DELETE')
    <button type="submit" class="{{ $buttonClass }}">{{ $label }}</button>
</form>
