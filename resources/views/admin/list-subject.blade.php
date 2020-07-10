@extends('layouts.admin-master')
@section('title')
Daftar Mapel
@endsection
@section('header-name')
Daftar Mapel
@endsection

@section('content')

<div class="card mb-4">

<div class="text-right">
        <button type="button" class="btn btn-primary mb-2 mr-1" data-toggle="modal" data-target=".add_mapel">Tambah Mapel</button>
<div class="actions">
    
</div>
</div>
    <div class="table-responsive">
        <table class="table display table-bordered table-striped table-hover multi-column-ordering">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mapel</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" style="width: 130px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sbj as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->sbj_name }}</td>
                    <td>{{ $data->sbj_description }}</td>
                    <td class="text-center">
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs">
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                        <a href="#" class="btn btn-primary-soft btn-sm md-trigger md-setperspective" data-modal="edit{{ $data->sbj_id }}">
                            <i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>

                
                    <div class="md-modal md-effect-4" id="edit{{ $data->sbj_id }}">
                        <div class="md-content">
                            <h4 class="font-weight-600 mb-0">Modal Dialog</h4>
                            <form method="post" action="{{ URL::to('edit-mapel',$data->sbj_id) }}">
                                @csrf
                            <div class="n-modal-body">
                                <div class="form-group">
                                    <label class="sr-only" for="f1">Nama Mapel</label>
                                    <input type="text" value="{{ $data->sbj_name }}" name="sbj_name" placeholder="Nama Mapel..." class="form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1">Keterangan Mapel</label>
                                    <input type="text" value="{{ $data->sbj_description }}"  name="sbj_description" placeholder="Keterangan Mapel..." class="form-control" id="f1-email">
                                </div>  
                            </div>
                            <div class="modal-footer text-right">
                                <button type="button" class="btn btn-danger md-close" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success btn-lg">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="md-overlay"></div>
                    
                @endforeach()
            </tbody>
        </table>


        
</div>


@endsection

<form action="" method="post">
<div class="modal fade add_mapel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title font-weight-600" id="exampleModalLabel3">Tambah Mapel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="sr-only" for="f1">Nama Mapel</label>
                    <input type="text" name="sbj_name" placeholder="Nama Mapel..." class="form-control" id="f1-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1">Keterangan Mapel</label>
                    <input type="text"  name="sbj_description" placeholder="Keterangan Mapel..." class="form-control" id="f1-email">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
</form>
