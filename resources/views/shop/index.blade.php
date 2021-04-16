@extends('layout.updatedMaster')

@section('content')
   
      <div class="container">

        @foreach ($products->Chunk(3) as $productChunk)
        <div class="row" class="store-items" id="store-items">
                        @foreach ($productChunk as $product)
                             <!-- single item -->
                     <div class="col-6 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                        <div class="card shadow">
                           <div class="img-container">
                               <img src="{{$product ->imagepath}}" class="card-img-top store-img" alt="">
                               <span class="store-item-icon"><i class="fa fa-shopping-cart"></i></span>
                           </div>
                        <div class="card-body">
                    <div class="card-text d-flex justify-content-between text-capitalize">
                        <h5 id="store-item-name">{{$product->title}}</h5>
                        <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">{{$product->price}}</strong></h5>
        
                        </div>
                    </div>
                </div>
            </div>
                        @endforeach
           
         </div>
        @endforeach

        
    </div>

    @endsection
 
    @section('script')
        
    @endsection
    
    