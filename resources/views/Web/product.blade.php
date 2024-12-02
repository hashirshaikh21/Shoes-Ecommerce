
@extends('layouts.web') 
@section('content')
   
<div class="bannerWrapper">
      <img class="bannerImage" src ="{{ asset('images/bannerimg3.jpg') }}" alt="Slide 1">
      </div>



    <div class="cardContainer">
        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/file_2024-08-29_09.24.40.png?v=1724926834&width=720"
                    alt="">
            </div>
            <h1>Air Force 1</h1>
            <p>Classic basketball sneaker, known for its timeless style and versatility.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/02_5.jpg?v=1726667951&width=720" alt="">
            </div>
            <h1>Air Max 1</h1>
            <p>Iconic running shoe featuring visible Air unit for comfort and cushioning.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/5_0a5fa41f-d1f0-4c7e-8ca4-fc3243ab5595.jpg?v=1705390752&width=720"
                    alt="">
            </div>
            <h1>Air Max 90</h1>
            <p>Retro silhouette with a bold design and excellent cushioning technology.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/space_grey_10.jpg?v=1724423402&width=720" alt="">
            </div>

            <h1>Air Max 97</h1>
            <p>Sleek design inspired by Japanese bullet trains, with full-length Air cushioning.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/30_e9f93a5e-db8f-4382-bf9e-e74c1fbfc129.jpg?v=1706104624&width=720"
                    alt="">
            </div>
            <h1>Air Jordan 4</h1>
            <p>Popular basketball shoe featuring mesh panels and a unique lacing system.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/White-Shoes-1_1.jpg?v=1718256700&width=720" alt="">
            </div>
            <h1>Air Jordan 11</h1>
            <p>Celebrated for its patent leather design and performance on the court.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/Blue-Shoes-3_1a948751-8691-45d4-b71a-1b29e06d2784.jpg?v=1718013231&width=720"
                    alt="">
            </div>
            <h1>Nike Dunk Low</h1>
            <p>Versatile sneaker available in various colors, originally designed for basketball.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/30_e9f93a5e-db8f-4382-bf9e-e74c1fbfc129.jpg?v=1706104624&width=720"
                    alt="">
            </div>
            <h1>Nike Dunk High</h1>
            <p>High-top version of the Dunk, popular in both skateboarding and fashion.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/White-Shoes-1_1.jpg?v=1718256700&width=720" alt="">
            </div>
            <h1>React Infinity</h1>
            <p>Engineered for long runs with responsive cushioning and stability features.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/Green-2.jpg?v=1713266100&width=720" alt="">
            </div>
            <h1>Pegasus 39</h1>
            <p>Reliable running shoe combining comfort, support, and responsiveness for everyday use.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>

        </div>

        <div class="card">
            <div>
            </div> <img
                src="https://onedegree.com.pk/cdn/shop/files/7_6184d549-0342-4945-9327-da9179afe973.jpg?v=1705408245&width=720"
                alt="">

            <h1>ZoomX NEXT%</h1>
            <p>Performance running shoe designed for speed and efficiency, ideal for races </p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
            </div> <img
                src="https://onedegree.com.pk/cdn/shop/files/23_ed5c3413-87d5-4ac1-af41-c15b9f0198ab.jpg?v=1710316647&width=720"
                alt="">

            <h1>Blazer Mid</h1>
            <p>Vintage basketball shoe with a sleek profile, popular in casual wear.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
            </div> <img
                src="https://onedegree.com.pk/cdn/shop/files/11_4b2e8b7b-fe96-40c2-97eb-9de23fbb85d6.jpg?v=1710317050&width=720"
                alt="">

            <h1>Cortez</h1>
            <p>Classic running shoe with a retro look, recognized for its simplicity and comfort.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
            </div> <img src="https://onedegree.com.pk/cdn/shop/files/Shoes2.png?v=1722410030&width=720" alt="">

            <h1>Nike Free RN</h1>
            <p>Lightweight running shoe designed to mimic barefoot running for natural movement.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
            </div> <img
                src="https://onedegree.com.pk/cdn/shop/files/4_b8a5a1ec-30a2-415b-ba92-416d8f6cbb80.jpg?v=1685966043&width=720"
                alt="">

            <h1>VaporMax</h1>
            <p>Innovative design featuring a full Air sole for cushioning and flexibility.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/02_5.jpg?v=1726667951&width=720" alt="">
            </div>
            <h1>Air Max 1</h1>
            <p>Iconic running shoe featuring visible Air unit for comfort and cushioning.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/5_0a5fa41f-d1f0-4c7e-8ca4-fc3243ab5595.jpg?v=1705390752&width=720"
                    alt="">
            </div>
            <h1>Air Max 90</h1>
            <p>Retro silhouette with a bold design and excellent cushioning technology.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/space_grey_10.jpg?v=1724423402&width=720" alt="">
            </div>

            <h1>Air Max 97</h1>
            <p>Sleek design inspired by Japanese bullet trains, with full-length Air cushioning.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/30_e9f93a5e-db8f-4382-bf9e-e74c1fbfc129.jpg?v=1706104624&width=720"
                    alt="">
            </div>
            <h1>Air Jordan 4</h1>
            <p>Popular basketball shoe featuring mesh panels and a unique lacing system.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>

        <div class="card">
            <div>
                <img src="https://onedegree.com.pk/cdn/shop/files/White-Shoes-1_1.jpg?v=1718256700&width=720" alt="">
            </div>
            <h1>Air Jordan 11</h1>
            <p>Celebrated for its patent leather design and performance on the court.</p>
            <a href="{{ route(name: 'description') }}" class="buy-now-btn">ADD TO BAG</a>
        </div>


    </div>

@endsection