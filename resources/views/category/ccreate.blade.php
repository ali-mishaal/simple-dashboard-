@extends('mainstructure')

@section('title' , 'CategoryCreate')

@section('content')
<div class="dashboard-wrapper">
   <div class="container-fluid  dashboard-content">

     <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Add Category</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item">Categories</li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Create Category</h5>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" method="POST" action="{{ route('category.store') }}" novalidate="">
                                        {{ csrf_field() }}
                                        

                                         <div class="form-group row{{ $errors->has('name') ? '           has-error' : '' }}">
                                            <label for="name" class="col-3 col-lg-2 col-form-label text-right">Name</label>

                                            <div class="col-9 col-lg-10">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row{{ $errors->has('description') ? ' has-error' : '' }}">
                                            <label for="description" class="col-3 col-lg-2 col-form-label text-right">Description</label>

                                            <div class="col-9 col-lg-10">
                                                <textarea id="description" class="form-control" name="description" value="{{ old('description') }}" required></textarea>

                                                @if ($errors->has('description'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-sm-12 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Create Category</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
    
                    </form>
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

        </div>

    </div>


</div>
</div>
@endsection

@section('js')

    <script src="{{ asset('js/backend-js/parsley/parsley.js') }}"></script>
    <script>
    $('#form').parsley();
    </script>
     <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

@endsection
