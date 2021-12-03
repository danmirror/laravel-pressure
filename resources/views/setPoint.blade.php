@extends('layout/base')
@section('content')

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <img src="{{ asset('img/logo.jpeg') }}" alt="" style="width: 240px;"> 
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="/#dash"><i class="far fa-compass" id="phonetipe"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" ><i class="fas fa-temperature-high" id="phonetipe"></i> Sensor</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="/#press">Steam Pressure</a>
                        </li>
                        <li>
                            <a href="/#vol">Fluid Volume</a>
                        </li>
                        <li>
                            <a href="/#boiler"> Boiler Temp</a>
                        </li>
                        <li>
                            <a href="/#cond"> Condensor Temp</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-tasks" id="phonetipe"></i>  SetPoint</a>
                </li>
                <li>
                    <a href="/#maps"><i class="fas fa-map-marker-alt" id="phonetipe"></i>  Location</a>
                </li>
               
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="mailto:name@mydomain.com" class="email">Email</a>
                </li>
                <li>
                    <a href="/" class="article">Refresh Page</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <a id="button"></a>
        <div id="content">
            <!-- button -->
        
            <div class="container-nav">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <div class="d-lg-none" id="sidebarCollapse" >
                            <!-- <i class="fas fa-align-left"></i> -->
                            <!-- Sidebar -->
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="d-inline-block  ml-auto "  >
                            <i class="fas fa-search search-button"></i>
                        </div>

                        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <form class="form-inline my-2 my-lg-0" action="" method="GET"> -->
                                    <!-- <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search Data hh/dd/mm/yyyy " aria-label="Search"> -->
                                    <!-- <button class="btn btn-outline-success my-2 "  type="submit">Search</button> -->
                                <!-- </form>
                            </ul>
                        </div> -->
                    </div>
                </nav>
            </div>
            <section class="setPoint " id="press">
                <div class="container">
                    <h2 class=" title  mb-2">SetPoint</h2>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session('alert'))
                    <div class="alert alert-danger" role="alert">
                    {{ session('alert') }}
                    </div>
                    @endif
                    @if(session('alert-success'))
                    <div class="alert alert-success" role="alert">
                    {{ session('alert-success') }}
                    </div>
                    @endif

                    <div class="setPoint-content shadow">
                        <form action="{{route('setPoint-update')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <div class="col-md ">
                                            <label >Pressure</label>
                                        </div>
                                        <div class="col-md mb-2">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">min</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0" name="min_pres" value="<?php if($parameter)echo$parameter->min_pressure?>">
                                            </div>
                                        </div>
                                        <div class="col-md ">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">max</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0" name="max_pres" value="<?php if($parameter)echo$parameter->max_pressure?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <div class="col-md ">
                                            <label >Volume</label>
                                        </div>
                                        <div class="col-md mb-2">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">min</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0" name="min_volume" value="<?php if($parameter)echo$parameter->min_volume?>">
                                            </div>
                                        </div>
                                        <div class="col-md ">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">max</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0" name="max_volume" value="<?php if($parameter)echo$parameter->max_volume?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <div class="col-md ">
                                            <label >Boiler</label>
                                        </div>
                                        <div class="col-md mb-2">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">min</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0" name="min_boiler" value="<?php if($parameter)echo$parameter->min_boiler?>">
                                            </div>
                                        </div>
                                        <div class="col-md ">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">max</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0" name="max_boiler" value="<?php if($parameter)echo$parameter->max_boiler?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <div class="col-md ">
                                            <label >Condensor</label>
                                        </div>
                                        <div class="col-md mb-2">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">min</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0" name="min_condensor" value="<?php if($parameter)echo$parameter->min_condensor?>">
                                            </div>
                                        </div>
                                        <div class="col-md ">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">max</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0" name="max_condensor" value="<?php if($parameter)echo$parameter->max_condensor?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-sm-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>                               
                        </form>
                    
                    </div>
                </div>
            </section>

            @include('component/footer')
        </div>
        <!-- /#page-content-wrapper -->

    </div>

@endsection
@section('script')


    <script type="text/javascript">
        // scroll up
        var btn = $('#button');
        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
           
            e.preventDefault();
            // $('html, body').animate({
            //     scrollTop:0 
            // }, '300');
            $('html, body').animate({scrollTop:0}, '500');
            // console.log("dd")
        });

        // sidebar
        $(document).ready(function () {
           

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('#sidebarCollapse').toggleClass('open');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

         
    </script>
@endsection
