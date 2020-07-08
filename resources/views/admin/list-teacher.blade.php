@extends('layouts.admin-master')
@section('content')
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Basic DataTables</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th class="text-center">
                      No
                    </th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>Status</th>
                    <th class="text-center" style="width: 140px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>
                        <img alt="image" src="{{URL::to('assets/img/users/user-5.png')}}" width="35">
                        Dadang Konelo
                    </td>
                    <td class="align-middle">Bandung</td>
                    <td>2018-01-20</td>
                    <td>
                      <div class="badge badge-primary badge-shadow">Guru</div>
                    </td>
                     <td class="align-center">
                        <a href="#" data-toggle="tooltip" title="Detail" class="btn btn-icon btn-primary"><i class="far fa-user"></i></a>
                        <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-icon btn-primary btn-xs"><i class="far fa-edit"></i></a>
                        <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-icon btn-primary"><i class="fas fa-trash-alt"></i></a>
                     </td>
                  </tr>

                  <tr>
                    <td class="text-center">1</td>
                    <td>
                        <img alt="image" src="{{URL::to('assets/img/users/user-5.png')}}" width="35">
                        Aceng
                    </td>
                    <td class="align-middle">Garut</td>
                    <td>2016-01-20</td>
                    <td>
                      <div class="badge badge-success badge-shadow">Kepala Tata Usaha</div>
                    </td>
                     <td class="align-center">
                        <a href="#" data-toggle="tooltip" title="Detail" class="btn btn-icon btn-primary"><i class="far fa-user"></i></a>
                        <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-icon btn-primary btn-xs"><i class="far fa-edit"></i></a>
                        <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-icon btn-primary"><i class="fas fa-trash-alt"></i></a>
                     </td>
                    </tr>

                  <tr>
                    <td class="text-center">1</td>
                    <td>
                        <img alt="image" src="{{URL::to('assets/img/users/user-5.png')}}" width="35">
                        Udin
                    </td>
                    <td class="align-middle">Cikajang</td>
                    <td>2016-01-20</td>
                    <td>
                      <div class="badge badge-primary badge-shadow">Guru</div>
                    </td>
                    <td class="align-center">
                        <a href="#" data-toggle="tooltip" title="Detail" class="btn btn-icon btn-primary"><i class="far fa-user"></i></a>
                        <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-icon btn-primary btn-xs"><i class="far fa-edit"></i></a>
                        <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-icon btn-primary"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>





@endsection