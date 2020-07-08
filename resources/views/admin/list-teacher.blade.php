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
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett</td>
                    <td>Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton</td>
                    <td>Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Cedric</td>
                    <td>Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Airi</td>
                    <td>Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td>Brielle</td>
                    <td>Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td>Herrod</td>
                    <td>Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td>Rhona</td>
                    <td>Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>$327,900</td>
                </tr>
                <tr>
                    <td>Colleen</td>
                    <td>Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td>Sonya</td>
                    <td>Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td>Jena</td>
                    <td>Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>$90,560</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection