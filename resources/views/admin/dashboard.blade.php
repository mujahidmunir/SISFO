@extends('layouts.admin-master')
@section('title')
Dashboard
@endsection
@section('header-name')
Dashboard
@endsection


@section('dashboard')
<div class="body-content">
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats statistic-box mb-4">
        <div class="card-header card-header-success card-header-icon position-relative border-0 text-right px-3 py-0">
            <div class="card-icon d-flex align-items-center justify-content-center">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <p class="card-category text-uppercase fs-14 font-weight-bold text-muted">Guru</p>
            <h3 class="card-title fs-18 font-weight-bold"> 20
                <small></small>
            </h3>
        </div>
        <div class="card-footer p-3">
            <div class="stats">
                <i class="typcn typcn-warning text-warning mr-2"></i>
                <a href="#" class="warning-link">Get More Space...</a>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats statistic-box mb-4">
        <div class="card-header card-header-info card-header-icon position-relative border-0 text-right px-3 py-0">
            <div class="card-icon d-flex align-items-center justify-content-center">
                <i class="fa fa-child"></i>
            </div>
            <p class="card-category text-uppercase fs-14 font-weight-bold text-muted">Siswa</p>
            <h3 class="card-title fs-18 font-weight-bold"> 20
                <small></small>
            </h3>
        </div>
        <div class="card-footer p-3">
            <div class="stats">
                <i class="typcn typcn-warning text-warning mr-2"></i>
                <a href="#" class="warning-link">Get More Space...</a>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats statistic-box mb-4">
        <div class="card-header card-header-warning card-header-icon position-relative border-0 text-right px-3 py-0">
            <div class="card-icon d-flex align-items-center justify-content-center">
                <i class="fas fa-user-alt"></i>
            </div>
            <p class="card-category text-uppercase fs-14 font-weight-bold text-muted">Staff</p>
            <h3 class="card-title fs-18 font-weight-bold"> 20
                <small></small>
            </h3>
        </div>
        <div class="card-footer p-3">
            <div class="stats">
                <i class="typcn typcn-warning text-warning mr-2"></i>
                <a href="#" class="warning-link">Get More Space...</a>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats statistic-box mb-4">
        <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
            <div class="card-icon d-flex align-items-center justify-content-center">
                <i class="fas fa-user-graduate"></i>
            </div>
            <p class="card-category text-uppercase fs-14 font-weight-bold text-muted">ALumni</p>
            <h3 class="card-title fs-18 font-weight-bold"> 20
                <small></small>
            </h3>
        </div>
        <div class="card-footer p-3">
            <div class="stats">
                <i class="typcn typcn-warning text-warning mr-2"></i>
                <a href="#" class="warning-link">Get More Space...</a>
            </div>
        </div>
    </div>
</div>




</div>
</div>

@endsection