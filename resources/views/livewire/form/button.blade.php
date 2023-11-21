<div>
    <button type="{{ $type }}" class="{{ $button_class }}" 
    @if ($isModal)
        data-bs-toggle="modal" 
        data-bs-target="#{{ $modal_id }}"
    @endif  >
        {{ $title }}
    </button>
</div>

