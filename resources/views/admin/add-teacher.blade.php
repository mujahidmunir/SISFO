@extends('layouts.admin-master')
@section('title')
Tambah Guru
@endsection
@section('header-name')
Tambah Guru
@endsection

@section('content')
 <div class="row justify-content-center">
    <div class="col-xl-6 text-center">
        <form method="post" class="f1">
            @csrf
            <div class="f1-steps">
                <div class="f1-progress">
                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="5" style="width: 16.66%;"></div>
                </div>
                <div class="f1-step active">
                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    <p>about</p>
                </div>
                <div class="f1-step">
                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    <p>account</p>
                </div>
                <div class="f1-step">
                    <div class="f1-step-icon"><i class="fab fa-twitter"></i></div>
                    <p>social</p>
                </div>
                <div class="f1-step">
                    <div class="f1-step-icon"><i class="fab fa-twitter"></i></div>
                    <p>social</p>
                </div>
                <div class="f1-step">
                    <div class="f1-step-icon"><i class="fab fa-twitter"></i></div>
                    <p>social</p>
                </div>

            </div>
            <fieldset>
                <h5 class="mb-3 font-weight-600">Tell us who you are:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-first-name">First name</label>
                    <input type="text" name="f1-first-name" placeholder="First name..." class="form-control" id="f1-first-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Last name</label>
                    <input type="text" name="f1-last-name" placeholder="Last name..." class="form-control" id="f1-last-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself">About yourself</label>
                    <textarea name="f1-about-yourself" placeholder="About yourself..."
                              class="form-control" id="f1-about-yourself" rows="5"></textarea>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-success btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <h5 class="mb-3 font-weight-600">Set up your account:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-email">Email</label>
                    <input type="text" name="f1-email" placeholder="Email..." class="form-control" id="f1-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-password">Password</label>
                    <input type="password" name="f1-password" placeholder="Password..." class="form-control" id="f1-password">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                    <input type="password" name="f1-repeat-password" placeholder="Repeat password..."
                           class="form-control" id="f1-repeat-password">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-success btn-next">Next</button>
                </div>
            </fieldset>

            <fieldset>
                <h5 class="mb-3 font-weight-600">Social media profiles:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Facebook</label>
                    <input type="text" name="f1-facebook" placeholder="Facebook..." class="form-control" id="f1-facebook">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Twitter</label>
                    <input type="text" name="f1-twitter" placeholder="Twitter..." class="form-control" id="f1-twitter">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Google plus</label>
                    <input type="text" name="f1-google-plus" placeholder="Google plus..." class="form-control" id="f1-google-plus">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" class="btn btn-success btn-submit">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection