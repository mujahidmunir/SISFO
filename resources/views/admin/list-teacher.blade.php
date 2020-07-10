@extends('layouts.admin-master')
@section('title')
Daftar Guru
@endsection
@section('header-name')
Daftar Guru
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
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" style="width: 130px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td class="text-center">
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs">
                    </td>
                    <td class="text-center">
                        <a href="{{URL::to('guru/detail/')}}" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
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
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
                </form>
            </div>
        </div>
        <div class="md-overlay"></div>
    </div>
</div>


@endsection