@extends('layout.master')

@section('content')

<!-- <section style="background: linear-gradient(to bottom, #cc00ff 7%, #66ffff 100%)"> </section> -->
 <section class="">
   <div class="smallnav-size">
      <div class="smallnav1">
      <img src="img/image56.png" >
    </div>
   </div>
    <div class="smallnav-size">
      <div class="smallnav2">
      <img src="img/image60.png" >
    </div>
   </div>
   
   
  </section>


  <section>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="{{ asset('/img/SLogoCarosal.png')}}" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <!-- <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/corousal2.jpeg')}}" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/img/image3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

  </section> 

 
    {{-- <div class="container-fluid">
          <div class="row ankit justify-content-center align-items-center">
            <div class="col-6  mx-auto banner text-right">
              <h1 class="text-capitalize">welcome to <strong class="banner-title ">grandma's</strong></h1>
            </div>
          </div>
    </div> --}}
<!-- <section class="container-fluid">
<div class="row">
      <div class="col-6 col-md-2 col-lg-2 bg-danger ">
        <img src="" class="img-fluid">
        <p class="text-center">Cake</p>

      </div>
       <div class="col-6 col-md-2 col-lg-2 bg-danger ">
        <img src="" class="img-fluid">
        <p class="text-center">Cake</p>

      </div>
       <div class="col-6 col-md-2 col-lg-2 bg-danger ">
        <img src="" class="img-fluid">
        <p class="text-center">Cake</p>

      </div>
       <div class="col-6 col-md-2 col-lg-2 bg-danger ">
        <img src="" class="img-fluid">
        <p class="text-center">Cake</p>

      </div>
       <div class="col-6 col-md-2 col-lg-2 bg-danger ">
        <img src="" class="img-fluid">
        <p class="text-center">Cake</p>
    </div>
    </div>

</section> -->
    
    
     <section class="about" id="about">
    <div class="container">

      <div class="row">
        <div class="col-6  mx-auto col-md-6 my-5">
          <h1 class="text-capitalize">about <strong class="banner-title ">us</strong></h1>
          <p class="my-4 w-75 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquam voluptas
            beatae vitae expedita consectetur nesciunt quia deserunt asperiores facere fuga dicta fugiat corrupti et omnis
            porro at dolorum! Ad!</p>
          <a href="#" class="btn btn-outline-secondary btn-black text-uppercase ">explore</a>

        </div>
        <div class="col-6  mx-auto col-md-6 align-self-center my-5">
          <div class="about-img__container">
            <img src="{{ asset('/img/about.png')}}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


 <section id="store" class="store py-5" >

    <div class="container">
      <!-- section title -->
      <div class="row">
        <div class="col-6  mx-auto col-sm-6 text-center">
          <h1 class="text-capitalize">our <strong class="banner-title ">store</strong></h1>
        </div>
      </div>
      <!-- end of section title -->
      <!--filter buttons -->
      <div class="row">
        <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap">
          <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="all"> all</a>
          <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cakes">cakes</a>
          <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cupcakes">cupcakes</a>
          <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="sweets">sweets</a>
          <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="doughnuts">doughnuts</a>
        </div>
      </div>
      <!-- search box -->
      <div class="row">

        <div class="col-6 mx-auto col-md-6">
          <form>
            <div class="input-group mb-3">
              <div class="input-group-prepend ">
                <span class="input-group-text search-box" id="search-icon"><i class="fa fa-search"></i></span>
              </div>
              <input type="text" class="form-control" placeholder='item....' id="search-item">
            </div>

          </form>
        </div>
      </div>
      <!--end of filter buttons -->
      <!-- store  items-->



      <div class="row" class="store-items" id="store-items">
       
        <!-- single item -->
        <div class="col-6 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/sweets-1.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">sweet item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/cupcake-1.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">cupcake item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
          <div class="card shadow ">
            <div class="img-container">
              <img src="img/cake-1.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">cake item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
          <div class="card shadow">
            <div class="img-container imagepath">
              <img src="img/doughnut-1.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name" class="title">dougnut item</h5>
                <h5 class="store-item-value price">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6  col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div class="card shadow ">
            <div class="img-container imagepath">
              <img src="img/sweets-2.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">sweet item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6  col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/cupcake-2.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">cupcake item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6  col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/cake-2.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">cake item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6  col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/doughnut-2.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">dougnut item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6  col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/sweets-3.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">sweet item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6  col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/cupcake-3.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">cupcake item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6  col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/cake-3.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">cake item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-6  col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
          <div class="card shadow">
            <div class="img-container">
              <img src="img/doughnut-3.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">dougnut item</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->

      </div>
  </section>
  <!--end of store items -->

{{-- <section>
  <div class="container mb-5">
    <h1 class="text-center text-capitalize pt-5">services</h1>
    <hr class="w-25 mx-auto pt-5">
      <div class="row text-center ">
          <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/image1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/image1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="img/image1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
           </div>
          </div>
      </div>
    </div>
</section> --}}
<div class="grad-bar"></div>

<section>
  <div class="container pb-3">
  <div class="row">
    <!-- <div class="col-md-12"> -->
      <div class="col-md-6 pt-3">
        Welcome To our Family, We Serve Smile & Sweetness!!!
      </div>
      <div class="col-md-6 pt-3  mx-auto align-self-center ">
        <div class="about-img__container">
        <div class="embed-responsive embed-responsive-16by9 shadow-lg bg-white ">
          <iframe class="embed-responsive-item" src="{{ asset('/videos/intro.mp4')}}" allowfullscreen></iframe width="1100" height="500">
      </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="bg-primary pt-2" style="background-image: url({{ asset('/img/image60.png')}})">
      <article class="py-5 text-center " > 
          <div class="  text-white" >
            <h3>12345678</h3>
            <p>If you wanna best service call us now</p>
            <button class="btn btn-warning">Contact Now</button>
          </div>
      </article>
</section>


 @endsection
 
@section('script')
    
@endsection

