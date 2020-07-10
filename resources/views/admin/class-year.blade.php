@extends('layouts.admin-master')
@section('title')
Tahun Ajaran
@endsection
@section('header-name')
Tahun Ajaran
@endsection
@section('button-top')
<nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
    <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
        <li class="breadcrumb-item"><button type="button" class="btn btn-purple mb-2 mr-1" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Kelas baru</button></li>
        <li class="breadcrumb-item"><button type="button" class="btn btn-purple mb-2 mr-1" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Tahun</button></li>
    </ol>
</nav>

@endsection

@section('content')

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
        <table class="table display table-bordered table-striped table-hover multi-column-ordering">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Tahun Ajaran</th>
                    <th>Jurusan</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" style="width: 130px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td class="text-center">
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs">
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                        <a href="#" class="btn btn-primary-soft btn-sm md-trigger md-setperspective" data-modal="modal-4">
                            <i class="far fa-edit"></i></a>
                        <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>

            </tbody>
        </table>


        <div class="column">
        <div class="md-modal md-effect-4" id="modal-4">
            <div class="md-content">
                <h4 class="font-weight-600 mb-0">Modal Dialog</h4>
                <form method="post" action="asdf.php">
                <div class="n-modal-body">
                    <p>This is a modal window. You can do the following things with it:</p>
                    <ul>
                        <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                        <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                        <li><strong>Close:</strong> click on the button below to close the modal.</li>
                    </ul>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" class="btn btn-danger md-close" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-lg">Save changes</button>
                </div>
                </form>
            </div>
        </div>
        <div class="md-overlay"></div>
    </div>
</div>


@endsection

<form method="post">
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-600" id="exampleModalLabel3">Tambah Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="sr-only" for="f1">Nama Depan</label>
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

