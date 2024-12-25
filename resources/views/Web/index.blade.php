@extends('layouts.web') 
@section('content')
      
      <div class="bannerWrapper">
      <img class="bannerImage" src ="{{ asset('images/anime.jpg') }}" alt="Slide 1">
      </div>


      <div class="main-wrapper">
        <h2 class="title">MOST POPULAR</h2>
        <div class="card-wrapper">
            <div class="product-card">
                <img src="{{ asset('images/solo.jpg') }}" alt="Solo Leveling" class="product-image">
                <div class="product-name"><a href="{{ route(name: 'product') }}">Solo Leveling</a></div>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/north.jpg') }}" alt="Legend of Northern Blade" class="product-image">
                <div class="product-name"><a href="{{ route(name: 'product') }}">Legend of Northern Blade</a></div>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/mage.jpg') }}" alt="Infinite Mage" class="product-image">
                <div class="product-name"><a href="{{ route(name: 'product') }}">Infinite Mage</a></div>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/omni.jpg') }}" alt="Omniscient Reader's Viewpoint" class="product-image">
                <div class="product-name"><a href="{{ route(name: 'product') }}">Omniscient Reader's Viewpoint</a></div>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/murim.webp') }}" alt="Murim Login" class="product-image">
                <div class="product-name"><a href="{{ route(name: 'product') }}">Murim Login</a></div>
            </div>
        </div>
    </div>

    
    <div class="explorebtn">
      <a href="{{ route(name: 'product') }}" class="explore-button">
        See All <img src="{{ asset('images/fast-forward.png') }}" alt=""> </a>
    </div>
    

<div class="testimonialWrapper">
<div class="testimonial-section">
  <h2 class="testimonial-title">Hear what our top customers have to say!</h2>
  <div class="testimonial-container">
      <!-- Testimonial 1 -->
      <div class="testimonial-card">
          <img src="{{ asset('images/icons8-customer-32.png') }}" alt="Customer 1" class="customer-image">
          <div class="customer-name">Hashir Shaikh</div>
          <div class="review-stars">★★★★★</div>
          <p class="review-text">"Highly accurate translation, premium quality paper. Extremely satisifed with all the manhwas I have bought here!"</p>
      </div>
      <!-- Testimonial 2 -->
      <div class="testimonial-card">
          <img src="{{ asset('images/icons8-customer-32.png') }}" alt="Customer 2" class="customer-image">
          <div class="customer-name">Cheon Yeonhee</div>
          <div class="review-stars">★★★★☆</div>
          <p class="review-text">"良好的服务和快速的交货。非常满意的购买。"</p>
      </div>
      <!-- Testimonial 3 -->
      <div class="testimonial-card">
          <img src="{{ asset('images/icons8-customer-32.png') }}" alt="Customer 3" class="customer-image">
          <div class="customer-name">Sam Arthurs</div>
          <div class="review-stars">★★★★★</div>
          <p class="review-text">"Exceptional quality comics! I have bought 12 so far and am yet to be disappointed!"</p>
      </div>
      <!-- Testimonial 4 -->
      <div class="testimonial-card">
          <img src="{{ asset('images/icons8-customer-32.png') }}" alt="Customer 4" class="customer-image">
          <div class="customer-name">Sakura Yamamoto</div>
          <div class="review-stars">★★★★☆</div>
          <p class="review-text">"説明どおりの製品。購入して満足です。価格に見合った価値があります。"</p>
      </div>
      <!-- Testimonial 5 -->
      <div class="testimonial-card">
          <img src="{{ asset('images/icons8-customer-32.png') }}" alt="Customer 5" class="customer-image">
          <div class="customer-name">Park Sehee</div>
          <div class="review-stars">★★★★★</div>
          <p class="review-text">"환상적인 고객 서비스와 놀라운 품질. 적극 추천합니다!"</p>
      </div>
  </div>
</div>
</div>


@endsection
