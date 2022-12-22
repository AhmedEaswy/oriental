@php($id = uniqid('image'))
<!-- {{ $name }} Field -->
<div {{ $attributes->class('form-group py-3') }}>
    <!-- Button trigger modal -->
    <button type="button" data-bs-toggle="modal" data-toggle="modal" data-target="#{{ $id }}Id" data-original-title="@lang('main.image_preview')" data-bs-target="#{{ $id }}Id" class="btn btn-primary btn-sm mb-2">
        {!! $title !!}
    </button>
    @if (!$attributes->has('stop'))
        {!! Form::file($name, ['class' => 'form-control','onchange'=>'imagePreview("'.$id.'",this)', 'multiple']) !!}
    @endif
</div>

@push('modal')
    <!-- Modal -->
    <div class="modal fade" id="{{ $id }}Id" tabindex="-1" role="dialog" aria-labelledby="{{ $id }}Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                    <button class="btn-close close" type="button" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    {{--                {!! Form::image($value ?? config('app.image'),$name,['alt'=>$title,'width'=>'100%','id'=>$id,'loading'=>'lazy']) !!}--}}
                    <img loading="lazy" src="{{  $value ?? config('app.image') }}" id="{{ $id }}" alt="{{ $title }}" width="100%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">{{ __('main.close') }}</button>
                </div>
            </div>
        </div>
    </div>

@endpush
