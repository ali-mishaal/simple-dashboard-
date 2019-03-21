
      @extends('mainstructure')


      @section('title')
       
           
           {{ $news->title }}
                   
       
      @endsection
        
      

        <!-- ---------------------------------------------------------------------------------------------------------- -->
      @section('content')
         
         <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
	            <div class="row">
                   <div class="car-name">
                   	 {{ $news->title }}
                   </div> 

                   <div class="edit">
                      <a href="{{ route('news.edit' , $news->id) }}">edit</a>
                   </div>

                   <form method="post" action="{{ route('news.destroy' , $news->id)}} ">

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