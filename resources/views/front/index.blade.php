@extends('front.layout.master')
@section('content')

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url('style/images/1.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Various Company Furniture Products</h1>
                            <h2 class="subheading mb-4">Choice your furniture products</h2>

                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url('style/images/2.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Various Company Furniture Products</h1>
                            <h2 class="subheading mb-4">Choice your furniture products</h2>

                        </div>

                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url('style/images/3.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Various Company Furniture Products</h1>
                            <h2 class="subheading mb-4">Choice your furniture products</h2>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Featured Products</span>
                    <h2 class="mb-4">Our Products</h2>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($product as $item)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="/singleProduct/{{$item->id}}" class="img-prod"><img class="img-fluid"
                                                                                         src="/images/{{$item->image}}"
                                                                                         alt="Colorlib Template">

                                @foreach($discount as $dis)
                                    @if($item->id == $dis->product)
                                        <span class="status">{{$dis->discount}}%</span>
                                        <div class="overlay bg-success"></div>
                                    @endif
                                @endforeach
                            </a>
                            <div>
                                @foreach($stock as $stk)
                                    @if($item->id == $stk->product)
                                        <?php $a = 1; ?>
                                        @break
                                    @else
                                        <?php $a = 0; ?>
                                    @endif
                                @endforeach
                                @if($a !=1)
                                    <span style="background-color: darkred; color: whitesmoke; width: 400px; padding: 6px;">Out of Stock</span>
                                @endif
                            </div>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="/singleProduct/{{$item->id}}">{{$item->name}}</a></h3>
                                <h3><a href="/singleProduct/{{$item->id}}"><b>{{$item->company}}</b></a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        @foreach($discount as $dis)
                                            @if($item->id == $dis->product)
                                                <p class="price"><span class="mr-2
												price-dc">${{$item->price}}</span><span
                                                            class="price-sale">${{$dis->newPrice}}</span></p>
                                                <?php $a = 1; ?>
                                                @break
                                            @else
                                                <?php $a = 0; ?>
                                            @endif
                                        @endforeach

                                        @if($a != 1)
                                            <p class="price"><span class="price-sale">{{$item->price}}</span></p>
                                        @endif

                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="{{route('addTo_cart',$item->id)}}"
                                           class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                <span title="Add to Cart"><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#"
                                           class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span title="Order Now"><i class="ion-ios-browsers"></i></span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="pagination">
            {!! $product->render("pagination::bootstrap-4") !!}
        </div>

        </div>
    </section>




    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(style/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(style/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(style/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(style/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>

    <hr>

    <section class="ftco-section ftco-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="{{asset('style/images/partner-1.png')}}" class="img-fluid"
                                                     alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="{{asset('style/images/partner-2.png')}}" class="img-fluid"
                                                     alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="{{asset('style/images/partner-3.png')}}" class="img-fluid"
                                                     alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="{{asset('styel/images/partner-4.png')}}" class="img-fluid"
                                                     alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="{{asset('style/images/partner-5.png')}}" class="img-fluid"
                                                     alt="Colorlib Template"></a>
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

@endsection

