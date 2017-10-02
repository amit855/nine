          @section('title', '| HOMEPAGE')
          @extends('main')
          @section('content')
          

           <div class="row">
             <div class="col-md-8">
                
                <div class="col-md-4 col-md-offset-2">              
                <a href="tasks/index" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Table</a>
                </div>
                <div class="col-md-4 col-md-offset-2">
                <a href="listt" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">List</a>
                </div>
             </div>

             <div class="col-md-3 col-md-offset-1">
               <h2>Sidebar</h2>
             </div>
           </div>
           @endsection