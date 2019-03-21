
      @extends('mainstructure')


      @section('title')
       
           
           {{ $category->name }}
                   
       
      @endsection
        
      

        <!-- ---------------------------------------------------------------------------------------------------------- -->
      @section('content')
         
         <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
	             <div class="row">

                   <div class="car-name">
                   	 {{ $category->name }}
                   </div> 

                   <div class="edit">
                      <a href="{{ route('category.edit' , $category->id) }}">edit</a>
                   </div>

                   <form method="post" action="{{ route('category.destroy' , $category->id)}} ">

                                     <input type="hidden" name="_method" value="DELETE" />
                                     <!-- or
                                     {{ method_field('DELETE') }} -->
                                     {{ csrf_field() }}


                                     <button>DELETE</button>
                            
                   </form>
            </div>
        </div>
      </div>

         
          

      @endsection