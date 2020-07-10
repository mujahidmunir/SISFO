 <nav class="sidebar sidebar-bunker">
                <div class="sidebar-header">
                    <!--<a href="index.html" class="logo"><span>bd</span>task</a>-->
                    <a href="index-2.html" class="logo"><img src="{{URL::to('assets/dist/img/logo.png')}}" alt=""></a>
                </div><!--/.sidebar header-->
                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div class="avatar online">
                        <img src="{{URL::to('assets/dist/img/avatar-1.jpg')}}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-text">
                        <h6 class="m-0">Naeem Khan</h6>
                        <span><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="a8cdd0c9c5d8c4cde8cfc5c9c1c486cbc7c5">[email&#160;protected]</a></span>
                    </div>
                </div><!--/.profile element-->

                <div class="sidebar-body">
                    <nav class="sidebar-nav">
                        <ul class="metismenu">
                            <li class="nav-label">Main Menu</li>
                            <li class="mm-active"><a href="{{URL::to('dashboard')}}"><i class="typcn typcn-home-outline mr-2"></i> Dashboard</a></li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-chart-pie-outline mr-2"></i>
                                    Guru
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="{{URL::to('/tambah-guru')}}">Tambah Guru</a></li>
                                    <li><a href="{{URL::to('/daftar-guru')}}">Daftar Guru</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-chart-pie-outline mr-2"></i>
                                    Siswa
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="{{URL::to('/tambah-siswa')}}">Tambah Siswa</a></li>
                                    <li><a href="{{URL::to('/daftar-siswa')}}">Daftar Siswa</a></li>

                                </ul>
                            </li>

                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-chart-pie-outline mr-2"></i>
                                    Pengaturan
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="{{ URL::to('daftar-kelas') }}"><i class="typcn typcn-messages mr-2"></i> Kelas</a></li>
                                    <li><a href="{{ URL::to('daftar-mapel') }}"><i class="typcn typcn-messages mr-2"></i> Mapel</a></li>
                                    <li><a href="{{ URL::to('daftar-tahun-ajaran') }}"><i class="typcn typcn-messages mr-2"></i> Tahun Ajaran</a></li>
                                </ul>
                            </li>
                            
                            
                            

                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-chart-pie-outline mr-2"></i>
                                    Kelas
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="{{URL::to('/tambah-siswa')}}">Tambah Kelas</a></li>
                                    <li><a href="{{URL::to('/daftar-siswa')}}">Daftar Siswa</a></li>


                                </ul>
                            </li>



                            

                        </ul>
                    </nav>
                </div><!-- sidebar-body -->
            </nav>