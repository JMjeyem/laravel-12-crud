@extends( "layouts.layout")
@section( "content")

      <div class="container">
         <div class="card">
            <div class="card-header">
               Add New Product
            </div>
            <div class="card-body">
               <form action="" method="post">
                 @include( 'product.form')
               </form>
            </div>

         </div>
        
      </div>
     
@endsection