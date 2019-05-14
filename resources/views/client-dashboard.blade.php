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
        {{--<div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Companies</h5>
                      <span class="h2 font-weight-bold mb-0">{{count($allcompany)}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Revenues</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>--}}
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
                  <?php 
                      $valueeee = "turnover"; ?>
                  <a href="{{ URL('chartAnalysis', [$valueeee]) }}" class="btn btn-info" style="border-radius: 2px; padding:7px;">Chart Analysis <img src="img/GM0z7Rbgpig7gKVB7WCNeg.gif" id="img_averta" class="rounded" style="min-width: 300px; min-height: 170px; max-width: 300px; max-height: 170px;"></a>
                   
                  
                  <div class="row">
                            <div class="col-md-5">
                               
                        <div class="modal fade" id="myModalnewRecord" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                      <div class="modal-content">
                                     
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-home"></i> Check Company Rating</h4>
                                        </div>

                                        <div class="modal-body">
                                           <div id="food_form">
                                            <form method="GET" action="{{ URL('/checkComanyRating') }}" enctype="multipart/form-data">
                                               {{ csrf_field() }}
                                             <div id="TextBoxesGroup">
                                                <div id="TextBoxDiv1">
                                                  <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control" name="category" required>
                                                      <option value="">Select</option>
                                                      <option value="turnover">Turnover Rating</option>
                                                      <option value="average_salary">Average Salary</option>
                                                      <option value="social_media_likes">Social Media Rating</option>
                                                      <option value="social_media_followers">Social Media Followers</option>
                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <label>Year</label>
                                                     <input type="date" name="date" class="form-control" required>
                                                  </div>
                                                  <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-save"> </i>
                                                    Submit
                                                </button>
                                             </div>
                                            </div>
                                          </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                         
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                
                            </div>
                      </div>
                </div>
                            </div>
                            
                           </div>
                </div>
                <div class="col text-right">
                  <h3 class="mb-0">Key</h3>
                  <button class="btn btn-sm btn-success"></button>
                  <button class="btn btn-sm btn-info"></button>
                  <button class="btn btn-sm btn-danger"></button>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>Company</th>
                    <th>Sales</th>
                    <th>Profit</th>
                    <th>Assets</th>
                    <th>Debt</th>
                    <th>Customer Review</th>
                    <th>Turnover</th>
                    <th>Market Value</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody> 
                 @if($allcompany)
                 
                 
                    @foreach($allcompany as $company)
                    <tr>
                        <td>Company-{{$company->id}}</td>
                        <td>€ {{$company->sales}}</td>
                        <td>€ {{$company->profit}}</td>
                        <td>€ {{$company->assets}}</td>
                        <td>€ {{$company->debt}}</td>

                        <td>
                          {{ number_format((float)$company->customer_review, 2, '.', '')}}
                           @if($company->status == "MOST LIKELY")
                               <img src="img/mostlikely.gif" id="img_averta" class="rounded" style="min-width: 70px; min-height: 50px; max-width: 70px; max-height: 50px;">
                            @elseif($company->status == "LIKELY")
                               <img src="img/likely.gif" id="img_averta" class="rounded" style="min-width: 50px; min-height: 50px; max-width: 50px; max-height: 50px;">
                            @elseif($company->status == "NOT LIKELY")
                                <img src="img/notlikely.gif" id="img_averta" class="rounded" style="min-width: 50px; min-height: 50px; max-width: 50px; max-height: 50px;">
                           @endif
                       
                      </td>
                        <td>€ {{number_format((float)$company->turnover, 2, '.', '') }}</td>
                        <td>€ {{$company->market_value}}</td>
                        

                           @if($company->status == "MOST LIKELY")
                              <td style="color: #FFF; background-color: green; font-size: 12px;"><strong>Most Likely</strong></td>
                            @elseif($company->status == "LIKELY")
                              <td style="color: #FFF; background-color: blue; font-size: 12px;"><strong>Likely</strong></td>
                            @elseif($company->status == "NOT LIKELY")
                               <td style="color: #FFF; background-color: red; font-size: 12px;"><strong>Not Likely</strong></td>
                           @endif

                        

                    </tr>
                    @endforeach
                @endif
                </tbody>
              </table>
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