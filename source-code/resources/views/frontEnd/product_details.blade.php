@extends('frontEnd.layouts.master')
@section('title','Detial Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontEnd.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
                @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
        <div class="product-details">

            <div class="col-sm-5">
                {{-- Product picture with easyzoom plugin --}}
                <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                    <a href="{{url('products/large',$detail_product->image)}}">
                        <img src="{{url('products/small',$detail_product->image)}}" alt="" id="dynamicImage"/>
                    </a>
                </div>
                <ul class="thumbnails" style="margin-left: -10px;">
                    <li>
                        {{-- Checks if product has multiple images to be displayed in a list of pictures --}}
                        @foreach($imagesGalleries as $imagesGallery)
                            <a href="{{url('products/large',$imagesGallery->image)}}" data-standard="{{url('products/small',$imagesGallery->image)}}">
                                <img src="{{url('products/small',$imagesGallery->image)}}" alt="" width="75" style="padding: 8px;">
                            </a>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col-sm-7">
                {{-- Product Details HIDDEN to be given to the CART (ID,NAME,COLOR,CODE,PRICE ETC) --}}
                <form action="{{route('addToCart')}}" method="post" role="form">
                    {{-- CSRF TOKEN --}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="products_id" value="{{$detail_product->id}}">
                    <input type="hidden" name="product_name" value="{{$detail_product->p_name}}">
                    <input type="hidden" name="product_code" value="{{$detail_product->p_code}}">
                    <input type="hidden" name="product_color" value="{{$detail_product->p_color}}">
                    <input type="hidden" name="price" value="{{$detail_product->price}}" id="dynamicPriceInput">
                    <div class="product-information">
                        {{-- "New Image on the top left side of the product description" --}}
                        <img src="{{asset('frontEnd/images/product-details/new.jpg')}}" class="newarrival" alt=""/>
                        {{-- Visible Product Details  --}}
                        {{-- Product Name --}}
                        <h2>{{$detail_product->p_name}}</h2>
                        {{-- Product code --}}
                        <p>Code ID: {{$detail_product->p_code}}</p>
                        <span>
                        {{-- Test attribute given to each product in place of "size","color" and so on --}}
                            <select name="size" id="idSize" class="form-control">
                            <option value="">Select Attribute</option>
                            {{-- Loop through product's attributes and show them as options --}}
                            @foreach($detail_product->attributes as $attrs)
                                <option value="{{$detail_product->id}}-{{$attrs->size}}">{{$attrs->size}}</option>
                            @endforeach
                        </select>
                        </span>
                        <br>
                        <span>
                            {{-- Price --}}
                            <span id="dynamic_price">US ${{$detail_product->price}}</span>
                            <label>Quantity:</label>
                            <input type="text" name="quantity" value="{{$totalStock}}" id="inputStock"/>
                            {{-- Checks and gives the Add to cart button ONLY IF THE PRODUCT IS AVAILABLE --}}
                            @if($totalStock>0)
                            <button type="submit" class="btn btn-fefault cart" id="buttonAddToCart">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                            @endif
                        </span>
                        <p><b>Availability:</b>
                            {{-- Checks for total stock to show "In Stock" if available and "Out of Stock" if not --}}
                            @if($totalStock>0)
                                <span id="availableStock">In Stock</span>
                            @else
                                <span id="availableStock">Out of Stock</span>
                            @endif
                        </p>
                        <p><b>Condition:</b> New</p>
                        {{-- Dummy picture illustrating the product being shared on media --}}
                        <a href=""><img src="{{asset('frontEnd/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
                    </div>
                </form>
            </div>
        </div>
        {{-- Details and Reviews tab under the product --}}
        <div class="category-tab shop-details-tab">
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                    <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                </ul>
            </div>
            {{-- Details tab --}}
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details" >
                    {{-- Shows details from database --}}
                    {{$detail_product->description}}
                </div>
                {{-- Dummy comment here to illustrate comment section --}}
                <div class="tab-pane fade" id="reviews" >
                    <div class="col-sm-12">
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i>Sawsan Ahmad</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>31 JAN 2020</a></li>
                        </ul>
                        <p>This is literally one of the best products I have ever bought! Its so awesome and the material is just as good as pictures<br/> <br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p><b>Write Your Review</b></p>

                        <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
                            <textarea name="" ></textarea>
                            <b>Rating: </b> <img src="{{asset('frontEnd/images/product-details/rating.png')}}" alt="" />
                            <button type="button" class="btn btn-default pull-right">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Users also bought/Recommended Items section --}}
        <div class="recommended_items">
            <h2 class="title text-center">Users also bought</h2>
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    {{-- Checks for related produt chunks --}}
                    <?php $countChunk=0;?>
                    @foreach($relateProducts->chunk(3) as $chunk)
                        <?php $countChunk++; ?>
                        <div class="item<?php if($countChunk==1){ echo' active';} ?>">
                            @foreach($chunk as $item)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{url('/products/small',$item->image)}}" alt="" style="width: 150px;"/>
                                                <h2>{{$item->price}}</h2>
                                                <p>{{$item->p_name}}</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
 </div>
</div>
@endsection