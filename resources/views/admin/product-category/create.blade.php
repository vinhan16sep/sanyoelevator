@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Create new</h1>
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
                            <form role="form" method="POST" action="{{ route('store-product-category') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                                    <label>Title EN</label>
                                    <input type="text" name="title_en" value="{{ old('title_en') }}" class="form-control" id="inputTitle" maxlength="255">
                                    @if ($errors->has('title_en'))
                                        <span style="color:red;">{{ $errors->first('title_en') }}</span>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('title_jp') ? ' has-error' : '' }}">
                                    <label>Title JP</label>
                                    <input type="text" name="title_jp" value="{{ old('title_jp') }}" class="form-control" id="inputTitle" maxlength="255">
                                    @if ($errors->has('title_jp'))
                                        <span style="color:red;">{{ $errors->first('title_jp') }}</span>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" id="inputSlug" readonly>
                                    @if ($errors->has('slug'))
                                        <span style="color:red;">{{ $errors->first('slug') }}</span>
                                    </span>
                                    @endif
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
                                
                                <a type="button" href="{{ route('list-product-category') }}" class="btn btn-default btn-outline"><i class="ti-back-left icon-black"></i>&nbsp;&nbsp;Back</a>
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
