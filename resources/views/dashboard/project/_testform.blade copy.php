<div class="m-4">
    <div class="card border-0 shadow-md p-4">
        <div class="card-body">
            <div class="row">

                <div class="mb-3 col-12 col-sm-6">
                    <label for="project_type" class="form-label">Project Type</label>
                    <select name="project_type" @class(['form-select', 'is-invalid' => $errors->has('project_type')]) id="project_type"
                        aria-label="Default select example">
                        <option value="frontend" @selected(old('project_type', $model['project_type']) == 'frontend')>Front-end</option>
                        <option value="backend" @selected(old('project_type', $model['project_type']) == 'backend')>Back-end</option>
                    </select>
                    @error('project_type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3 col-12 col-sm-6">
                    <label for="is_active" class="form-label">Is Active</label>
                    <select name="is_active" @class(['form-select', 'is-invalid' => $errors->has('is_active')]) id="is_active"
                        aria-label="Default select example">
                        <option value="1" @selected(old('is_active', $model['is_active']) == 1)>Active</option>
                        <option value="0" @selected(old('is_active', $model['is_active']) == 0)>Not Active</option>
                    </select>
                    @error('is_active')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-12">
                    <label class="form-label" for="project_name">Project Name</label>
                    <input type="text" name="project_name" value="{{ old('project_name', $model['project_name']) }}" id="project_name"
                        class="rounded form-control {{ $errors->has('project_name') ? 'is-invalid' : '' }}"
                        placeholder="project_name" />
                    @error('project_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-12">
                    <label class="form-label" for="project_link">Project Link</label>
                    <input type="text" name="project_link" value="{{ old('project_link', $model['project_link']) }}" id="project_link"
                        class="rounded form-control {{ $errors->has('project_link') ? 'is-invalid' : '' }}"
                        placeholder="project_link" />
                    @error('project_link')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-6">
                    <label class="form-label" for="order_number">Order Number (Optional)</label>
                    <input type="text" name="order_number" value="{{ old('order_number', $model['order_number']) }}" id="order_number"
                        class="rounded form-control {{ $errors->has('order_number') ? 'is-invalid' : '' }}"
                        placeholder="order_number" />
                    @error('order_number')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-6">
                    <label class="form-label" for="project_image">Project Image</label>
                    <input type="file" name="project_image" value="{{ old('project_image') }}" id="project_image"
                        class="form-control {{ $errors->has('project_image') ? 'is-invalid' : '' }}" placeholder="project_image" />
                        @if ($model['project_image'])
                            <img src="{{ asset($model['project_image']) }}" alt="" style="width: 45px; height: 45px"
                            class="rounded-circle" />
                        @endif
                    @error('project_image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <hr class="mt-3">

                <div id="backend_form" class="py-4">
                    <h2 class="h5">Back End</h2>
                    <div class="mb-3 col-12 col-sm-12">
                        <label class="form-label" for="description">Project Description</label>
                        <textarea class="form-control" name="description"
                            @class(['form-control', 'is-invalid' => $errors->has('description')]) id="description" placeholder="Enter project description"
                            rows="2">{{ old('description', $model['description']) }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3 col-12 col-sm-6">
                        <div class="kh_wrapper">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label" for="features_list[]">Add Features List</label>
                                <button class="kh_add_form_field btn btn-success px-1 py-0"><small>Add New Field +</small></button>
                            </div>
                            <div class="mt-2 d-flex align-items-center">
                                <input class="form-control rounded" type="text" name="features_list[]"><a href="#" class="invisible">Delete</a></div>
                            </div>
                    </div>

                </div>


                <div class="container mt-3">
                    <button type="submit" class="w-100 btn btn-primary bg-primary">Save</button>
                </div>

            </div>
        </div>
    </div>

</div>


@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".kh_wrapper");
    var add_button = $(".kh_add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="mt-2 d-flex align-items-center"><input class="form-control rounded" type="text" name="features_list[]"/><a href="#" class="kh_delete text-danger">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".kh_delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>
@endpush
