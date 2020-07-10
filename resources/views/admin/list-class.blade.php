@extends('layouts.admin-master')
@section('title')
Daftar Kelas
@endsection
@section('header-name')
Daftar Kelas
@endsection


@section('content')
<div class="text-right">
<button type="button" class="btn btn-primary mb-2 mr-1" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Kelas</button>
</div>
<div class="card mb-4">

<div class="text-right">
<div class="actions">
    <a href="#" class="action-item"><i class="ti-reload"></i></a>
    <div class="dropdown action-item" data-toggle="dropdown">
        <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item">Refresh</a>
            <a href="#" class="dropdown-item">Manage Widgets</a>
            <a href="#" class="dropdown-item">Settings</a>
        </div>
    </div>
</div>
</div>
    <div class="table-responsive">
        <table class="table display table-bordered-2 table-striped table-hover multi-column-ordering">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" style="width: 130px;">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cls as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->cls_name}}</td>

                    <td class="text-center">
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs">
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                        <a href="#" class="btn btn-primary-soft btn-sm md-trigger md-setperspective" data-modal="edit{{$data->cls_id}}">
                            <i class="far fa-edit"></i></a>
                        <a href="{{ URL::to('delete') }}" class="btn btn-danger-soft btn-sm btn-delete"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>


                <div class="md-modal md-effect-4" id="edit{{$data->cls_id}}">
                    <div class="md-content">
                        <h4 class="font-weight-600 mb-0">Modal Dialog</h4>
                        <form method="post" action="{{URL::to('edit-kelas',$data->cls_id)}}">
                        @csrf
                        <div class="n-modal-body">
                            <input type="text" value="{{$data->cls_name}}" name="cls_name" class="form-control" id="f1-email">
                        </div>
                        <div class="modal-footer text-right">
                            <button type="button" class="btn btn-danger md-close" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success btn-lg">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="md-overlay"></div>

                 @endforeach

            </tbody>
        </table>




</div>


@endsection

<form method="post">
@csrf
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-600" id="exampleModalLabel3">Tambah Kelas</h5>

            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="sr-only" for="f1">Nama Kelas</label>
                    <input type="text" name="cls_name" placeholder="Nama Kelas..." class="form-control" id="f1-email">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>