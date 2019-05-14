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
                  <h3 class="mb-0">List of Companies</h3>
                  <div class="row">
                            <div class="col-md-5">
                                <h3 class="text-black mb-0"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalnewRecord"><i class="fa fa-book"></i> Company Rating</button>
                                   <a href="{{ URL('chartAnalysis', [substr(Request::get('date'), 0, 4)]) }}" class="btn btn-info" style="border-radius: 2px; padding:7px;">Chart Analysis</a>
                                   <a href="{{url('boardview', [substr(Request::get('date'), 0, 4)])}}" class="btn btn-info" style="border-radius: 2px; padding:7px;">Board View</a>
                              </h3>

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
                
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
     <form class="form-upload" method="POST" action="{{url('/excelUpload')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
             <div class="form-group">
                <label for="file">excel upload</label>
                <input type="file" id="file" name="ex_file">
               
             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default">cancel</button>
                <button type="submit" class="btn btn-primary" id="upload_f">submit</button>

              </div>
            </form>

               <table class="table table-flush">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            
                                            <th>Turnover</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($allcompany) 
                                        @foreach($allcompany as $company)
                                        <tr>
                                            <td>{{$company->companyInfo->name}}</td>
                                            
                                            <td>&euro;{{number_format($company->turnover)}}</td>
                                           
                                            
                                            @if($company->turnover > 600000)
                                                <td style="color: #FFF; background-color: green; font-size: 12px;"><strong>Most Likely</strong></td>
                                            @elseif($company->turnover < 600000 && $company->turnover > 300000)
                                                <td style="color: #FFF; background-color: blue; font-size: 12px;"><strong>Likely</strong></td>
                                            @elseif($company->turnover < 500000)
                                                <td style="color: #FFF; background-color: red; font-size: 12px;"><strong>Not Likely</strong></td>
                                            @endif
                                            <td>
                                              <a class="btn btn-sm btn-info">Full Details</a>
                                            </td>
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