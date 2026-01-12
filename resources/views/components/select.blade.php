<div>
    @if (isset($label) && $label)
        <label for="{{ $id ?? $name }}" class="form-label">
            {{ __($label) }}
            @if ($required)<span class="text-danger">*</span> @else <span class="text-muted">({{ __('Optional') }})</span> @endif
        </label>
    @endif
    <select @if ($placeholder) data-placeholder="{{ __($placeholder) }}" @endif name="{{ $name }}" id="{{ $id ?? $name }}" class="form-control select2 @error($name) is-invalid @enderror {{ $class ?? '' }}" @if ($multiselect) multiple @endif @error($name) is-invalid @enderror @if($required) required @endif style="width: 100%; {{ $style ?? '' }}">
        {{ $slot }}
    </select>
    @error($name)
        <p class="text text-danger m-0">{{ $message }}</p>
    @enderror
</div>
