@extends('layouts.master')

@section('content')

<!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{url('/')}}"><h2 style="color: #fff;">FinCounts</h2></a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <div class="media-body ml-2 d-none d-lg-block">
                  <a href="./examples/client-registration.h tml" class="mb-0 text-sm  font-weight-bold" style="color:#fff;">Register</a>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">

      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">{{ strtoupper($get_Value)}} ANALYSIS</h3>
                  <div class="row">
                            <div class="col-md-5">
                          <?php 
                      $valueeee1 = "turnover";
                      $valueeee2 = "sales";
                      $valueeee3 = "assets";
                      $valueeee4 = "market_value";
                       ?>
                       <hr>
                  <a href="{{ URL('chartAnalysis', [$valueeee1]) }}" class="btn btn-info" style="border-radius: 2px; padding:7px;">Turn Over </a>

                   <a href="{{ URL('chartAnalysis', [$valueeee2]) }}" class="btn btn-info" style="border-radius: 2px; padding:7px;"> Sales</a>

                    <a href="{{ URL('chartAnalysis', [$valueeee3]) }}" class="btn btn-info" style="border-radius: 2px; padding:7px;"> Assets </a>

                     <a href="{{ URL('chartAnalysis', [$valueeee4]) }}" class="btn btn-info" style="border-radius: 2px; padding:7px;">Market Value </a>
                              </h3>

                        
                            </div>
                            
                           </div>
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
           
<?php
use App\Http\Controllers\CompanyController; 
?>
     <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: ""
  },
  axisY: {
    title: "€"
  },
  data: [{        
    type: "column",  
    showInLegend: true, 
    legendMarkerColor: "grey",
    legendText: "",
    dataPoints: [
    <?php 
      foreach ($allcompany as $company) {
        echo '{ y: '.CompanyController::sumCharanAlysis($company->id,$get_Value).', label: "Company '.$company->id.'" },';
      }
    ?>    
      
    ]
  }]
});
chart.render();

}
</script>


    
     <div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  
  </div>

@stop