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
                    <option value="au">UAE</option>
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
            <h3>Contacts</h3>
            <p><strong>Customer Service</strong><br>
                Email: <a href="mailto:support@nemesis.com">support@nemesis.com</a><br>
                Phone: 111-222-3333
            </p>
            <p><strong>Business Inquiries</strong><br>
                Email: <a href="mailto:business@nemesis.com">business@nemesis.com</a>
            </p>
            <p><strong>Additional Locations</strong><br>
            123 Manga Lane, Otaku City, Kyoto, 56789, Japan<br>
            789 Webtoon Road, Manhwa City, Seoul, 54321, South Korea
            </p>
        </div>
    </div>
</div>

@endsection