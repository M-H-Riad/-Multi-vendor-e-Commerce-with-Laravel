@extends('front.layout.master')
@section('content')
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="/images/{{$product->image}}"><img src="/images/{{$product->image}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$product->name}}</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">4.5</a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star"></span></a>
								<a href="#"><span class="ion-ios-star-half"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">150 <span style="color: #bbb;
">Rating</span></a>
							</p>
						</div>
					<h3><a href="#">{{$product->company}}</a></h3>
    				<p class="price"><span>৳{{$product->price}}</span></p>
    				<p>{{$product->description}}</p>
						<div class="row mt-4">

          				</div>
          	<p><a href="{{route('addTo_cart',$product->id)}}" class="btn btn-black py-3 px-5">Add to Cart</a></p>
          	<p><a href="#" class="btn btn-black py-3 px-5">Buy Now</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
				@foreach($relProduct as $item)
					@if($item->id != $product->id)
    					<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/singleProduct/{{$item->id}}" class="img-prod"><img class="img-fluid" src="/images/{{$item->image}}" alt="Colorlib
    					 Template">
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="/singleProduct/{{$item->id}}">{{$item->name}}</a></h3>
    						<h3><a href="/singleProduct/{{$item->id}}">{{$item->company}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">{{$item->price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
					@endif
				@endforeach
    		</div>
			<div class="pagination">
				{!! $relProduct->render("pagination::bootstrap-4") !!}
			</div>
    	</div>
    </section>

@endsection
