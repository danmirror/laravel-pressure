@extends('layout/base')

@section('title','SquadTech | Home')
@section('content')
<?php
    $time = [1,2,3,4,5];
    $sensor = [1,2,3,4,5];

    $suhu_1 =[];
    $suhu_2 = [];
    $tekanan =[];
    $debit = [];
    $time = [];

    foreach($data as $datas){
        $time_data = strtotime($datas["created_at"]);
        $time[] = date("H:i d-M-Y", $time_data+7*60*60);

        $tekanan[] =(float)$datas['data1'];
        $debit[] = (float)$datas['data2'];
        $suhu_1[] = (float)$datas['data3'];
        $suhu_2[] = (float)$datas['data4'];
    }
    // dd($time);
    ?>

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
                            <a href="#press">Steam Pressure</a>
                        </li>
                        <li>
                            <a href="#vol">Fluid Volume</a>
                        </li>
                        <li>
                            <a href="#boiler"> Boiler Temp</a>
                        </li>
                        <li>
                            <a href="#cond"> Condensor Temp</a>
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

                        <div class="d-inline-block d-lg-none ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse2" >
                            <i class="fas fa-search search-button"></i>
                          
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <form class="form-inline my-2 my-lg-0" action="" method="GET">
                                    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search Data hour format hh " aria-label="Search">
                                    <button class="btn btn-outline-success my-2 "  type="submit">Search</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            
            <section class="dashboard" id="dash">
                <div class="container ">
                <h2 class=" title">Data</h2>
                <hr >
                    <div class="row mb-4" >
                    <div class="col-sm-3 mb-2 margin-left">
                        <div class="card border-left-normal shadow " id="auto-protect-1" >
                        <div class="card-body">
                            <div class=" align-items-center">
                                <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                    <i class="fas fa-wind"></i> Pressure
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= end($tekanan)?> kPa</div>
                            </div>
                        </div>
                        </div>
                    </div>    
                    <div class="col-sm-3 mb-2 margin-left">
                        <div class="card border-left-normal shadow " id="auto-protect-2" >
                        <div class="card-body">
                            <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                <i class="fas fa-water"></i> Volume
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= end($debit)?> L</div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-sm-3  mb-2 margin-left">
                        <div class="card border-left-normal shadow " id="auto-protect-3" >
                            <div class="card-body">
                                <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                    <i class="fas fa-temperature-low"></i> Boiler
                                </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= end($suhu_1)?> ℃</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 margin-left">
                        <div class="card border-left-normal shadow " id="auto-protect-4" >
                            <div class="card-body">
                                <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                    <i class="fas fa-temperature-low"></i>Condensor
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= end($suhu_2)?> ℃</div>
                            </div>
                        </div>
                    </div>
                    </div>  

                    <div class="chart">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </section>

            <section class="pressure " id="press">
                <div class="container">
                    <h2 class=" title mt-5 mb-2">Pressure</h2>
                    <hr>
                    <div class="chart">
                        <canvas id="chart_press"></canvas>
                    </div>
                    <p class="text-center"> Menggunakan Satuan (kPa).</p>
                </div>
            </section>
            <section class="fluid" id="vol">
                <div class="container">
                    <h2 class=" title mt-5 mb-2">Fluid Vol</h2>
                    <hr>
                    <div class="chart">
                        <canvas id="chart_fluid"></canvas>
                    </div>
                    <p class="text-center"> Menggunakan Satuan (L).</p>
                </div>
            </section>
            <section class="boiler" id="boiler">
                <div class="container">
                    <h2 class=" title mt-5 mb-2">Boiler Temp</h2>
                    <hr>
                    <div class="chart">
                        <canvas id="chart_boiler"></canvas>
                    </div>
                    <p class="text-center"> Menggunakan Satuan (℃).</p>
                </div>
            </section>
            <section class="condensor" id="cond">
                <div class="container">
                    <h2 class=" title mt-5 mb-2">Cond Temp</h2>
                    <hr>
                    <div class="chart">
                        <canvas id="chart_condensor"></canvas>
                    </div>
                    <p class="text-center"> Menggunakan Satuan (℃).</p>
                </div>
            </section>
            <section class="maps" id="maps">
                <div class="container-maps">
                    <h2 class=" title mt-5 mb-2">Location</h2>
                    <hr class="mb-3">
                    <div class="maps-pos">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.6665663519028!2d109.98973182916318!3d-7.164524999676682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDknNTIuMyJTIDEwOcKwNTknMjUuMCJF!5e0!3m2!1sid!2sid!4v1585054315177!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

        var pressure = <?php echo end($tekanan)? end($tekanan) : '0'?>; 
        var volume = <?php echo end($debit)? end($debit) : '0'; ?>;
        var boiler = <?php echo end($suhu_1)? end($tekasuhu_1nan) : '0'; ?>;
        var condensor = <?php echo end($suhu_2)? end($suhu_2) : '0'; ?>;

        var min_pressure = <?php echo $parameter ?"$parameter->min_pressure":"0" ?>;
        var max_pressure = <?php echo $parameter?$parameter->max_pressure:"0"  ?>;
        var min_volume = <?php echo $parameter?$parameter->min_volume:"0"  ?>;
        var max_volume = <?php echo $parameter?$parameter->max_volume:"0"  ?>;
        var min_boiler = <?php echo $parameter?$parameter->min_boiler:"0"  ?>;
        var max_boiler = <?php echo $parameter?$parameter->max_boiler:"0"  ?>;
        var min_condensor = <?php echo $parameter?$parameter->min_condensor:"0"  ?>;
        var max_condensor = <?php echo $parameter?$parameter->max_condensor:"0"  ?>;


        let auto_1 = document.getElementById("auto-protect-1");
        let auto_2 = document.getElementById("auto-protect-2");
        let auto_3 = document.getElementById("auto-protect-3");
        let auto_4 = document.getElementById("auto-protect-4");

        if(pressure < min_pressure){
            auto_1.classList.remove("border-left-normal");
            auto_1.classList.add("border-left-warning");
            auto_1.classList.remove("border-left-danger");
        }
        if(pressure > max_pressure){
            auto_1.classList.remove("border-left-normal");
            auto_1.classList.remove("border-left-warning");
            auto_1.classList.add("border-left-danger");
        }

        if(volume < min_volume){
            auto_2.classList.remove("border-left-normal");
            auto_2.classList.add("border-left-warning");
            auto_2.classList.remove("border-left-danger");
        }
        if(volume > max_volume){
            auto_2.classList.remove("border-left-normal");
            auto_2.classList.remove("border-left-warning");
            auto_2.classList.add("border-left-danger");
        }

        if(boiler < min_boiler){
            auto_3.classList.remove("border-left-normal");
            auto_3.classList.add("border-left-warning");
            auto_3.classList.remove("border-left-danger");
        }
        if(boiler > max_boiler){
            auto_3.classList.remove("border-left-normal");
            auto_3.classList.remove("border-left-warning");
            auto_3.classList.add("border-left-danger");
        }

        if(condensor < min_condensor){
            auto_4.classList.remove("border-left-normal");
            auto_4.classList.add("border-left-warning");
            auto_4.classList.remove("border-left-danger");
        }
        if(condensor > max_condensor){
            auto_4.classList.remove("border-left-normal");
            auto_4.classList.remove("border-left-warning");
            auto_4.classList.add("border-left-danger");
        }
        

        // sidebar
        $(document).ready(function () {
           

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('#sidebarCollapse').toggleClass('open');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

           // ================chart===========

        var barChartData = 
        {
            labels:<?php echo json_encode($time) ?> ,
            datasets: [{
                type: 'line',
                label: 'Pressure',
                id: "y-axis-0",
                borderColor: "#7b93dd",
                data: <?= json_encode($tekanan) ?>
            },
            {
                type: 'line',
                label: 'Volume',
                id: "y-axis-0",
                borderColor: "#75d369",
                data:<?= json_encode($debit) ?>
            },
            {
                type: 'line',
                label: 'Boiler',
                id: "y-axis-0",
                borderColor: "#ec88cb ",
                data: <?= json_encode($suhu_1) ?>
            },
            {
                type: 'line',
                label: 'Condesor ',
                id: "y-axis-0",
                borderColor: "#cbe06a",
                data: <?= json_encode($suhu_2) ?>
            },
            ]
        };


        var bar_press = 
        {
            labels:<?php echo json_encode($time) ?> ,
            datasets: [{
                type: 'line',
                label: 'Pressure',
                id: "y-axis-0",
                borderColor: "#7b93dd",
                data: <?= json_encode($tekanan) ?>
            }]
        };
        var bar_boiler = 
        {
            labels:<?php echo json_encode($time) ?> ,
            datasets: [{
                type: 'line',
                label: 'Boiler',
                id: "y-axis-0",
                borderColor: "#ec88cb",
                data: <?= json_encode($suhu_1) ?>
            }]
        };
        var bar_condensor = 
        {
            labels:<?php echo json_encode($time) ?> ,
            datasets: [{
                type: 'line',
                label: 'Condensor',
                id: "y-axis-0",
                borderColor: "#cbe06a",
                data: <?= json_encode($suhu_2) ?>
            }]
        };
        var bar_fluid = 
        {
            labels:<?php echo json_encode($time) ?> ,
            datasets: [{
                type: 'line',
                label: 'Fluid',
                id: "y-axis-0",
                borderColor: "#75d369",
                data: <?= json_encode($debit) ?>
            }]
        };
        var options = 
        {
            
            //   responsive: true,
            // maintainAspectRatio: false,
            title: {
                    display: true,
                    text: 'sensor ',
                    position: 'left'
                },
                // tooltips: {
                //   mode: 'label'
                // },
                
                scales: {
                    yAxes: [{
                        // stacked: true,
                        position: "left",
                        id: "y-axis-0",
                    }],
                    xAxes: [{
                    }],
                }
        };
        Chart.Line('chart', {
            data: barChartData,
            options: options,
        });
        Chart.Line('chart_press', {
            data: bar_press,
            options: options,
        });
        Chart.Line('chart_fluid', {
            data: bar_fluid,
            options: options,
        });
        Chart.Line('chart_boiler', {
            data: bar_boiler,
            options: options,
        });
        Chart.Line('chart_condensor', {
            data: bar_condensor,
            options: options,
        });

    </script>
@endsection
