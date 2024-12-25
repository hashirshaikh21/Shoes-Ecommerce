<div class="header">
    <h1><em>Nemesis</em><h1>
    <h3>The ultimate world of comics</h3>
</div>

<nav class="sticky-nav">
    <ul>
        <li><a href="{{ route(name: 'index') }}">HOME</a></li>
        <li><a href="{{ route(name: 'product') }}">SHOP</a></li>
        <li><a href="{{ route(name: 'about') }}">ABOUT US</a></li>
        <li><a href="{{ route(name: 'contact') }}">CONTACT US</a></li>
        <li><a href="{{ route(name: 'login') }}">LOGIN</a></li>
        <li><a href="{{ route(name: 'register') }}">SIGNUP</a></li>
        <li><a href="{{ route(name: 'web.admin') }}">ADMIN</a></li>
                 
        <!-- Search Bar -->
        <li>
            <div class="navbar-search">
                <input type="text" id="search-bar" placeholder="Search..." name="query" aria-label="Search">
            </div>
            <div id="search-results" class="search-dropdown" style="display:none;"></div>
        </li>
    </ul>
</nav>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Trigger search when the user types in the search bar
        $('#search-bar').on('keyup', function() {
            var query = $(this).val(); // Get the value from the search input
            if (query.length > 0) {
                // Send an Ajax request to the server to get matching results
                $.ajax({
                    url: '/search', // Laravel route for search
                    method: 'GET',
                    data: { query: query }, // Send query to the server
                    success: function(response) {
                        // Display search results in the dropdown
                        $('#search-results').show();
                        $('#search-results').html(response);
                    },
                    error: function() {
                        // Hide results if there’s an error
                        $('#search-results').hide();
                    }
                });
            } else {
                // Hide the dropdown if search input is empty
                $('#search-results').hide();
            }
        });
    });
</script>
