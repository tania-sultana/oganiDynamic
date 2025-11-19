<div>
    @if (isset($label))
        <label for="{{ $id ?? $name }}" class="form-label">
            {{ __($label) }} @if($required) <span class="text-danger">*</span> @else <span class="text-muted">({{ __('Optional') }})</span> @endif
        </label>
    @endif
    <textarea name="{{ $name }}" class="form-control @error($name) is-invalid @enderror {{ $class ?? '' }}" id="{{ $id ?? $name }}" rows="{{ $rows ?? '3' }}" placeholder="{{ __($placeholder) ?? '' }}" @if ($required) required @endif @if ($readonly) readonly @endif @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif @if($style) style="{{ $style }}" @endif>{{ old($name) ?? $value }}</textarea>
</div>
