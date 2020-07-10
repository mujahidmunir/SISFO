
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
 @include('sweetalert::alert')

  <br />
  <div class="container">
   <h3 align="center">Wilayah Indonesia</h3><br />
 <form method="post">
   <div class="form-group">
   <input type="text" name="nama" placeholder="Nama" class="form-control" required="true">
   </div>
   <div class="form-group">
   <input type="text" name="kelas" placeholder="Kelas" class="form-control" required="true">
   </div>


    @csrf
    <div class="form-group">
    <select name="provinsi" id="provinsi" class="form-control input-lg dynamic">
     <option value="" disabled="true" selected=""true> Provinsi</option>

     @foreach($provinsi as $prov)
        <option value="{{$prov->id}}">{{$prov->nama}}</option>
     @endforeach
    </select>
   </div>
   <br />
   <div class="form-group ">
    <select name="kota" id="kota" class="form-control input-lg dynamic">
     <option value=""> Kota / Kabupaten</option>
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="kecamatan" id="kecamatan" class="form-control input-lg dynamic">
     <option value=""> Kecamatan</option>
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="kelurahan" id="kelurahan" class="form-control input-lg dynamic">
     <option value=""> Kelurahan / Desa</option>
    </select>
   </div>
   <div class="form-group">
        <input  type="submit" value="simpan" class="btn btn-primary">
   </div>
   </form>
   <br />


   <br />
   <br />


  </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

   <script type="text/javascript">
            $("#provinsi").select2({

                       allowClear: true
            });
            $("#kota").select2({

                       allowClear: true
            });
            $("#kecamatan").select2({

                       allowClear: true
            });
            $("#kelurahan").select2({

                       allowClear: true
            });




           $('#provinsi').on('change', function(e){
               console.log(e);
               var provinsi_id = e.target.value;
               $.get('{{URL::to('api/json-kota')}}/' + provinsi_id , function(data){
                   console.log(data);
                   $('#kota').empty();
                   $('#kota').append('<option value=""> Kota / Kabupaten</option>');


                   $.each(data.kota, function(val, kotaObj){
                       $('#kota').append('<option value="'+ kotaObj.id +'">'+ kotaObj.nama +'</option>');
                   });
               });
           });


           $('#kota').on('change', function(e){
              console.log(e);
              var kota_id = e.target.value;
              $.get('{{URL::to('api/json-kecamatan')}}/' + kota_id , function(data){
                  console.log(data);
                  $('#kecamatan').empty();
                  $('#kecamatan').append('<option value=""> Kecamatan</option>');


                  $.each(data.kecamatan, function(val, kecamatanObj){
                      $('#kecamatan').append('<option value="'+ kecamatanObj.id +'">'+ kecamatanObj.nama +'</option>');
                  });
              });
          });


           $('#kecamatan').on('change', function(e){
              console.log(e);
              var kecamatan_id = e.target.value;
              $.get('{{URL::to('api/json-kelurahan')}}/' + kecamatan_id , function(data){
                  console.log(data);
                  $('#kelurahan').empty();
                  $('#kelurahan').append('<option value=""> Kelurahan</option>');


                  $.each(data.kelurahan, function(val, kelurahanObj){
                      $('#kelurahan').append('<option value="'+ kelurahanObj.id +'">'+ kelurahanObj.nama +'</option>');
                  });
              });
          });






      </script>











 </body>
</html>

