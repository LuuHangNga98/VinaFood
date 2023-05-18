@extends('index')
@section('body')
<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);"> 
<div class="slider-item">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Crunchy</span>
              <h1 class="mb-4">Italian Pizza</h1>
              <div class="field-price">$ 2.90</div>
              <p class="discount-f"><span class="price-old">$ 3.0</span></p>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <div class="qty">
                <p class="lbl">Số lượng</p>
                <div class="q-inner">
                    <button class="btn-minute" type="button" disabled="">-</button>
                    <span class="number">1</span>
                    <button class="btn-plus" type="button" fdprocessedid="akszw">+</button>
                </div>
            </div>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_2.png" class="img-fluid" alt="">
            </div>

        </div>
    </div>
 </div>
</section>
@endsection