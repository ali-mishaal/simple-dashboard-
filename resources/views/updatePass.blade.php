@extends('mainstructure')

@section('title','updatepass')


@section('content')

 <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">welcome To Update Pass</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>

                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">UpdatePass</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>



     
<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                                <h5 class="card-header">Update Password</h5>
                                <div class="card-body">

                       <form class="needs-validation" action="{{ route('updatepass') }}" method="POST" novalidate>
                                        {{ csrf_field() }}

                                        
                                            <div class="form-group row ">
                                             <label for="name" class="col-3 col-lg-2 col-form-label text-right">Current password</label>

                                            <div class="col-9 col-lg-10">
                                                <input type="password" class="form-control" id="validationCustom01" placeholder="current password" name="cr-password" required>
                                            </div>

                                            </div>

                                            <div class="form-group row ">
                                                <label for="name" class="col-3 col-lg-2 col-form-label text-right">New Password</label>

                                            <div class="col-9 col-lg-10">
                                                <input type="password" class="form-control" id="validationCustom01" placeholder="new password" name="nw-password" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="name" class="col-3 col-lg-2 col-form-label text-right">Confirm Password</label>

                                            <div class="col-9 col-lg-10">
                                                <input type="password" class="form-control" id="validationCustom01" placeholder="confirm password" name="cn-password" required>
                                                
                                                </div>
                                            </div>
                                        

                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">       Change Password
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
    </div>
</div>
</div>
                    
@endsection