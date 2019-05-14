@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Comany Record's
                            <div class="row">
                            <div class="col-md-5">
                                <h3 class="text-black mb-0"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalnewRecord"><i class="fa fa-book"></i> Company Rating</button>
                              </h3>
                        <div class="modal fade" id="myModalnewRecord" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                      <div class="modal-content">
                                     
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-car"></i> Check Company Rating</h4>
                                        </div>

                                        <div class="modal-body">
                                           <div id="food_form">
                                            <form method="GET" action="checkComanyRating">
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
                                                     <input type="date" name="yeardate" class="form-control" required>
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
                            <div class="col-md-5">
                              <form method="get" method="GET" action="{{ URL('/searchCompanyInfo') }}">
                                  {{ csrf_field() }}
                                <input type="text" style="line-height: 1.5;height: calc(2.5rem + 2px);padding: .625rem .75rem; transition: all .2s cubic-bezier(.68, -.55, .265, 1.55); color: #8898aa;border: 1px solid #cad1d7; border-radius: 2px; background-color: #fff; background-clip: padding-box;" name="RegistrationCode" placeholder="Registration Code" required>
                                <button type="submit" style="border-radius: 2px;" class="btn btn-primary">Search</button>
                            </form> 
                            </div>
                           </div>
                        </div>
                        <!-- /.panel-heading -->



                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Business Form</th>
                                            <th>Company Code</th>
                                            <th>Registration Code</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Active Status</th>
                                            <th>Reg/Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @if($allcompany) 
                                        @foreach($allcompany as $company)
                                        <tr>
                                            <td>{{$company->id}}</td>
                                            <td>{{$company->name}}</td>
                                            <td>{{$company->type}}</td>
                                            <td>{{ implode(' ', array_slice(explode(' ', $company->business_form), 0, 5))}}</td>
                                            <td>{{$company->company_code}}</td>
                                            <td>{{$company->registration_code}}</td>
                                            <td>{{$company->email}}</td>
                                            <td>{{$company->address}}</td>
                                            <td>{{$company->mobile}}</td>
                                            <td>{{$company->avtivation_status}}</td>
                                            <td>{{$company->registration_date}}</td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <div class="card-footer py-4">
                                  <nav aria-label="...">
                                    {{ $allcompany->links( "pagination::bootstrap-4") }}
                                  </nav>
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
