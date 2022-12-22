<div {{ $attributes->class('') }}>
  {!! Form::label(($title ?? $name),($title ?? $name)) !!}
  {!! Form::text("{$name}", null, ['class' => 'form-control','maxlength' => 255]) !!}
  @error("$name") <small class="text-danger">{{ $message }}</small> @enderror
</div>
