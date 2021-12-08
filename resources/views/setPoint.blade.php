@extends('layout/base')

@section('title','SquadTech | SetPoint')
@section('content')

    <div class="wrapper">
         <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header py-4 px-2">
                <img src="{{ asset('img/logo.png') }}" alt="" style="width: 230px;"> 
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="/#dash">
                    <svg style="width:22px;height:22px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M7,17L10.2,10.2L17,7L13.8,13.8L7,17M12,11.1A0.9,0.9 0 0,0 11.1,12A0.9,0.9 0 0,0 12,12.9A0.9,0.9 0 0,0 12.9,12A0.9,0.9 0 0,0 12,11.1M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" />
                    </svg>
                    Dashboard</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" >
                    <svg style="width:22px;height:22px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M15 13H16.5V15.82L18.94 17.23L18.19 18.53L15 16.69V13M18.13 9.33C17.23 6.81 14.83 5 12 5C9.3 5 7 6.65 6 9C3.24 9 1 11.24 1 14S3.24 19 6 19H9.68C10.81 21.36 13.21 23 16 23C19.87 23 23 19.87 23 16C23 12.88 20.96 10.24 18.13 9.33M6 17C4.34 17 3 15.66 3 14S4.34 11 6 11C6.37 11 6.73 11.07 7.06 11.19C7.45 8.82 9.5 7 12 7C13.63 7 15.07 7.79 16 9C12.12 9 9 12.14 9 16C9 16.34 9.03 16.67 9.08 17H6M16 21C13.24 21 11 18.76 11 16S13.24 11 16 11 21 13.24 21 16 18.76 21 16 21Z" />
                    </svg>
                        Sensor</a>
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
                    <a href="{{route('setPoint')}}">
                    <svg style="width:22px;height:22px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M7 3H5V9H7V3M19 3H17V13H19V3M3 13H5V21H7V13H9V11H3V13M15 7H13V3H11V7H9V9H15V7M11 21H13V11H11V21M15 15V17H17V21H19V17H21V15H15Z" />
                    </svg>
                    SetPoint</a>
                </li>
                <li>
                    <a href="#maps">
                        <svg style="width:22px;height:22px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 4C14.2 4 16 5.8 16 8C16 10.1 13.9 13.5 12 15.9C10.1 13.4 8 10.1 8 8C8 5.8 9.8 4 12 4M12 2C8.7 2 6 4.7 6 8C6 12.5 12 19 12 19S18 12.4 18 8C18 4.7 15.3 2 12 2M12 6C10.9 6 10 6.9 10 8S10.9 10 12 10 14 9.1 14 8 13.1 6 12 6M20 19C20 21.2 16.4 23 12 23S4 21.2 4 19C4 17.7 5.2 16.6 7.1 15.8L7.7 16.7C6.7 17.2 6 17.8 6 18.5C6 19.9 8.7 21 12 21S18 19.9 18 18.5C18 17.8 17.3 17.2 16.2 16.7L16.8 15.8C18.8 16.6 20 17.7 20 19Z" />
                        </svg>  
                        Location</a>
                </li>
               
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://wa.me/6281271035056" class="email">whatsapp</a>
                </li>
                <li>
                    <a href="{{route('setPoint')}}" class="article">Refresh Page</a>
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
                                            <div class="col-sm-6 ">
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
                                            <div class="col-sm-6 ">
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
                                            <div class="col-sm-6 ">
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
                                            <div class="col-sm-6 ">
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
        var btn1 = <?php echo $respon?$respon['btn1']:"0"?>;
        var btn2 = <?php echo $respon?$respon['btn2']:"0"?>;
        var btn3 = <?php echo $respon?$respon['btn3']:"0"?>;
        var btn4 = <?php echo $respon?$respon['btn4']:"0"?>;
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
