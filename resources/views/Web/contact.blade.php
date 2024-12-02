@extends('layouts.web') 
@section('content')

      <div class="Contactcontainer" >
        <div>
        <h2>Contact Us</h2>
        
        <form action="#" method="post">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" required>
            </div>

            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="order-number">Order Number (if applicable)</label>
                <input type="text" id="order-number" name="order-number">
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="us">United States</option>
                    <option value="uk">United Kingdom</option>
                    <option value="ca">Canada</option>
                    <option value="au">Australia</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inquiry-type">Inquiry Type</label>
                <select id="inquiry-type" name="inquiry-type">
                    <option value="general">General Inquiry</option>
                    <option value="order">Order Status</option>
                    <option value="return">Return/Exchange</option>
                    <option value="product">Product Inquiry</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <div class="form-group">
                <input type="checkbox" id="subscribe" name="subscribe">
                <label for="subscribe">I'd like to receive updates on new arrivals, exclusive offers, and more.</label>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>

        <div class="contact-info">
            <h3>Points of Contact</h3>
            <p><strong>Customer Service</strong><br>
                Email: <a href="mailto:support@shoeshop.com">support@shoeshop.com</a><br>
                Phone: 1-800-555-1234
            </p>
            <p><strong>Business Inquiries</strong><br>
                Email: <a href="mailto:partnerships@shoeshop.com">partnerships@shoeshop.com</a>
            </p>
            <p><strong>Additional Locations</strong><br>
                USA - 123 Shoe St., Suite 100, New York, NY 10001<br>
                Europe - 45 Fashion Rd., London, UK 10234
            </p>
        </div>
    </div>
</div>

@endsection