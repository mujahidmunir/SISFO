<!doctype html>
<html lang="en">
    
<!-- Mirrored from bhulua.thememinister.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2019 09:23:07 GMT -->
@include ('layouts.admin.head')
    <body class="fixed">
        <!-- Page Loader -->
        @include ('layouts.admin.loader')
            <!-- #END# Page Loader -->
            <div class="wrapper">
                @include ('layouts.admin.sidebar')
                    <div class="content-wrapper">
                        <div class="main-content">
                            @include ('layouts.admin.header')

                                @yield ('dashboard')

                                @include ('layouts.admin.body-content')
                            
                        </div>
                        @include('layouts.admin.footer')
                        <div class="overlay"></div>
                    </div>
            </div>
        @include ('layouts.admin.script')
        @include('sweetalert::alert')
    </body>
</html>