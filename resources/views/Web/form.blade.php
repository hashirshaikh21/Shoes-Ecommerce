@extends('layouts.web') 
@section('content')


<div class="checkoutWrapper">
    <div class="checkoutContainer">
        <div class="checkoutHeader">Proceed to Checkout</div>
    
        <form action="./submit_checkout.php" method="POST"> <!-- Form added here -->
            <!-- Shipping Address Section -->
            <div class="sectionTitle">Shipping Address</div>
            <div class="inputGroup">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter shipping address" required>
            </div>
            <div class="inputGroup">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Enter city" required>
            </div>
            <div class="inputGroup">
                <label for="zip">ZIP Code</label>
                <input type="text" id="zip" name="zip" placeholder="Enter ZIP code" required>
            </div>
    
            <!-- Order Summary Section -->
            <div class="sectionTitle">Order Summary</div>
            <div class="orderSummary">
                <div class="orderItem">
                    <span>Item 1</span>
                    <span>Rs. 799</span>
                </div>
                <div class="orderItem">
                    <span>Item 2</span>
                    <span>Rs. 4,000</span>
                </div>
                <div class="orderTotal">
                    <span>Total</span>
                    <span>Rs. 4,799</span>
                </div>
            </div>
    
            <!-- Voucher Code Section -->
            <div class="voucherSection">
                <input type="text" name="voucher" placeholder="Enter voucher code">
                <button type="button" class="applyBtn">Apply</button>
            </div>
    
            <!-- Checkout Button -->
            <button type="submit" class="checkoutBtn">Proceed to Checkout</button>
    
            <!-- Shop More Link -->
            <div class="shopMore">
                Want to shop more? <a href="{{ route(name: 'product') }}">Click here</a><br>
                Back to cart? <a href="{{ route(name: 'addtocart') }}">Click here</a>
            </div>
        </form> <!-- Closing form tag -->
    </div>
</div>
@endsection