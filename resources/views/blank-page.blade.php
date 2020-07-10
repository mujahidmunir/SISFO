@include('sweetalert::alert')
@extends('layouts.admin-master')

@section('title')
Home
@endsection
@section('header-name')
Home
@endsection


@section('content')
<h1>Hello World</h1>
<button class="btn btn-danger w-100p btn-sm demo4">Run example</button>
<div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="true" data-animation="pop" data-timer="null" style="display: block; margin-top: -169px;"><div class="sa-icon sa-error" style="display: none;">
    <span class="sa-x-mark">
      <span class="sa-line sa-left"></span>
      <span class="sa-line sa-right"></span>
    </span>
  </div><div class="sa-icon sa-warning pulseWarning" style="display: block;">
    <span class="sa-body pulseWarningIns"></span>
    <span class="sa-dot pulseWarningIns"></span>
  </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success" style="display: none;">
    <span class="sa-line sa-tip"></span>
    <span class="sa-line sa-long"></span>

    <div class="sa-placeholder"></div>
    <div class="sa-fix"></div>
  </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>Are you sure?</h2>
  <p style="display: block;">You will not be able to recover this imaginary file!</p>
  <fieldset>
    <input type="text" tabindex="3" placeholder="">
    <div class="sa-input-error"></div>
  </fieldset><div class="sa-error-container">
    <div class="icon">!</div>
    <p>Not valid!</p>
  </div><div class="sa-button-container">
    <button class="cancel" tabindex="2" style="display: inline-block; box-shadow: none;">No, cancel plx!</button>
    <div class="sa-confirm-button-container">
      <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(221, 107, 85); box-shadow: rgba(221, 107, 85, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">Yes, delete it!</button><div class="la-ball-fall">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div></div>

@endsection
