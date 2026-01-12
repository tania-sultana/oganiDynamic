<div>
    @if (isset($label))
        <label for="{{ $id ?? $name }}" class="form-label">
            {{ __($label) }} @if($required) <span class="text-danger">*</span> @else <span class="text-muted">({{ __('Optional') }})</span> @endif
        </label>
    @endif
    <input type="file" name="{{ $name }}" id="{{ $id ?? $name }}" class="form-control @error($name) is-invalid @enderror {{ $class ?? '' }}" @if($preview) onchange="previewFile(event,'{{ $preview }}')" @endif @if ($required) required @endif @if ($readonly) readonly @endif accept="{{ $accept ?? '' }}" @if($style) style="{{ $style }}" @endif/>
    @error($name)
        <p class="text text-danger m-0">{{ $message }}</p>
    @enderror
</div>
