@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Part list</span></h1> <a class="btn btn-success btn-flat" href="{{ route('create-part') }}"><i class="ti-plus"></i> Create</a>
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
                        <form action="{{ route('list-part') }}" class="my-search-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{ isset($req['title']) && $req['title'] != '' ? $req['title'] : '' }}" class="form-control input-default">
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
                                        <a type="button" href="{{ route('list-part') }}" class="btn btn-default"></i>&nbsp;&nbsp;RESET</a>
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
                                        <th class="w-15">Title EN</th>
                                        <th class="w-15">Title JP</th>
                                        <th class="w-15">Code</th>
                                        <th class="w-10">Serial list</th>
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
                                                    <a href="{{ route('edit-part', ['id' => $item->id]) }}" style="color:#5873fe;">{{ $item->title_en }}</a>
                                                </strong>
                                            </td>
                                            <td >
                                                <strong>
                                                    <a href="{{ route('edit-part', ['id' => $item->id]) }}" style="color:#5873fe;">{{ $item->title_jp }}</a>
                                                </strong>
                                            </td>
                                            <td >
                                                <strong>
                                                    <a href="{{ route('edit-part', ['id' => $item->id]) }}" style="color:#5873fe;">{{ $item->code }}</a>
                                                </strong>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-flat m-l-5" onclick="showSerialList('{{ $item->id }}', '{{ $item->code }}')">Show</button>
                                            </td>
                                            <td>
                                                @if ($item->is_active == 1)
                                                    <span class="ti-check" style="color:green;font-weight: 900;"></span>
                                                @else
                                                    <span class="ti-close" style="color:red;font-weight: 900;"></span>
                                                @endif
                                            </td>
                                            <td class="color-primary">
                                                <a type="button" href="{{ route('edit-part', ['id' => $item->id]) }}" class="btn btn-primary btn-flat my-list-btn"><i class="ti-pencil icon-white"></i></a>
                                                <button type="button" class="btn btn-danger btn-flat m-l-5 my-list-btn" onclick="deleteRow('{{ $item->id }}', '/part/delete-row')"><i class="ti-trash"></i></button>
                                                <button type="button" class="btn btn-primary btn-flat m-l-5 my-list-btn" onclick="openAddPartSerialModal('{{ $item->id }}')"><i class="ti-plus"></i></button>
                                                @if ($item->is_active == '1')
                                                <button type="button" class="btn btn-default btn-flat m-l-5 my-list-btn" onclick="changeStatus('{{ $item->id }}', '0', '/part/change-status')">
                                                    <i class="ti-control-pause"></i>
                                                </button>
                                                @else
                                                <button type="button" class="btn btn-default btn-flat m-l-5 my-list-btn" onclick="changeStatus('{{ $item->id }}', '1', '/part/change-status')">
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
<!-- Modal Add part serial -->
<div class="modal fade" id="addPartSerial">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <strong>Add serial no</strong>
                </h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control form-white" placeholder="Serial No" id="serial" maxlength="255" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-white" placeholder="Secret" id="secret" maxlength="255" />
                        </div>
                        <input type="hidden" id="partId" value="" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary waves-effect waves-light save-product" onclick="addSerialNo()">OK</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->

<!-- Modal Show part serials -->
<div class="modal fade" id="showPartSerials">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <strong><span id="modalPartCode"></span></strong>
                </h5>
            </div>
            <div class="modal-body">
                <div class="table-responsive" style="height: 400px;">
                    <table class="table">
                        <tbody id="showProductBody">

                        <tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" class="part-id" value="" id="selectedPartId">
                <button type="button" class="btn btn-primary waves-effect" id="saveChangedData">Save</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->

<script type="text/javascript">

    let url = window.location.origin;
    let serials = [];
    let secrets = [];

    $('#saveChangedData').click(function() {

        getPartSerialInfo();

        let checkSerial = true;
        for (let i = 0; i < serials.length; ++i) {
            if (serials[i] == '') {
                checkSerial = false;
            }
        }
        
        let checkSecret = true;
        for (let i = 0; i < secrets.length; ++i) {
            if (secrets[i] == '') {
                checkSecret = false;
            }
        }

        if (!checkSerial || !checkSecret) {
            alert('Full information, please!');
        } else {
            $.ajax({
                url: url + '/fe-admin/part/change-part-serials',
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    part_id: $('#selectedPartId').val(),
                    serials: serials,
                    secrets: secrets
                },
                success: function (res) {
                    alert(res.msg);
                },
                error: function (error) { 
                    alert(error.responseJSON.msg);
                }
            });
        }
    });

    function showSerialList(partId, partCode) {
        $.ajax({
            url: url + '/fe-admin/part/get-part-serials',
            method: 'GET',
            data: {
                part_id: partId
            },
            success: function (res) {
                let part_id = '';
                let html = '';
                if (res.data.length > 0) {
                    $.each(res.data, function(key, value){
                        html += '<tr>';
                        html += '<td>' + (key + 1) + '</td>';
                        html += '<td><input type="text" class="form-control serial" value="' + value.serial + '"></td>';
                        html += '<td><input type="text" class="form-control secret" value="' + value.secret + '"></td>';
                        html += '<td><button type="button" class="btn btn-danger btn-flat m-l-5 my-list-btn" onclick="removeRow($(this))"><i class="ti-trash"></i></button></td>';
                        html += '<input type="hidden" class="product-id" value="' + value.part_id + '">';
                        html += '</tr>';

                        part_id = value.part_id;
                    });
                    $('#showProductBody').html(html);
                }
                $('#modalPartCode').text(partCode);
                $('#selectedPartId').val(partId);
                $('#showPartSerials').modal('show');
            },
            error: function (error) { 
                alert(error.responseJSON.msg);
            }
        });
    }

    function openAddPartSerialModal(partId) {
        $('#partId').val(partId);
        $('#addPartSerial').modal('show');
    }

    function addSerialNo() {
        let partId = $('#partId').val();
        let serial = $('#serial').val();
        let secret = $('#secret').val();
        if (partId == '' || serial <= 0 || secret == '') {
            alert("Full information, please!");
        } else {
            $.ajax({
                url: url + '/fe-admin/part/add-part-serial',
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    part_id: partId,
                    serial: serial,
                    secret: secret
                },
                success: function (res) {
                    alert(res.msg);
                    location.reload();
                },
                error: function (error) { 
                    alert(error.responseJSON.msg);
                }
            });
        }
    }

    function removeRow(thiss) {
        var r = confirm("Are you sure?");
        if (r == true) {
            thiss.closest('tr').remove();
        } else {}
    }

    function getPartSerialInfo() {
        serials = [];
        secrets = [];
        $('.serial').each(function(){
            serials.push(this.value); 
        });
        $('.secret').each(function(){
            secrets.push(this.value); 
        });
    }
</script>
@endsection
