@extends('layout/base')

@section('title','SetPoint')
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

                    <div class="setPoint-content shadow mb-5">
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
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>                               
                        </form>
                    
                    </div>

                    <h2 class=" title  mb-2">Control</h2>
                    
                    @if(session('alert-control'))
                    <div class="alert alert-danger" role="alert">
                    {{ session('alert-control') }}
                    </div>
                    @endif
                    @if(session('alert-success-control'))
                    <div class="alert alert-success" role="alert">
                    {{ session('alert-success-control') }}
                    </div>
                    @endif
                    <div class="setPoint-content shadow mb-5">
                        <form action="{{route('respon-update')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md">
                                                <label >Pressure</label>
                                            </div>
                                            <div class="col-md mb-2">
                                                <div class="input-group ">
                                                    <input type="hidden"  type="text" class="form-control" name="pressure_control" value="<?php if($respon)echo$respon->btn1?>" id="pressure_value">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                            <span class="btn btn-outline-success " onclick="pressure_on();" id="press_id_on">ON</span>
                                            </div>
                                            <div class="col-sm-6">
                                            <span class="btn btn-outline-danger " onclick="pressure_off();" id="press_id_off">off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md">
                                                <label >Volume</label>
                                            </div>
                                            <div class="col-md mb-2">
                                                <div class="input-group ">
                                                    <input type="hidden"  type="text" class="form-control" name="volume_control" value="<?php if($respon)echo$respon->btn2?>" id="volume_value">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                            <span class="btn btn-outline-success " onclick="volume_on();" id="volume_id_on">ON</span>
                                            </div>
                                            <div class="col-sm-6">
                                            <span class="btn btn-outline-danger " onclick="volume_off();" id="volume_id_off">off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md">
                                                <label >Boiler</label>
                                            </div>
                                            <div class="col-md mb-2">
                                                <div class="input-group ">
                                                    <input type="hidden"  type="text" class="form-control" name="boiler_control" value="<?php if($respon)echo$respon->btn3?>" id="boiler_value">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                            <span class="btn btn-outline-success " onclick="boiler_on();" id="boiler_id_on">ON</span>
                                            </div>
                                            <div class="col-sm-6">
                                            <span class="btn btn-outline-danger " onclick="boiler_off();" id="boiler_id_off">off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md">
                                                <label >cond</label>
                                            </div>
                                            <div class="col-md mb-2">
                                                <div class="input-group ">
                                                    <input type="hidden"  type="text" class="form-control" name="condensor_control" value="<?php if($respon)echo$respon->btn4?>" id="condensor_value">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                            <span class="btn btn-outline-success " onclick="condensor_on();" id="condensor_id_on">ON</span>
                                            </div>
                                            <div class="col-sm-6">
                                            <span class="btn btn-outline-danger " onclick="condensor_off();" id="condensor_id_off">off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    control ini menyebabkan sensor off dan sistem monitoring akan berhenti,
                                    tetap control?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                                </div>
                            </div>
                            </div>


                            <div class="d-flex justify-content-sm-end ">
                                <button  class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#exampleModal">Set</button>
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
        var btn1 = <?php echo $respon['btn1']?>;
        var btn2 = <?php echo $respon['btn2']?>;
        var btn3 = <?php echo $respon['btn3']?>;
        var btn4 = <?php echo $respon['btn4']?>;
        if(btn1)
            pressure_on();
        else
            pressure_off();

        if(btn2)
            volume_on();
        else
            volume_off();

        if(btn3)
            boiler_on();
        else
            boiler_off();

        if(btn4)
            condensor_on();
        else
            condensor_off();
        

        function pressure_on(){
            let count_press =1;
            // console.log(count_press);
            let element_on = document.getElementById("press_id_on");
            let element_off= document.getElementById("press_id_off");
            element_on.classList.remove("btn-outline-success");
            element_on.classList.add("btn-success");

            element_off.classList.remove("btn-danger");
            element_off.classList.add("btn-outline-danger");

            document.getElementById('pressure_value').value=count_press; 
        }
        function pressure_off(){
            let count_press =0;
            // console.log(count_press);
            let element_on = document.getElementById("press_id_on");
            let element_off = document.getElementById("press_id_off");
            element_off.classList.remove("btn-outline-danger");
            element_off.classList.add("btn-danger");

            element_on.classList.remove("btn-success");
            element_on.classList.add("btn-outline-success");

            document.getElementById('pressure_value').value=count_press; 
        }

        function volume_on(){
            let count_volume =1;
            // console.log(count_volume);
            let element_on = document.getElementById("volume_id_on");
            let element_off= document.getElementById("volume_id_off");
            element_on.classList.remove("btn-outline-success");
            element_on.classList.add("btn-success");

            element_off.classList.remove("btn-danger");
            element_off.classList.add("btn-outline-danger");

            document.getElementById('volume_value').value=count_volume; 
        }
        function volume_off(){
            let count_volume =0;
            // console.log(count_volume);
            let element_on = document.getElementById("volume_id_on");
            let element_off = document.getElementById("volume_id_off");
            element_off.classList.remove("btn-outline-danger");
            element_off.classList.add("btn-danger");

            element_on.classList.remove("btn-success");
            element_on.classList.add("btn-outline-success");

            document.getElementById('volume_value').value=count_volume; 
        }

        function boiler_on(){
            let count_boiler =1;
            // console.log(count_boiler);
            let element_on = document.getElementById("boiler_id_on");
            let element_off= document.getElementById("boiler_id_off");
            element_on.classList.remove("btn-outline-success");
            element_on.classList.add("btn-success");

            element_off.classList.remove("btn-danger");
            element_off.classList.add("btn-outline-danger");

            document.getElementById('boiler_value').value=count_boiler; 
        }
        function boiler_off(){
            let count_boiler =0;
            // console.log(count_boiler);
            let element_on = document.getElementById("boiler_id_on");
            let element_off = document.getElementById("boiler_id_off");
            element_off.classList.remove("btn-outline-danger");
            element_off.classList.add("btn-danger");

            element_on.classList.remove("btn-success");
            element_on.classList.add("btn-outline-success");

            document.getElementById('boiler_value').value=count_boiler; 
        }

        function condensor_on(){
            let count_condensor =1;
            // console.log(count_condensor);
            let element_on = document.getElementById("condensor_id_on");
            let element_off= document.getElementById("condensor_id_off");
            element_on.classList.remove("btn-outline-success");
            element_on.classList.add("btn-success");

            element_off.classList.remove("btn-danger");
            element_off.classList.add("btn-outline-danger");

            document.getElementById('condensor_value').value=count_condensor; 
        }
        function condensor_off(){
            let count_condensor =0;
            // console.log(count_condensor);
            let element_on = document.getElementById("condensor_id_on");
            let element_off = document.getElementById("condensor_id_off");
            element_off.classList.remove("btn-outline-danger");
            element_off.classList.add("btn-danger");

            element_on.classList.remove("btn-success");
            element_on.classList.add("btn-outline-success");

            document.getElementById('condensor_value').value=count_condensor; 
        }

         
    </script>
@endsection
