
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/shop.css">      
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Another action</a>
              </div>
            </li>
          </ul>
          
        </div>
      </nav>


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

    
</body>
</html>    
<script src="https://use.fontawesome.com/43ba8b0cf5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>