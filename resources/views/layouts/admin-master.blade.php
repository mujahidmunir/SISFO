<!DOCTYPE html>
<html lang="en">
@include ('layouts.admin.head')
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include ('layouts.admin.nav')
        @include ('layouts.admin.sidebar')
          <!-- Main Content -->
          <div class="main-content">
            <section class="section">
              <div class="section-body">
                @yield('content')
              </div>
            </section>
          </div>
          <!-- Main Content -->

          <!-- Setting Sidebar -->
            @include('layouts.admin.setting-sidebar')
          <!-- End Setting Sidebar -->


      <!-- Footer -->
        @include('layouts.admin.footer')

      <!-- End Footer -->


    </div>
  </div>
  @include('layouts.admin.script')

<!-- Mirrored from radixtouch.in/templates/admin/aegis/source/dark/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 11:09:25 GMT -->
</html>