@extends('layouts.app')
        @section('extra-css')
        <link rel="stylesheet" href="{{ asset('css/style-all.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @stop
        @section('title')
        <title>KASA-Shop</title>
        @stop
        @section('content')
        <header>
        </header>
        <section id="products">
            <div id="filter">
                <ul id="filter-bar">
                    <li id="categoryLabel" onclick="displayCategoryFilter()" onmouseup="closeFilter()">Category</li>
                    <div id="categoryFilter">
                        <form id="categoryFilterForm">
                            <label class="filter-container">Table
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Sofa
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Chair
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Bed
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                    <li id="roomLabel" onclick="displayRoomFilter()" onmouseup="closeFilter()">Room</li>
                    <div id="roomFilter">
                        <form id="roomFilterForm">
                            <label class="filter-container">Kitchen
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Living
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Bedroom
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Study
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Bedroom
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                    <li id="colorLabel" onclick="displayColorFilter()" onmouseup="closeFilter()">Color</li>
                    <div id="colorFilter">
                        <form id="colorFilterForm">
                            <label class="filter-container">Black
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">White
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Gray
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Red
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Green
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                    <li onclick="displayPriceFilter()">Price</li>
                    <li id="materialLabel" onclick="displayMaterialFilter()" onmouseup="closeFilter()">Material</li>
                    <div id="materialFilter">
                        <form id="colorFilterForm">
                            <label class="filter-container">Plastic
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">White
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Gray
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Red
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Green
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                </ul>
                <form>
                    <input type="text" id="searchBar" placeholder="Search">
                    <button id="search-btn" type="submit"><i class="fa fa-search" style="font-size:1.5rem; color:var(--background);"></i></button>
                </form>
            </div>
        </section>
        <section id="products-section">
            <a href="{{ route('crud.crud') }}">CRUD</a>
            @foreach ($products as $product)
            <div class="product">
                   <img src="{{ $product->image }}" class="product-image" style="width:100%" src="" alt="product"/>
                   <div class="product-overlay">
                        <div>
                            <p class="product-name">{{ $product->name }}</p>
                            <p class="product-price">${{ $product->price }}</p>
                            <a href="{{ route('shop.show', $product->slug) }}"><button class="details-btn">Details</button></a>
                        </div>
                   </div>
                </div>
            @endforeach
        </section>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/all.js') }}"></script>
    @stop