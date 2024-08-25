@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Danh sách banner</span></h1>
                    <a class="btn btn-success btn-flat" href="{{ route('create-banner') }}"><i class="ti-plus"></i> Tạo mới</a>
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
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="w-5">No.</th>
                                        <th class="w-20">Banner</th>
                                        <th class="w-5">Type</th>
                                        <th class="w-20">Title EN</th>
                                        <th class="w-20">Title JP</th>
                                        <th class="w-10">Is active?</th>
                                        <th class="w-30">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $key => $item)
                                        <tr>
                                            <th scope="row">{{ $key + 1}}</th>
                                            <td><img style="max-height: 200px;" src="{{ $item->image ? asset($item->image) : asset('images/no-image-available-list.jpg') }}" /></td>
                                            <td>{{ $item->type == 1 ? "Banner" : "Other"}}</td>
                                            <td>{{ $item->title_en}}</td>
                                            <td>{{ $item->title_jp}}</td>
                                            <td>
                                                @if ($item->is_active == 1)
                                                    <span class="ti-check" style="color:green;font-weight: 900;"></span>
                                                @else
                                                    <span class="ti-close" style="color:red;font-weight: 900;"></span>
                                                @endif
                                            </td>
                                            <td class="color-primary">
                                                <a type="button" href="{{ route('edit-banner', ['id' => $item->id]) }}" class="btn btn-primary btn-flat my-list-btn"><i class="ti-pencil icon-white"></i></a>
                                                <button type="button" class="btn btn-danger btn-flat m-l-5 my-list-btn" onclick="deleteRow('{{ $item->id }}', '/banner/delete-row')"><i class="ti-trash"></i></button>
                                                @if ($item->is_active == '1')
                                                <button type="button" class="btn btn-default btn-flat m-l-5 my-list-btn" onclick="changeStatus('{{ $item->id }}', '0', '/banner/change-status')">
                                                    <i class="ti-control-pause"></i>
                                                </button>
                                                @else
                                                <button type="button" class="btn btn-default btn-flat m-l-5 my-list-btn" onclick="changeStatus('{{ $item->id }}', '1', '/banner/change-status')">
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
@endsection
