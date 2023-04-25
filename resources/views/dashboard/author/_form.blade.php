<div class="card-header border-0 d-flex justify-content-between align-items-center">
    <h5 class="card-title">{{ $form_title }}</h5>
    <div>
        <a href="{{ url()->previous() }}" class="btn btn-cancel shadow-sm px-2 ms-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-arrow-left">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            <span>Cancel</span>
        </a>
        <x-BaseComponents.form.common.submit_button />

    </div>
    {{-- <button type="submit" class="btn btn-primary px-5">{{ str_word_count($form_title, 1)[0] ?? 'Save' }}</button> --}}
</div>
<hr class="hr p-0 mx-3 my-1">
<div class="card-body table-responsive p-4">
    <div class="row">

        <div class="mb-4 col-12 col-sm-12">
            <label class="form-label" for="name">name</label>
            <input type="text" name="name" value="{{ old('name', $model['name']) }}" id="name"
                class="rounded form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="name" />
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-4 col-12 col-sm-6">
            <label class="form-label" for="avatar">avatar</label>
            <input type="file" name="avatar" value="{{ old('avatar', $model['avatar']) }}" id="avatar"
                class="form-control {{ $errors->has('avatar') ? 'is-invalid' : '' }}" placeholder="avatar" />
            @if ($model['avatar'])
                <img src="{{ asset($model['avatar']) }}" alt="" style="width: 45px; height: 45px"
                    class="rounded-circle" />
            @endif
            @error('avatar')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-4 col-12 col-sm-12">
            <label class="form-label" for="linkedin">linkedin</label>
            <input type="url" name="linkedin" value="{{ old('linkedin', $model['socials'])->linkedin ?? '' }}"
                id="linkedin" class="rounded form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}"
                placeholder="linkedin" />
            @error('linkedin')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-4 col-12 col-sm-12">
            <label class="form-label" for="twitter">twitter</label>
            <input type="url" name="twitter" value="{{ old('twitter', $model['socials'])->twitter ?? '' }}"
                id="twitter" class="rounded form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}"
                placeholder="twitter" />
            @error('twitter')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4 col-12 col-sm-12">
            <label class="form-label" for="github">github</label>
            <input type="url" name="github" value="{{ old('github', $model['socials'])->github ?? '' }}"
                id="github" class="rounded form-control {{ $errors->has('github') ? 'is-invalid' : '' }}"
                placeholder="github" />
            @error('github')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    </div>
</div>
