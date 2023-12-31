<div class="{{ $class_div }}">
    <!--begin::Label-->
    <label class="{{ $class_label }}">{{ $label }}</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="{{ $type }}" class="{{ $class_input }}" name="{{ $name }}" id="{{ $name }}"
        placeholder="{{ $placeholder }}" value="{{ $value }}">
    <!--end::Input-->
    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
