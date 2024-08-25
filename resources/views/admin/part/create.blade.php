@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Create</h1>
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
                            <form role="form" method="POST" action="{{ route('store-part') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')

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
                                    <input type="text" name="title_en" value="{{ old('title_en') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('title_en'))
                                        <span style="color:red;">{{ $errors->first('title_en') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('title_jp') ? ' has-error' : '' }}">
                                    <label>Title JP <span class="my-required">*</span></label>
                                    <input type="text" name="title_jp" value="{{ old('title_jp') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('title_jp'))
                                        <span style="color:red;">{{ $errors->first('title_jp') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                    <label>Code <span class="my-required">*</span></label>
                                    <input type="text" name="code" value="{{ old('code') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('code'))
                                        <span style="color:red;">{{ $errors->first('code') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label>Type </label>
                                    <input type="text" name="type" value="{{ old('type') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('type'))
                                        <span style="color:red;">{{ $errors->first('type') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('load') ? ' has-error' : '' }}">
                                    <label>Load </label>
                                    <input type="text" name="load" value="{{ old('load') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('load'))
                                        <span style="color:red;">{{ $errors->first('load') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('speed') ? ' has-error' : '' }}">
                                    <label>Speed </label>
                                    <input type="text" name="speed" value="{{ old('speed') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('speed'))
                                        <span style="color:red;">{{ $errors->first('speed') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('power') ? ' has-error' : '' }}">
                                    <label>Power </label>
                                    <input type="text" name="power" value="{{ old('power') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('power'))
                                        <span style="color:red;">{{ $errors->first('power') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('qc_number') ? ' has-error' : '' }}">
                                    <label>CQ Number </label>
                                    <input type="text" name="qc_number" value="{{ old('qc_number') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('qc_number'))
                                        <span style="color:red;">{{ $errors->first('qc_number') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                    <label>Inspection Date </label>
                                    <input type="text" name="date" value="{{ old('date') }}" class="form-control" maxlength="255">
                                    @if ($errors->has('date'))
                                        <span style="color:red;">{{ $errors->first('date') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control my-textarea" rows="5">{{ old('description') }}</textarea>
                                </div>

                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
                                    <label class="css-control css-control-primary css-checkbox" for="">
                                        <input type="checkbox" name="is_active" class="css-control-input" value="1" checked
                                            @if(old('is_active') == 1)
                                                checked
                                            @endif
                                        >
                                        <span class="css-control-indicator"></span> Is active?
                                    </label>
                                </div>
                                
                                <a type="button" href="{{ route('list-part') }}" class="btn btn-default btn-outline"><i class="ti-back-left icon-black"></i>&nbsp;&nbsp;Quay lại</a>
                                <button type="submit" class="btn btn-primary"><i class="ti-save icon-white"></i>&nbsp;&nbsp;Lưu</button>
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

    $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('#preview-image-before-upload').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]); 
    });
</script>
@endsection
