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

                <div class="mb-3 col-12 col-sm-6">
                    <label for="project_type" class="form-label">Project Type</label>
                    <select name="project_type" @class(['form-select', 'is-invalid' => $errors->has('project_type')]) id="project_type"
                        aria-label="Default select example">
                        <option value="frontend" @selected(old('project_type', $model['project_type']) == 'frontend')>Front-end</option>
                        <option value="backend" @selected(old('project_type', $model['project_type']) == 'backend')>Back-end</option>
                        <option value="uxui" @selected(old('project_type', $model['project_type']) == 'uxui')>ux-ui</option>
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
                    <input type="text" name="project_name" value="{{ old('project_name', $model['project_name']) }}"
                        id="project_name"
                        class="rounded form-control {{ $errors->has('project_name') ? 'is-invalid' : '' }}"
                        placeholder="Project Name" />
                    @error('project_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-6">
                    <label class="form-label" for="project_link">Project Link</label>
                    <input type="url" name="project_link" value="{{ old('project_link', $model['project_link']) }}"
                        id="project_link"
                        class="rounded form-control {{ $errors->has('project_link') ? 'is-invalid' : '' }}"
                        placeholder="Project Link" />
                    @error('project_link')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-3">
                    <label class="form-label" for="col_sm">(Front | Ux-UI) col-sm-??</label>
                    <input type="number" name="col_sm" value="{{ old('col_sm', $model['front_cols_sm']) }}"
                        id="col_sm"
                        class="rounded form-control {{ $errors->has('col_sm') ? 'is-invalid' : '' }}"
                        placeholder="6" />
                    @error('col_sm')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-3">
                    <label class="form-label" for="col_lg">(Front | Ux-UI) col-lg-??</label>
                    <input type="number" name="col_lg" value="{{ old('col_lg', $model['front_cols_lg']) }}"
                        id="col_lg"
                        class="rounded form-control {{ $errors->has('col_lg') ? 'is-invalid' : '' }}"
                        placeholder="4" />
                    @error('col_lg')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-6">
                    <label class="form-label" for="order_number">Order Number (Optional)</label>
                    <input type="text" name="order_number" value="{{ old('order_number', $model['order_number']) }}"
                        id="order_number"
                        class="rounded form-control {{ $errors->has('order_number') ? 'is-invalid' : '' }}"
                        placeholder="Order Number" />
                    @error('order_number')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4 col-12 col-sm-6">
                    <label class="form-label" for="project_image">Project Image</label>
                    <input type="file" name="project_image" value="{{ old('project_image') }}" id="project_image"
                        class="form-control {{ $errors->has('project_image') ? 'is-invalid' : '' }}"
                        placeholder="Project Image" />
                    @if ($model['project_image'])
                        <img src="{{ asset($model['project_image']) }}" alt=""
                            style="width: 45px; height: 45px" class="rounded-circle" />
                    @endif
                    @error('project_image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <hr class="mt-3">

                <div id="backend_form" class="py-4">
                    <h2 class="h5">Back End</h2>
                    <div class="row">
                        <div class="mb-3 col-12 col-sm-12">
                            <label class="form-label" for="description">Project Description</label>
                            <textarea class="form-control" name="description" @class(['form-control', 'is-invalid' => $errors->has('description')]) id="description"
                                placeholder="Enter project description" rows="2">{{ old('description', $model['description']) }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3 col-12 col-sm-6">
                            <div class="kh_wrapper" data-key="characteristics_list">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="characteristics_list[]">Add Characteristics
                                        List</label>
                                    <button class="kh_add_form_field btn bg-light-success px-1 py-0"><small>Add New
                                            Field
                                            +</small></button>
                                </div>
                                @if (request()->route()->getName() == 'dashboard.project.create')
                                    <div class="mt-2">
                                        <div class="input-group">
                                            <input type="text" name="characteristics_list[]"
                                                class="kh_input form-control rounded"
                                                aria-describedby="characteristics_list">
                                        </div>
                                    </div>
                                @else
                                    @forelse ($model['characteristics_list'] as $characteristic)
                                        @if ($loop->first)
                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <input type="text" value="{{ $characteristic }}"
                                                        name="characteristics_list[]"
                                                        class="kh_input form-control rounded"
                                                        aria-describedby="characteristics_list">
                                                </div>
                                            </div>
                                        @else
                                            <div class="mt-2 parent_delete">
                                                <div class="input-group"><input required type="text"
                                                        value="{{ $characteristic }}" name="characteristics_list[]"
                                                        id="characteristics_list" class="form-control rounded-start"
                                                        aria-describedby="characteristics_list"><a href="#"
                                                        class="kh_delete input-group-text"
                                                        id="characteristics_list"><img
                                                            src="https://freesvg.org/img/trash.png" width="20px"
                                                            alt="delete"></a></div>
                                            </div>
                                        @endif
                                    @empty
                                        <div class="mt-2">
                                            <div class="input-group">
                                                <input type="text" name="characteristics_list[]"
                                                    class="kh_input form-control rounded"
                                                    aria-describedby="characteristics_list">
                                            </div>
                                        </div>
                                    @endforelse
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 col-12 col-sm-6">
                            <div class="kh_wrapper" data-key="tools_list">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="tools_list[]">Add Tools & Technologies List</label>
                                    <button class="kh_add_form_field btn bg-light-success px-1 py-0"><small>Add New
                                            Field
                                            +</small></button>
                                </div>
                                @if (request()->route()->getName() == 'dashboard.project.create')
                                    <div class="mt-2">
                                        <div class="input-group">
                                            <input type="text" name="tools_list[]"
                                                class="kh_input form-control rounded" aria-describedby="tools_list">
                                        </div>
                                    </div>
                                @else
                                    @forelse ($model['tools_list'] as $tool)
                                        @if ($loop->first)
                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <input type="text" value="{{ $tool }}"
                                                        name="tools_list[]" class="kh_input form-control rounded"
                                                        aria-describedby="tools_list">
                                                </div>
                                            </div>
                                        @else
                                            <div class="mt-2 parent_delete">
                                                <div class="input-group"><input required type="text"
                                                        value="{{ $tool }}" name="tools_list[]"
                                                        id="tools_list" class="form-control rounded-start"
                                                        aria-describedby="tools_list"><a href="#"
                                                        class="kh_delete input-group-text" id="tools_list"><img
                                                            src="https://freesvg.org/img/trash.png" width="20px"
                                                            alt="delete"></a></div>
                                            </div>
                                        @endif
                                    @empty
                                        <div class="mt-2">
                                            <div class="input-group">
                                                <input type="text"
                                                    name="tools_list[]" class="kh_input form-control rounded"
                                                    aria-describedby="tools_list">
                                            </div>
                                        </div>
                                    @endforelse
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 col-12 col-sm-6">
                            <div class="kh_image_wrapper" data-key="mockups">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="mockups[]">Add Mockups</label>
                                    <button class="kh_image_add_form_field btn bg-light-success px-1 py-0"><small>Add
                                            New Field
                                            +</small></button>
                                </div>
                                @if (request()->route()->getName() == 'dashboard.project.create')
                                    <div class="mt-2">
                                        <div class="input-group input-group-lg">
                                            <input type="file" name="mockups[]"
                                                class="kh_image_input form-control border rounded-start"
                                                aria-describedby="mockups">
                                        </div>
                                    </div>
                                @else
                                    @forelse ($model['mockups'] as $mockup)
                                        @if ($loop->first)
                                        <div class="mt-2">
                                            <div class="input-group input-group-lg">
                                                <input type="file" value="{{ $mockup }}" name="mockups[]"
                                                    class="kh_image_input form-control border rounded-start"
                                                    aria-describedby="mockups">
                                            </div>
                                        </div>
                                            @else
                                        <div class="mt-2 parent_delete">
                                            <div class="input-group input-group-lg">
                                                <input required type="file" name="mockups[]"
                                                    value="{{ $mockup }}" id="mockups"
                                                    class="form-control border rounded-start"
                                                    aria-describedby="mockups">
                                                <a href="#" class="kh_delete input-group-text" id="mockups">
                                                    <img src="https://freesvg.org/img/trash.png" width="20px"
                                                        alt="delete"></a>
                                            </div>
                                        </div>
                                        @endif
                                    @empty
                                        <div class="mt-2">
                                            <div class="input-group input-group-lg">
                                                <input type="file" name="mockups[]"
                                                    class="kh_image_input form-control border rounded-start"
                                                    aria-describedby="mockups">
                                            </div>
                                        </div>
                                    @endforelse
                                @endif
                            </div>
                        </div>

                        <div class="mb-4 col-12 col-sm-12">
                            <label class="form-label" for="github_repo_link">Github Project Repository</label>
                            <input type="url" name="github_repo_link"
                                value="{{ old('github_repo_link', $model['github_repo_link']) }}"
                                id="github_repo_link"
                                class="rounded form-control {{ $errors->has('github_repo_link') ? 'is-invalid' : '' }}"
                                placeholder="Github Project Repository Link" />
                            @error('github_repo_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>


    </div>

</div>


@push('script')
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script>
        $(document).ready(function() {

            // code of lists (texts) multi input generator
            var max_fields = 10;
            var wrapper = $(".kh_wrapper");
            var add_button = $(".kh_add_form_field");
            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                var unique_key = $(this).parent().closest(wrapper).data(
                    'key'); // هان جبنا ال يونيك كي تبع الرابر اللي انا فيه وفققققطط
                var this_wrapper = $(this).parent().closest(
                    wrapper); // هاد عشان يضيف انبوت جديد فقط للرابر اللي انا فيه حاليا مش لكل الرابرز
                // var input_name = $(this).parent().closest(wrapper).find('.kh_input').first().attr('name');
                if (true) { // x <= max_fields
                    x++;

                    var new_input_box = $(
                        '<div class="mt-2 parent_delete"><div class="input-group"><input required type="text" name="' +
                        unique_key + '[]" id="' + unique_key +
                        '" class="form-control rounded-start" aria-describedby="' +
                        unique_key + '"><a href="#" class="kh_delete input-group-text" id="' +
                        unique_key +
                        '"><img src="https://freesvg.org/img/trash.png" width="20px" alt="delete"></a></div></div>'
                    ).hide();
                    $(this_wrapper).append(new_input_box); //add input box
                    new_input_box.show(300);
                } else {
                    alert('You Reached the limits')
                }
            });
            $(wrapper).on("click", ".kh_delete", function(e) {
                e.preventDefault();
                $(this).parent().closest('.parent_delete').hide(200, function() {
                    $(this).remove();
                });
                x--;
            })




            // code of Image (mockups) multi input generator
            var image_wrapper = $(".kh_image_wrapper");
            var image_add_button = $(".kh_image_add_form_field");

            $(image_add_button).click(function(e) {
                e.preventDefault();
                var unique_key = $(this).parent().closest(image_wrapper).data(
                    'key'); // هان جبنا ال يونيك كي تبع الرابر اللي انا فيه وفققققطط
                var this_image_wrapper = $(this).parent().closest(
                    image_wrapper); // هاد عشان يضيف انبوت جديد فقط للرابر اللي انا فيه حاليا مش لكل الرابرز
                // var input_name = $(this).parent().closest(image_wrapper).find('.kh_input').first().attr('name');
                if (true) { // x <= max_fields
                    x++;

                    var new_image_input_box = $(
                        '<div class="mt-2 parent_delete"><div class="input-group input-group-lg"><input required type="file" name="' +
                        unique_key + '[]" id="' + unique_key +
                        '" class="form-control border rounded-start" aria-describedby="' +
                        unique_key + '"><a href="#" class="kh_delete input-group-text" id="' +
                        unique_key +
                        '"><img src="https://freesvg.org/img/trash.png" width="20px" alt="delete"></a></div></div>'
                    ).hide();

                    $(this_image_wrapper).append(new_image_input_box); //add input box
                    new_image_input_box.show(300);
                } else {
                    alert('You Reached the limits')
                }
            });
            $(image_wrapper).on("click", ".kh_delete", function(e) {
                e.preventDefault();
                $(this).parent().closest('.parent_delete').hide(200, function() {
                    $(this).remove();
                });
                x--;
            })





            // Show, Hide Backend form by changes of projectType selectbox
            const select = document.getElementById('project_type');
            document.getElementById('backend_form').style.display = 'none';
            select.addEventListener('change', function () {
                if(select.value == 'backend') {
                    document.getElementById('backend_form').style.display = 'block';
                } else {
                    document.getElementById('backend_form').style.display = 'none';
                }
            });
        });
    </script>
@endpush
