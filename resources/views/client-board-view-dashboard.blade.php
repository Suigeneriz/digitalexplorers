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
                                   <a href="{{ URL('chartAnalysis', [$dateYear]) }}" class="btn btn-info" style="border-radius: 2px; padding:7px;">Chart Analysis</a>
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

             


            </div>
          </div>
        </div>
      </div>


      <div class="row mt-5">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          
              @if($allcompany) 
                @foreach($allcompany as $company)
           <div class="col-lg-12" style="margin-bottom: 5px;">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    

                   
              <div class="info">
                <strong><li class="fa fa-home"></li> {{$company->companyInfo->name}} </strong>
                <p>{{$company->companyInfo->business_form}}</p>

                <table>
          <colgroup>
            <col width="26px">
            <col width="140px">
            <col width="502px">
          </colgroup>
            <tbody>
              <tr>
              <td><li class="fa fa-barcode"></li></td>
              <td>Registration code</td>
              <td>{{$company->companyInfo->registration_code}}</td>
            </tr>
            <tr>
              <td><li class="fa fa-barcode"></li></td>
              <td>VAT</td>
              <td>{{$company->vat}}</td>
            </tr>
            <tr>
              <td><li class="fa fa-user"></li></td>
              <td>Manager</td>
              <td>
                {{$company->manager}}
              </td>
            </tr>
             <tr>
              <td><li class="fa fa-home"></li></td>
              <td>Address</td>
              <td itemprop="address">{{$company->companyInfo->address}}</td>
            </tr>
            <tr>
              <td><li class="fa fa-users"></li></td>
              <td>Employees</td>
              <td>
                {{$company->employees}} people (insured)
              </td>
            </tr>
            <tr>
                <td><li class="fa fa-bank"></li></td>
                <td>Average salary</td>
                <td>
                  € {{number_format($company->average_salary)}} 
                </td>
              </tr>
                <tr>
                <td><li class="fa fa-inbox"></li></td>
                <td>Social insurance taxes</td>
                <td>€ {{number_format($company->social_insurance_taxes)}}</td>
              </tr>
                <tr>
              <td><li class="fa fa-refresh"></li></td>
              <td>Turnover</td>
              <td>
              € {{number_format($company->turnover)}} 
                              </td>
            </tr>
            <tr>
              <td><li class="fa fa-phone"></li></td>
              <td>Phone</td>
              <td>{{$company->companyInfo->mobile}}</td>
            </tr>
            
              <tr>
              <td><div class="img ico-calendar" title="Company age"></div></td>
              <td>Company age</td>
              <td>{{ $company->companyInfo->created_at->diffForHumans() }}</td>
            </tr>
                                <tr>
              <td><li class="fa fa-star"></li></td>
              <td>Rating</td>
              <td> 
                
                @if($company->turnover > 600000)
                  <label style="color: green;"><li class="fa fa-star"></li><li class="fa fa-star"></li><li class="fa fa-star"></li><li class="fa fa-star"></li><li class="fa fa-star"></li><li class="fa fa-star"></li></label>
                @elseif($company->turnover < 600000 && $company->turnover > 300000)
                  <label style="color: yellow;"><li class="fa fa-star"></li><li class="fa fa-star"></li><li class="fa fa-star"></li><li class="fa fa-star"></li><li class="fa fa-star"></li></label>
                @elseif($company->turnover < 500000)
                  <label style="color: red;"><li class="fa fa-star"></li><li class="fa fa-star"></li><li class="fa fa-star"></li> </label>   
               @endif
                                            

              </td>
            </tr>
                  </tbody></table>

      </div>
      

                  </div>
                 
                </div>
              </div>
            </div>

                        @endforeach
                    @endif



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