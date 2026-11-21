@props(['type' => 'success'])

@if(session($type))
    <div class="alert" role="status">
        {{ session($type) }}
    </div>
@endif
