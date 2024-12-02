@extends('layouts.web') 
@section('content')


<div class="descriptionWrapper">
<div class="descriptioncontainer">
        <div class="descriptionproduct-image">
            <img src="https://onedegree.com.pk/cdn/shop/files/White-Shoes-1_1.jpg?v=1718256700&width=720" alt="Product Image">
            <div class="descriptionthumbnail-gallery">
                <img src="https://onedegree.com.pk/cdn/shop/files/White-Shoes-1_1.jpg?v=1718256700&width=720" alt="Thumbnail 1">
                <img src="https://onedegree.com.pk/cdn/shop/files/White-Shoes-1_1.jpg?v=1718256700&width=720" alt="Thumbnail 2">
                <img src="https://onedegree.com.pk/cdn/shop/files/White-Shoes-1_1.jpg?v=1718256700&width=720" alt="Thumbnail 3">
            </div>
        </div>
        <div class="descriptionproduct-details">
            <h2>Nike Air Max 1</h2>
            <p class="sku">SKU#: J-10000094856</p>
            <p class="stock-status">IN STOCK</p>
            <p class="price">PKR 5,990.00</p>
            <p class="installments">Pay in 3 installments of PKR 1,996.67</p>
            
            <div class="sizes">
                <p>SIZE</p>
                <button>S</button>
                <button>M</button>
                <button>L</button>
                <button>XL</button>
                <a href="#" class="size-chart">SIZE CHART</a>
            </div>
            
            <a href="{{ route(name: 'addtocart') }}"  class="descriptionadd-to-bag">ADD TO BAG</a>
            
            <p class="description">
              Experience timeless style and cutting-edge comfort with the Nike Air Max 1. Originally released in 1987, this iconic sneaker redefined streetwear and remains a staple in sneaker culture today. Designed by Tinker Hatfield, the Air Max 1 was the first shoe to reveal Nike's revolutionary Air cushioning, offering both style and performance.
            </p>
            
            <div class="descriptionmore-info">
                <h3>More Information</h3>
                <ul>
                    <li><strong>Color:</strong> White</li>
                    <li><strong>Fabric:</strong> Blended</li>
                    <li><strong>Fit Type:</strong> Regular Fit</li>
                    <li><strong>Product Category:</strong> Casual </li>
                    <li><strong>Season:</strong> Midsummer Collection</li>
                    <li><strong>Disclaimer:</strong> Due to the photographic lighting & different screen calibrations, the colors of the original product may slightly vary from the picture</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    @endsection