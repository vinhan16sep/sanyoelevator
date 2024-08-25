@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Elevator list</span></h1> <a class="btn btn-success btn-flat" href="{{ route('create-product') }}"><i class="ti-plus"></i> Create</a>
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
                    <div class="card-title">
                        Search
                    </div>
                    <div class="card-body">
                        <form action="{{ route('list-product') }}" class="my-search-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{ isset($req['title']) && $req['title'] != '' ? $req['title'] : '' }}" class="form-control input-default">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Category</label>
                                        <select class="form-control" name="product_category_id">
                                            <option value="">All</option>
                                            @foreach ($activedProductCategories as $item)
                                                <option value="{{$item['id']}}" {{ isset($req['product_category_id']) && $req['product_category_id'] == $item['id'] ? 'selected' : '' }}>{{$item['title_en']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Is active?</label>
                                        <select class="form-control" name="is_active">
                                            <option value="" {{ isset($req['is_active']) && $req['is_active'] === '' ? 'selected' : '' }}>All</option>
                                            <option value="1" {{ isset($req['is_active']) && $req['is_active'] === '1' ? 'selected' : '' }}>Actived</option>
                                            <option value="0" {{ isset($req['is_active']) && $req['is_active'] === '0' ? 'selected' : '' }}>Deactivated</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <button type="submit" class="btn btn-primary"><i class="ti-search icon-white"></i>&nbsp;&nbsp;OK</button>
                                        <a type="button" href="{{ route('list-product') }}" class="btn btn-default"></i>&nbsp;&nbsp;RESET</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="w-5">No.</th>
                                        <th class="w-5">Image</th>
                                        <th class="w-20">Title EN</th>
                                        <th class="w-20">Title JP</th>
                                        <th class="w-15">Category</th>
                                        <th class="w-5">Is active?</th>
                                        <th class="w-20">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $key => $item)
                                        <tr>
                                            <td scope="row">{{ $key + 1}}</td>
                                            <td><img style="max-height: 200px;" src="{{ $item->image ? asset($item->image) : asset('images/no-image-available-list.jpg') }}" /></td>
                                            <td >
                                                <strong>
                                                    <a href="{{ route('edit-product', ['id' => $item->id]) }}" style="color:#5873fe;">{{ $item->title_en }}</a>
                                                </strong>
                                            </td>
                                            <td >
                                                <strong>
                                                    <a href="{{ route('edit-product', ['id' => $item->id]) }}" style="color:#5873fe;">{{ $item->title_jp }}</a>
                                                </strong>
                                            </td>
                                            <td>{{ $item->product_category->title_en }}</td>
                                            <td>
                                                @if ($item->is_active == 1)
                                                    <span class="ti-check" style="color:green;font-weight: 900;"></span>
                                                @else
                                                    <span class="ti-close" style="color:red;font-weight: 900;"></span>
                                                @endif
                                            </td>
                                            <td class="color-primary">
                                                <a type="button" href="{{ route('edit-product', ['id' => $item->id]) }}" class="btn btn-primary btn-flat my-list-btn"><i class="ti-pencil icon-white"></i></a>
                                                <button type="button" class="btn btn-danger btn-flat m-l-5 my-list-btn" onclick="deleteRow('{{ $item->id }}', '/product/delete-row')"><i class="ti-trash"></i></button>
                                                @if ($item->is_active == '1')
                                                <button type="button" class="btn btn-default btn-flat m-l-5 my-list-btn" onclick="changeStatus('{{ $item->id }}', '0', '/product/change-status')">
                                                    <i class="ti-control-pause"></i>
                                                </button>
                                                @else
                                                <button type="button" class="btn btn-default btn-flat m-l-5 my-list-btn" onclick="changeStatus('{{ $item->id }}', '1', '/product/change-status')">
                                                    <i class="ti-control-play"></i>
                                                </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                        {{ $list->links() }}
            </div>
        </div>
        <!-- /# row -->
    </section>
</div>
<script type="text/javascript">
</script>
@endsection
