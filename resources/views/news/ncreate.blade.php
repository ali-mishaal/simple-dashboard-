@extends('mainstructure')

@section('title' , 'NewsCreate')

@section('content')
<div class="dashboard-wrapper">
   <div class="container-fluid  dashboard-content">

     <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Add News</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item">News</li>
                                        <li class="breadcrumb-item active" aria-current="page">Add News</li>
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
                                <h5 class="card-header">Create News</h5>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" method="POST" action="{{ route('news.store') }}" novalidate="">
                                        {{ csrf_field() }}
                                        

                                         <div class="form-group row{{ $errors->has('title') ? '           has-error' : '' }}">
                                            <label for="title" class="col-3 col-lg-2 col-form-label text-right">Title</label>

                                            <div class="col-9 col-lg-10">
                                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                                @if ($errors->has('title'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row{{ $errors->has('content') ? ' has-error' : '' }}">
                                            <label for="content" class="col-3 col-lg-2 col-form-label text-right">Content</label>

                                            <div class="col-9 col-lg-10">
                                                <textarea id="content" class="form-control" name="content" value="{{ old('content') }}" required></textarea>

                                                @if ($errors->has('content'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('content') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('category') ? ' has-error' : '' }}">
                                            <label for="category" class="col-3 col-lg-2 col-form-label text-right">Categories</label>

                                            <div class="col-9 col-lg-10">
                                                 <select name="category">
                                                      @foreach($categories as $category)
                                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                      @endforeach
                                                 </select> 

                                                @if ($errors->has('category'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('category') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('image') ? ' has-error' : '' }}">
                                            <label for="image" class="col-3 col-lg-2 col-form-label text-right">Image</label>

                                            <div class="col-9 col-lg-10">
                                                <input id="image" type="file" class="form-control" name="image"  required>

                                                @if ($errors->has('image'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-sm-12 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Create News</button>
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
