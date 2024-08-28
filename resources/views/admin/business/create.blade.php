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
                            <form role="form" method="POST" action="{{ route('store-business') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                                    <label>Title EN <span class="my-required">*</span></label>
                                    <input type="text" name="title_en" value="{{ old('title_en') }}" class="form-control" id="inputTitle" maxlength="255">
                                    @if ($errors->has('title_en'))
                                        <span style="color:red;">{{ $errors->first('title_en') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('title_jp') ? ' has-error' : '' }}">
                                    <label>Title JP <span class="my-required">*</span></label>
                                    <input type="text" name="title_jp" value="{{ old('title_jp') }}" class="form-control" id="inputTitle" maxlength="255">
                                    @if ($errors->has('title_jp'))
                                        <span style="color:red;">{{ $errors->first('title_jp') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('sub_title_en') ? ' has-error' : '' }}">
                                    <label>Sub Title EN <span class="my-required">*</span></label>
                                    <input type="text" name="sub_title_en" value="{{ old('sub_title_en') }}" class="form-control" id="inputTitle" maxlength="255">
                                    @if ($errors->has('sub_title_en'))
                                        <span style="color:red;">{{ $errors->first('sub_title_en') }}</span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('sub_title_jp') ? ' has-error' : '' }}">
                                    <label>Sub Title JP <span class="my-required">*</span></label>
                                    <input type="text" name="sub_title_jp" value="{{ old('sub_title_jp') }}" class="form-control" id="inputTitle" maxlength="255">
                                    @if ($errors->has('sub_title_jp'))
                                        <span style="color:red;">{{ $errors->first('sub_title_jp') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Description EN</label>
                                    <textarea name="description_en" class="form-control my-textarea" rows="5">{{ old('description_en') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Description JP</label>
                                    <textarea name="description_jp" class="form-control my-textarea" rows="5">{{ old('description_jp') }}</textarea>
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
                                
                                <a type="button" href="{{ route('list-business') }}" class="btn btn-default btn-outline"><i class="ti-back-left icon-black"></i>&nbsp;&nbsp;Quay lại</a>
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

</script>
@endsection
