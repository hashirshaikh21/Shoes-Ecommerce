@extends('layouts.web') 
@section('content')
  <div class="cartWrapper">
  <div class="cart-container">
    <div class="cart-header">
        <h2>Proceed to Checkout </h2>
    </div>
    
    <div class="cart-item">
        <input type="checkbox">
        <div class="item-info">
            <img src="https://onedegree.com.pk/cdn/shop/files/bluewhite5.png?v=1726232231&width=720" alt="Sneakers">
            <div class="item-details">
                <h3>FLK spot Mens Exercise Running Sneakers</h3>
                <p>No Brand, Color Family: Black, Size: US:6</p>
                <span class="price">Rs. 799</span>
                <span class="old-price">Rs. 1,999</span>
            </div>
        </div>
        <div class="quantity-controls">
            <button>-</button>
            <span>1</span>
            <button>+</button>
        </div>
    </div>
    
    <div class="cart-item">
        <input type="checkbox">
        <div class="item-info">
            <img src="https://onedegree.com.pk/cdn/shop/files/file_2024-08-29_09.24.40.png?v=1724926834&width=720" alt="ASICS Grippers">
            <div class="item-details">
                <h3>ORIGINAL ASICS STYLE AC GRIPPERS</h3>
                <p>No Brand, Color Family: Blue, Size: 46</p>
                <span class="price">Rs. 4,000</span>
            </div>
        </div>
        <div class="quantity-controls">
            <button>-</button>
            <span>1</span>
            <button>+</button>
        </div>
    </div>

    <div class="cart-item">
      <input type="checkbox">
      <div class="item-info">
          <img src="https://onedegree.com.pk/cdn/shop/files/space_grey_10.jpg?v=1724423402&width=720" alt="ASICS Grippers">
          <div class="item-details">
              <h3>ORIGINAL ASICS STYLE AC GRIPPERS</h3>
              <p>No Brand, Color Family: Blue, Size: 36</p>
              <span class="price">Rs. 7,800</span>
          </div>
      </div>
      <div class="quantity-controls">
          <button>-</button>
          <span>2</span>
          <button>+</button>
      </div>
  </div>

    <div class="order-summary">
        <h3>Order Summary</h3>
        <div class="summary-item">
            <span>Subtotal</span>
            <span>Rs. 0</span>
        </div>
        <div class="summary-item">
            <span>Shipping Fee</span>
            <span>Rs. 0</span>
        </div>
        <input type="text" placeholder="Enter Voucher Code">
        <button class="apply-btn">Apply</button>
        <div class="total">
            <span>Total</span>
            <span>Rs. 0</span>
        </div>
        <div class="checkout-btn ">
        <a href="{{ route(name: 'form') }}">Proceed to Checkout</a>
    </div>
    </div>

    <div class="shop-more">
      <p>If you want to shop more, <a href="{{ route(name: 'product') }}">click here</a>.</p>
      <p>back to product description, <a href="{{ route(name: 'description') }}">click here</a>.</p>
  </div>
  
</div>
</div>
@endsection