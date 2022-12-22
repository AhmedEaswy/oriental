@foreach(locals() as $local)
    <div {{ $attributes->class('') }}>
        {!! Form::label($title ?? $name,($title ?? $name) ." {$local}") !!}
        {!! Form::textarea("{$name}[$local]", null, ['class' => 'form-control texteditor']) !!}
        @error("{$name}.".$local) <small class="text-danger">{{ $message }}</small> @enderror
    </div>
@endforeach
