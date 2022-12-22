<div class="row">
<x-lang-input name="title" title="title" class="col-md-6"></x-lang-input>
<x-lang-text-area name="content" title="content" class="col-md-6"></x-lang-text-area>
    <div class="col-sm-6">
        <x-admin.image-field title="image" :value="isset($contact) ? $contact?->image : null"></x-admin.image-field>
        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
</div>
