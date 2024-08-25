@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Update</h1>
                </div>
            </div>
        </div>
        <!-- /# column -->
    </div>
    <!-- /# row -->
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                @include('admin.layouts.flash-message')
                <div class="card">
                    <div class="card-body offset-1 col-lg-10">
                        <div class="basic-form">
                            <form role="form" method="POST" action="{{ route('update-product', ['id' => $object->id, 'callback' => $callback]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <!-- Ảnh sản phẩm -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                            <label>Image <span class="my-required">*</span></label>
                                            <input type="file" name="image" class="form-control input-default" id="image">
                                            @if ($errors->has('image'))
                                                <span style="color:red;">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-preview">
                                        <img id="preview-image-before-upload" src="{{ asset('images/no-image-available.png') }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                                    <label>Title EN <span class="my-required">*</span></label>
                                    <input type="text" name="title_en" value="{{ old('title_en', $object->title_en) }}" class="form-control" id="inputTitle" maxlength="255">
                                    @if ($errors->has('title_en'))
                                        <span style="color:red;">{{ $errors->first('title_en') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('title_jp') ? ' has-error' : '' }}">
                                    <label>Title JP <span class="my-required">*</span></label>
                                    <input type="text" name="title_jp" value="{{ old('title_jp', $object->title_jp) }}" class="form-control" id="inputTitle" maxlength="255">
                                    @if ($errors->has('title_jp'))
                                        <span style="color:red;">{{ $errors->first('title_jp') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Slug <span class="my-required">*</span></label>
                                    <input type="text" name="slug" value="{{ old('slug', $object->slug) }}" class="form-control" id="inputSlug" readonly>
                                    @if ($errors->has('slug'))
                                        <span style="color:red;">{{ $errors->first('slug') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{ $errors->has('product_category_id') ? ' has-error' : '' }}">
                                    <label>Category <span class="my-required">*</span></label>
                                    <select class="form-control w-30" name="product_category_id" value="{{ old('product_category_id') }}" id="selectType">
                                        <option></option>
                                        @foreach ($activedProductCategories as $item)
                                            <option value="{{$item['id']}}" {{ old('product_category_id', $object->product_category_id) == $item['id'] ? 'selected' : '' }}>{{$item['title_en']}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('product_category_id'))
                                        <span style="color:red;">{{ $errors->first('product_category_id') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Description EN</label>
                                    <textarea name="description_en" class="form-control my-textarea" rows="5">{{ old('description_en', $object->description_en) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Description JP</label>
                                    <textarea name="description_jp" class="form-control my-textarea" rows="5">{{ old('description_jp', $object->description_jp) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content_en" class="form-label">Content EN</label>
                                    <textarea name="content_en" class="form-control txt-area-content" id="txtareaContentEn">{{ old('content_en', $object->content_en) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content_jp" class="form-label">Content JP</label>
                                    <textarea name="content_jp" class="form-control txt-area-content" id="txtareaContentJp">{{ old('content_jp', $object->content_jp) }}</textarea>
                                </div>

                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
                                    <label class="css-control css-control-primary css-checkbox" for="">
                                        <input type="checkbox" name="is_active" class="css-control-input" value="1"
                                            @if(old('is_active', $object->is_active) == 1)
                                                checked
                                            @endif
                                        >
                                        <span class="css-control-indicator"></span> Is active?
                                    </label>
                                </div>

                                <a type="button" href="{{ url(URL::previous()) }}" class="btn btn-default btn-outline"><i class="ti-back-left icon-black"></i>&nbsp;&nbsp;Back</a>
                                <button type="submit" class="btn btn-primary"><i class="ti-save icon-white"></i>&nbsp;&nbsp;Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
    </section>
</div>
<script src="{{ asset('admin/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    
    let url = window.location.origin;

    tinymce.init({
        selector: 'textarea.txt-area-content',
        height: 500,
        plugins: [
            'image',
            'table'
        ],

        image_title : true,
        automatic_uploads: true,
        file_picker_types: 'image',
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/fe-admin/upload/post-tinymce-image');
            var token = '{{ csrf_token() }}';
            xhr.setRequestHeader("X-CSRF-Token", token);
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullpage | ' +
        'forecolor backcolor emoticons | help | codesample',
        menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help'
    });
    
    $('#preview-image-before-upload').attr('src', "{{ $object->image ? asset($object->image) : asset('images/no-image-available.png') }}"); 

    $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('#preview-image-before-upload').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]); 
    });

    $('#inputTitle').change(function (){
        let slug = to_slug($('#inputTitle').val());
        $('#inputSlug').val(slug);
    });
    $('#inputTitle').focusout(function (){
        let slug = to_slug($('#inputTitle').val());
        $('#inputSlug').val(slug);
    });
</script>
@endsection
