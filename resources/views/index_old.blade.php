@extends('layout/base')
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
@section('pusher')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div >
        <img src="{{ asset('img/logo.jpeg') }}" alt="" style="width: 240px;">   
      </div>
      <div class="list-group list-group-flush">
        <a href="/" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="/avarage.php" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-wind"></i> Steam Pressure
        </a>
        <a href="/avarage.php" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-water"></i> Fluid Volume
        </a>
        <a href="/avarage.php" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-temperature-low"></i> Boiler Temp
        </a>
        <a href="/avarage.php" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-temperature-low"></i> Condensor Temp
        </a>
        <a href="/location.php" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-map-marker-alt"></i>  Location
        </a>
  
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn" id="menu-toggle">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav ml-auto ">
            <form class="form-inline my-2 my-lg-0" action="" method="GET">
              <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Cari berdasarkan jam" aria-label="Search">
              <button class="btn btn-outline-success my-2 "  type="submit">Search</button>
            </form>
           
          </ul>
        </div> 
      </nav>
      
      <section class="dashboard">
        <div class="container">
          <h1 class=" title">Data</h1>
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

      <section class="pressure">
        <div class="container">
          <div class="chart">
              <canvas id="chart"></canvas>
            </div>

        </div>
      </section>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  
 
@endsection

@section('script')
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    // ================chart===========
    var barChartData_hour = 
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
        var options = 
      {
          
        //   responsive: true,
          // maintainAspectRatio: false,
          title: {
                  display: true,
                  text: 'sensor apa ya',
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
          data: barChartData_hour,
          options: options,
        });
  </script>
@endsection
