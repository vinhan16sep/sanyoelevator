@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Cập nhật</h1>
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
                            <form role="form" method="POST" action="{{ route('update-banner', ['id' => $object->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                            <label>Banner <span class="my-required">*</span></label>
                                            <input type="file" name="image" class="form-control input-default" id="image">
                                            @if ($errors->has('image'))
                                                <span style="color:red;">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-8 my-preview">
                                        <img id="preview-image-before-upload" src="{{ asset('images/no-image-available.png') }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                                    <label>Title EN <span class="my-required">*</span></label>
                                    <input type="text" name="title_en" value="{{ old('title_en', $object->title_en) }}" class="form-control" maxlength="255">
                                    @if ($errors->has('title_en'))
                                        <span style="color:red;">{{ $errors->first('title_en') }}</span>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('title_jp') ? ' has-error' : '' }}">
                                    <label>Title JP <span class="my-required">*</span></label>
                                    <input type="text" name="title_jp" value="{{ old('title_jp', $object->title_jp) }}" class="form-control" maxlength="255">
                                    @if ($errors->has('title_jp'))
                                        <span style="color:red;">{{ $errors->first('title_jp') }}</span>
                                    </span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label>Type <span class="my-required">*</span></label>
                                    <select class="form-control w-30" name="type" value="{{ old('type') }}" id="selectType">
                                        <option value="1" {{ old('type', $object->type) == 1 ? 'selected' : '' }}>Banner</option>
                                        <option value="2" {{ old('type', $object->type) == 2 ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span style="color:red;">{{ $errors->first('type') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" name="link" value="{{ old('link', $object->link) }}" class="form-control">
                                    @if ($errors->has('link'))
                                        <span style="color:red;">{{ $errors->first('link') }}</span>
                                    </span>
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

                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
                                    <label class="css-control css-control-primary css-checkbox" for="">
                                        <input type="checkbox" name="is_active" class="css-control-input" value="1"
                                            @if (old('is_active', $object->is_active) == 1)
                                                checked
                                            @endif
                                        >
                                        <span class="css-control-indicator"></span> Is active?
                                        @if ($errors->has('is_active'))
                                            <span style="color:red;">{{ $errors->first('is_active') }}</span>
                                        @endif
                                    </label>
                                </div>

                                <a type="button" href="{{ route('list-banner') }}" class="btn btn-default btn-outline"><i class="ti-back-left icon-black"></i>&nbsp;&nbsp;Back</a>
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
<script type="text/javascript">
    
    $('#preview-image-before-upload').attr('src', "{{ $object->image ? asset($object->image) : asset('images/no-image-available.png') }}"); 

    $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('#preview-image-before-upload').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]); 
    });
</script>
@endsection
