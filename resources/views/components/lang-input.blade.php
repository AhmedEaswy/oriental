@foreach(locals() as $local)
    <div {{ $attributes->class('') }}>
        {!! Form::label(($title ?? $name),($title ?? $name) . " $local") !!}

        {!! Form::text("{$name}[{$local}]", null, ['class' => 'form-control','maxlength' => 255]) !!}
        @error("$name.".$local) <small class="text-danger">{{ $message }}</small> @enderror
    </div>
@endforeach
