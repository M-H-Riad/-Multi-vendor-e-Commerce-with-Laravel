@extends('front.layout.master')
@section('content')

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
							<?php $total = 0 ?>

							@if(session('cart'))
								@foreach(session('cart') as $id => $details)

									<?php $total += $details['price'] * $details['quantity'] ?>

									<tr>
										<td data-th="Product">
											<div class="row">
												<div class="col-sm-3 hidden-xs"><img src="images/{{$details['photo'] }}"
																					 width="100" height="100" class="img-responsive"/></div>
												<div class="col-sm-9">
													<h4 class="nomargin">{{ $details['name'] }}</h4>
												</div>
											</div>
										</td>
										<td data-th="Price">${{ $details['price'] }}</td>
                                    <form action="{{route('update_cart')}}" method="get">
										<td data-th="Quantity">
											<input type="number" min="1" name="quantity" value="{{
											$details['quantity'] }}"
                                                   class="form-control quantity" />
										 </td>
										 <td data-th="Subtotal" class="text-center">${{ $details['price'] *
										 $details['quantity'] }}</td>
										 <td class="actions" data-th="">

												 <input type="hidden" name="id" value="{{ $details['id']}}">
												 <input type="submit" value="Refresh" class="btn btn-info btn-sm
												 update-cart">
									</form>

											<a href="{{route('delete_cart',$details['id'])}}" class="btn btn-danger btn-sm
											remove-from-cart"
                                               value="Delete">Delete
											</a>
										</td>
									</tr>
								@endforeach
							@endif

							</tbody>
							<tfoot>

							<tr>
								<td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
								<td colspan="2" class="hidden-xs"></td>
								<td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
							</tr>
							</tfoot>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">

    			<div class="col-lg-12 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>{{ $total }}</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$50.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>{{ $total+50 }}</span>
    					</p>
    				</div>
					@if($total != null)
						<p><center><a href="/precheck" class="btn btn-primary py-3 px-4">Proceed to
								Checkout</a></center></p>
					@else
						<p><center><a href="#" class="btn btn-primary py-3 px-4" onclick="alert('Your cart is empty.')
							">Proceed to
								Checkout</a></center></p>
					@endif

    			</div>
    		</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

	<script type="text/javascript">

		$(".update-cart").click(function (e) {
			e.preventDefault();
			var ele = $(this);

			$.ajax({
				url: '{{ url('/cart/update') }}',
				method: "get",
				data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
				success: function (response) {
					window.location.reload();
				}
			});
		});

		$(".remove-from-cart").click(function (e) {
			e.preventDefault();

			var ele = $(this);

			if(confirm("Are you sure")) {
				$.ajax({
					url: '{{ url('/cart/delete') }}',
					method: "get",
					data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
					success: function (response) {
						window.location.reload();
					}
				});
			}
		});

	</script>

	@endsection

