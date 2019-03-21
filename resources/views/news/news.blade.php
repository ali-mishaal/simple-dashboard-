@extends('mainstructure')

@section('title','news')

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
                            <h2 class="pageheader-title">News</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item">News</li>
                                        <li class="breadcrumb-item active" aria-current="page">View News</li>
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
                            <h5 class="card-header">All News Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Parent Category</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                           @foreach($news as $new)
                          
                                              <tr>
                                                  <td>{{ $new->title }}</td>
                                                  <td>{{ $new->content }}</td>
                                                  <td>{{ $new->category->name }}</td>
                                                  <td>{{ $new->created_at }}</td>
                                                  <td>
                                                      <a href="{{ route('news.edit', $new->id) }}" class="btn btn-success active">Edit</a>

                                                      <a href="{{ route('news.show', $new->id) }}" class="btn btn-primary active">Show</a>

                                                      <form method="post" action="{{ route('news.destroy' , $new->id)}} " style="display: inline-block;" id="delNews">

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
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Parent Category</th>
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


            $('#delNews').click(function(){
                 if(confirm('are you sure ?'))
                 {
                    return true;
                 }

                 return false;
                 
            });
        });
    </script>


@endsection
     

           
     
      