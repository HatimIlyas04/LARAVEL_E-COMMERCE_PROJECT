
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>HOLAZOMI</title> 
        <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo2. css') }}">
  
</head>
<style>
      .product-box .product-details h5 {
    width: 100%;
    }
</style>
{{-- <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css"> --}}

   
<body>
    @extends('layouts.base')
    @push('styles')
    <style>
      
        nav svg{
            height: 20px;
        }
        .product-box .product-details h5 {            
            width: 100%;	
        }
    </style>
    @endpush

@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Shop</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 category-side col-md-4">
                <div class="category-option">
                    <div class="button-close mb-3">
                        <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                    </div>
                    <div class="accordion category-name" id="accordionExample">
                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Brand
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br1" name="brands"
                                                    value="1" type="checkbox">
                                                <label class="form-check-label">Quis Et</label>
                                                <p class="font-light">(1)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br2" name="brands"
                                                    value="2" type="checkbox">
                                                <label class="form-check-label">Aliquam Doloremque</label>
                                                <p class="font-light">(0)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br3" name="brands"
                                                    value="3" type="checkbox">
                                                <label class="form-check-label">Sequi Repellendus</label>
                                                <p class="font-light">(1)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br4" name="brands"
                                                    value="4" type="checkbox">
                                                <label class="form-check-label">Repellendus Quia</label>
                                                <p class="font-light">(2)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br5" name="brands"
                                                    value="5" type="checkbox">
                                                <label class="form-check-label">Sint Iste</label>
                                                <p class="font-light">(0)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br6" name="brands"
                                                    value="6" type="checkbox">
                                                <label class="form-check-label">Et Eos</label>
                                                <p class="font-light">(6)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br7" name="brands"
                                                    value="7" type="checkbox">
                                                <label class="form-check-label">Vel Explicabo</label>
                                                <p class="font-light">(2)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br8" name="brands"
                                                    value="8" type="checkbox">
                                                <label class="form-check-label">Ipsam Earum</label>
                                                <p class="font-light">(4)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br9" name="brands"
                                                    value="9" type="checkbox">
                                                <label class="form-check-label">Sequi Reprehenderit</label>
                                                <p class="font-light">(5)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br10" name="brands"
                                                    value="10" type="checkbox">
                                                <label class="form-check-label">Sunt Corrupti</label>
                                                <p class="font-light">(3)</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-color">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    Color
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-price">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">Price</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse show"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="range-slider category-list">
                                        <input type="text" class="js-range-slider" id="js-range-price" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-price">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">
                                    Size
                                </button>
                            </h2>

                            <div id="collapseFive" class="accordion-collapse collapse show"
                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <a href="javascript:void(0)">xs</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">sm</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">md</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">lg</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">xl</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">xxl</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct1" name="categories"
                                                    type="checkbox" value="1">
                                                <label class="form-check-label">Qui Ut</label>
                                                <p class="font-light">(7)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct2" name="categories"
                                                    type="checkbox" value="2">
                                                <label class="form-check-label">Blanditiis Error</label>
                                                <p class="font-light">(8)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct3" name="categories"
                                                    type="checkbox" value="3">
                                                <label class="form-check-label">Quam Quos</label>
                                                <p class="font-light">(0)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct4" name="categories"
                                                    type="checkbox" value="4">
                                                <label class="form-check-label">Cupiditate Minus</label>
                                                <p class="font-light">(5)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct5" name="categories"
                                                    type="checkbox" value="5">
                                                <label class="form-check-label">Dolores Et</label>
                                                <p class="font-light">(4)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct6" name="categories"
                                                    type="checkbox" value="6">
                                                <label class="form-check-label">Quis Repudiandae</label>
                                                <p class="font-light">(0)</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven">
                                    Discount Range
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse show"
                                aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault19">
                                                <label class="form-check-label" for="flexCheckDefault19">5% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault20">
                                                <label class="form-check-label" for="flexCheckDefault20">10% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault21">
                                                <label class="form-check-label" for="flexCheckDefault21">20% and
                                                    above</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="category-product col-lg-9 col-12 ratio_30">

                <div class="row g-4">
                    <!-- label and featured section -->
                    <div class="col-md-12">
                        <ul class="short-name">


                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="filter-options">
                            <div class="select-options">
                                <div class="page-view-filter">
                                    <div class="dropdown select-featured">
                                        <select class="form-select" name="orderby" id="orderby">
                                            <option value="-1" {{ $order==-1? 'selected':''}}>Default</option>


                                            <option value="1" {{ $order==1? 'selected':''}}>Date, New To Old</option>


                                            <option value="2" {{ $order==2? 'selected':''}}>Date, Old To New</option>
                                            <option value="3" {{ $order==3? 'selected':''}}>Price, Low To High</option>
                                            <option value="4" {{ $order==4? 'selected':''}}>Price, High To Low</option>
                                        </select>
                                    </div>
                                </div>
                               
                                    <div class="dropdown select-featured">
                                        <select class="form-select" name="size" id="pagesize">
                                            <option value="12" {{ $size == 12 ? 'selected':'' }}>12 Products Per Page</option>
                                            <option value="24" {{ $size == 24 ? 'selected':'' }}>24 Products Per Page</option>
                                            <option value="52" {{ $size == 52 ? 'selected':'' }}>52 Products Per Page</option>
                                            <option value="100" {{ $size == 100 ? 'selected':'' }}>100 Products Per Page</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="grid-options d-sm-inline-block d-none">
                                <ul class="d-flex">
                                    <li class="two-grid">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid-2.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="three-grid d-md-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid-3.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="grid-btn active d-lg-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/list.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- label and featured section -->

                <!-- Prodcut setion -->
                <div class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                    @foreach ($products as $product)                            
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="#">
                                        <img src="assets/images/fashion/product/front/{{$product->image}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="#">
                                        <img src="assets/images/fashion/product/back/{{$product->image}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)"  onclick="event.preventDefault();document.getElementById('addtocart').submit();" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                            <form id="addtocart" method="post" action="{{route('cart.store')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">                                             
                                                <input type="hidden" name="quantity" id="qty" value="1">
                                            </form>
                                        </a>
                                        
                                        </li>
                                        <li>
                                            <a href="{{ route('shop.product.details', ['slug' => $product->slug]) }}">
                                                <i data-feather="eye"></i>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">{{$product->category->name}}</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="#" class="font-default">
                                        <h5 class="ms-0">{{$product->name}}</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">{{$product->category->name}}</span>
                                        <p class="font-light">{{$product->short_description}}</p>
                                    </div>
                                    <h3 class="theme-color">${{$product->regular_price}}</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{$products->links('pagination.default')}}
                
                
                {{-- <nav class="page-section">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Previous"
                                style="color:#6c757d;">
                                <span aria-hidden="true">
                                    <i class="fas fa-chevron-left"></i>
                                </span>
                            </a>
                        </li>


                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="shop-1.html?page=2">2</a>
                        </li>

                        <li class="page-item">
                            <a href="shop-1.html?page=2" class="page-link" aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </li>

                    </ul>
                </nav> --}}

            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->
<!-- Subscribe Section Start -->
<section class="subscribe-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="subscribe-details">
                    <h2 class="mb-3">Subscribe Our News</h2>
                    <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                        and fantastic Products.</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="subsribe-input">
                    <div class="input-group">
                        <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                        <button class="btn btn-solid-default" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe Section End -->
@endsection
<form id="frmFilter" method="GET">
    <input type="hidden" name="page" id="page" value="{{$page}}" />
    <input type="hidden" name="size" id="size" value="{{$size}}" />
    <input type="hidden" id="order" name="order" value="{{$order}}" /> 
      
</form>

@push('scripts')
<script>
    $("#pagesize").on("change",function(){                    
        $("#size").val($("#pagesize option:selected").val());
        $("#frmFilter").submit(); 
  });
  
  $("#orderby").on("change",function(){                    
            $("#order").val($("#orderby option:selected").val());
            $("#frmFilter").submit(); 
      });
</script>

@endpush
</body>
</html>
