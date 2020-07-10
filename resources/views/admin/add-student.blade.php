@extends('layouts.admin-master')
@section('title')
Tambah Guru
@endsection
@section('header-name')
Tambah Guru
@endsection

@section('content')
<form method="post" action="{{ URL::to('/asdf') }}" class="f1">
    @csrf
 <div class="row justify-content-center">
    <div class="col-xl-6 text-center">
        
            <div class="f1-steps">
                <div class="f1-progress">
                    <div class="f1-progress-line" data-now-value="16.16" data-number-of-steps="2" style="width: 100%"></div>
                </div>
                <div class="f1-step active" style="width: 49.333333%;">
                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    <p>account</p>
                </div>
                <div class="f1-step" style="width: 49.333333%;">
                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    <p>Profile</p>
                </div>
            </div>
            
            <fieldset>
                <h5 class="mb-3 font-weight-600"></h5>
                <div class="form-group">
                    <label class="sr-only" for="f1">Nama Depan</label>
                    <input type="text" name="first-name" placeholder="Nama Depan..." class="form-control" id="f1-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-email">Nama Belakang</label>
                    <input type="text" name="last_name" placeholder="Nama Belakang  ..." class="form-control" id="f1-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-email">Email</label>
                    <input type="text" name="email" placeholder="Email..." class="form-control" id="f1-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-password">Password</label>
                    <input type="password" name="password" placeholder="Password..." class="form-control" id="f1-password">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Retype password</label>
                    <input type="password" name="comfrim-password" placeholder="Retype password..."
                           class="form-control" id="repeat-password">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-success btn-next">Next</button>
                </div>
                
            </fieldset>

            <fieldset>
                <h5 class="mb-3 font-weight-600">Tell us who you are:</h5>
                
                <div class="form-group">
                    <select  class="form-control" id="provinsi" style="color: black;" placeholder="Select Provinsi">
                        <option disabled selected="false" cheked="false" value="saab">Provinsi</option>
                        <option class="hemant form-control" value="opel" >Jabar</option>
                        <option value="aston-martin">Jateng</option>
                        <option value="hyundai">Jatim</option>
                        <option value="mitsubishi">DKI</option>
                        
                    </select>
                </div>
                
                <div class="form-group">
                    <select  class="form-control" id="kota" style="color: black;" placeholder="Select Kota / Kabupaten">
                        <option disabled selected="false" cheked="false" value="saab">Kota / KAbupaten</option>
                        <option class="hemant form-control" value="opel" >Jakarta</option>
                        <option value="aston-martin">Bandung</option>
                        <option value="hyundai">Garut</option>
                        <option value="mitsubishi">Tasik</option>
                        
                    </select>
                </div>
                
                <div class="form-group">
                    <select  class="form-control" id="kecamatan" style="color: black;" placeholder="Select Kecamatan">
                        <option disabled selected="false" cheked="false" value="saab">Kecamatan</option>
                        <option class="hemant form-control" value="opel" >SukaMiskin</option>
                        <option value="aston-martin">SukaGanteng</option>
                        <option value="hyundai">Suka SO</option>
                        <option value="mitsubishi">Suka Cabe</option>
                        
                    </select>
                </div>
                
                <div class="form-group">
                    <select  class="form-control" id="kelurahan" placeholder="Select Kelurahan / Desa">
                        <option disabled selected="false" cheked="false" value="saab">Kelurahan / Desa</option>
                        <option class="hemant form-control" value="opel" >Margahayu Tengah</option>
                        <option value="aston-martin">Sukamukti</option>
                        <option value="hyundai">ga tau </option>
                        <option value="mitsubishi">Bebas we</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself">Alamat</label>
                    <textarea name="f1-about-yourself" placeholder="Alamat..." class="form-control" id="f1-about-yourself" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-first-name">No Handphone</label>
                    <input type="text" name="f1-first-name" placeholder="No..." class="form-control" id="f1-first-name">
                </div>

                <div class="form-group">
                    <label>Image</label><br>
                    <input type="file" name="image" placeholder="Image">
                </div>

                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" class="btn btn-success btn-submit">Submit</button>
                </div>
            </fieldset>
            
    </div>
</div>
</form>

@endsection