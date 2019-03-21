@extends('mainstructure')

@section('title','categories')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/backend-css/datatables/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend-css/datatables/buttons.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend-css/datatables/select.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend-css/datatables/fixedHeader.bootstrap4.css') }}">

  <style type="text/css">
      

  </style>
@endsection

@section('content')

    <div class="message">
        
        @if(Session::has('msg'))
            <span>{{ session('msg') }}</span>
        @endif
        
        @if(Session::has('msg'))
            <span>{{ session('msg') }}</span>
        @endif


    </div>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
   
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Categories</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item">Categories</li>
                                        <li class="breadcrumb-item active" aria-current="page">View Categories</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">All Categories Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                           @foreach($categories as $category)
                          
                                              <tr>
                                                  <td>{{ $category->name }}</td>
                                                  <td>{{ $category->description }}</td>
                                                  <td>{{ $category->created_at }}</td>
                                                  <td>
                                                      <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success active">Edit</a>

                                                      <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary active">Show</a>

                                                      <form method="post" action="{{ route('category.destroy' , $category->id)}} " style="display: inline-block;" id="delCat">

                                                          <input type="hidden" name="_method" value="DELETE" />
                                                                         
                                                          {{ csrf_field() }}


                                                          <button class="btn btn-danger active">DELETE</button>
                                                                
                                                      </form>  
                                                  </td>
                                              </tr>
                                           
                                                  
                                           @endforeach  
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer" style="position: fixed; bottom: 0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
  
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    

@endsection



@section('js')

    <script src="{{ asset('js/backend-js/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/backend-js/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/backend-js/datatables/data-table.js') }}"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){


            $('#delCat').click(function(){
                 if(confirm('are you sure ?'))
                 {
                    return true;
                 }

                 return false;
                 
            });
        });
    </script>


@endsection
     

           
     
      