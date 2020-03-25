@extends('layout/base')
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
            <div class="sidebar-header">
            <img src="{{ asset('img/logo.jpeg') }}" alt="" style="width: 240px;"> 
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#dash"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#press"><i class="fas fa-wind"></i> Steam Pressure</a>
                </li>
                <li>
                    <a href="#vol"><i class="fas fa-water"></i> Fluid Volume</a>
                </li>
                <li>
                    <a href="#boiler"><i class="fas fa-temperature-low"></i> Boiler Temp</a>
                </li>
                <li>
                    <a href="#cond"><i class="fas fa-temperature-low"></i> Condensor Temp</a>
                </li>
                <li>
                    <a href="#maps"><i class="fas fa-map-marker-alt"></i>  Location</a>
                </li>
                <!-- <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> -->
               
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
                <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
                    <div class="container-fluid">

                        <div id="sidebarCollapse" >
                            <!-- <i class="fas fa-align-left"></i> -->
                            <!-- Sidebar -->
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <form class="form-inline my-2 my-lg-0" action="" method="GET">
                                    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Cari " aria-label="Search">
                                    <button class="btn btn-outline-success my-2 "  type="submit">Search</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            
            <section class="dashboard" id="dash">
                <div class="container ">
                <h1 class=" title">Data</h1>
                <hr >
                    <div class="row mb-4" >
                    <div class="col-sm-3 mb-2 margin-left">
                        <div class="card border-left-one shadow " >
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
                        <div class="card border-left-second shadow " >
                        <div class="card-body">
                            <div class=" font-weight-bold text-primary text-uppercase mb-1">
                            <i class="fas fa-water"></i> Volume
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= end($debit)?> L</div>
                        </div>
                        </div>
                    </div> 
                    <div class="col-sm-3  mb-2 margin-left">
                        <div class="card border-left-third shadow " >
                            <div class="card-body">
                            <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                <i class="fas fa-temperature-low"></i> Boiler
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= end($suhu_1)?> ℃</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 margin-left">
                        <div class="card border-left-fourth shadow " >
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
                    <h1 class=" title mt-5 mb-2">Pressure Sensor</h1>
                    <hr>
                    <div class="chart">
                     <canvas id="chart_press"></canvas>
                    </div>
                </div>
            </section>
            <section class="fluid" id="vol">
                <div class="container">
                    <h1 class=" title mt-5 mb-2">Fluid Vol</h1>
                    <hr>
                    <div class="chart">
                     <canvas id="chart_fluid"></canvas>
                    </div>
                </div>
            </section>
            <section class="boiler" id="boiler">
                <div class="container">
                    <h1 class=" title mt-5 mb-2">Boiler Temp</h1>
                    <hr>
                    <div class="chart">
                     <canvas id="chart_boiler"></canvas>
                    </div>
                </div>
            </section>
            <section class="condensor" id="cond">
                <div class="container">
                    <h1 class=" title mt-5 mb-2">Condensor Temp</h1>
                    <hr>
                    <div class="chart">
                     <canvas id="chart_condensor"></canvas>
                    </div>
                </div>
            </section>
            <section class="maps" id="maps">
                <div class="container">
                    <h1 class=" title mt-5 mb-2">Location</h1>
                    <hr>
                    <div class="maps-pos">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.6665663519028!2d109.98973182916318!3d-7.164524999676682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDknNTIuMyJTIDEwOcKwNTknMjUuMCJF!5e0!3m2!1sid!2sid!4v1585054315177!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </section>
            <section class="footer" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center" >
                            <p> &copy;Copyright 2020 | <a href="#">Kendal Agro Astiri</a></p>

                        </div>
                        
                    </div>
                </div>
            </section>
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
            console.log("dd")
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
