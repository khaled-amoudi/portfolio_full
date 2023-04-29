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
            <label class="form-label" for="title">Title</label>
            <input type="text" name="title" value="{{ old('title', $model['title']) }}" id="title"
                class="rounded form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Title" />
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-4 col-12 col-sm-6">
            <label class="form-label" for="image">Image</label>
            <input type="file" name="image" value="{{ old('image') }}" id="image"
                class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" placeholder="Image" />
            @if ($model['image'])
                <img src="{{ asset($model['image']) }}" alt="" style="width: 45px; height: 45px"
                    class="rounded-circle" />
            @endif
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-3 col-12 col-sm-6">
            <label for="author_id" class="form-label">Author</label>
            <select name="author_id" @selected(true) class="form-select" id="author_id"
                aria-label="Default select example">
                @foreach ($additionalData['authors'] as $author)
                    <option value="{{ $author->id }}" @selected(old('author_id', $model['author_id']) == $author->id)>{{ $author->name }}</option>
                @endforeach
            </select>
            @error('author_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3 col-12 col-sm-4">
            <label for="is_active" class="form-label">Is Active</label>
            <select name="is_active" @class(['form-select', 'is-invalid' => $errors->has('is_active')]) id="is_active" aria-label="Default select example">
                <option value="1" @selected(old('is_active', $model['is_active']) == 1)>Active</option>
                <option value="0" @selected(old('is_active', $model['is_active']) == 0)>Not Active</option>
            </select>
            @error('is_active')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-3 col-12 col-sm-4">
            <label for="lang" class="form-label">Blog Language</label>
            <select name="lang" @class(['form-select', 'is-invalid' => $errors->has('lang')]) id="lang" aria-label="Default select example">
                <option value="ar" @selected(old('lang', $model['lang']) == 'ar')>عربي</option>
                <option value="en" @selected(old('lang', $model['lang']) == 'en')>English</option>
                {{-- @selected(old('lang', $model['lang']) == 'en') --}}
            </select>
            @error('lang')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-4 col-12 col-sm-4">
            <label class="form-label" for="read_time">Reading time needed</label>
            <input type="number" name="read_time" value="{{ old('read_time', $model['read_time']) }}" id="read_time"
                class="rounded form-control {{ $errors->has('read_time') ? 'is-invalid' : '' }}" placeholder="Reading time needed" />
            @error('read_time')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>



        <div class="mb-4 col-12 col-sm-12">
            <label class="form-label">Select Tags</label>
            <select name="tags[]" class="multiple-select" data-placeholder="Choose Blog Tags"
                multiple="multiple">
                @foreach ($additionalData['tags'] as $tag)
                <option value="{{ $tag->id }}" @selected(collect(old('tags'))->contains($tag->id)) @selected($model['tags']->contains($tag)) >{{ $tag->name }}</option>
            @endforeach
            </select>
        </div>


        <div class="container">
            <textarea name="body" id="editor">
                        {{ $model['body'] }}
                    </textarea>
        </div>


    </div>
</div>



@push('style')
    <style>
        #container {
            width: 1000px;
            margin: 20px auto;
        }

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script> --}}
@endpush
@push('script')
    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                    'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                    '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            placeholder: 'Add Your Blog Body ..',
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            // Be careful with enabling previews
            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
            htmlEmbed: {
                showPreviews: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            // The "super-build" contains more premium features that require additional configuration, disable them below.
            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'CKBox',
                'CKFinder',
                'EasyImage',
                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                // Storing images as Base64 is usually a very bad idea.
                // Replace it on production website with other solutions:
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                // 'Base64UploadAdapter',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                // from a local file system (file://) - load this site via HTTP server if you enable MathType
                'MathType'
            ]
        });
    </script>
@endpush
