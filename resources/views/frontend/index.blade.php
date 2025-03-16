@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

    <!-- Slider Promosi (Placeholder) -->
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://via.placeholder.com/1200x400/2E86C1/FFFFFF?text=Promo+Slide+1" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Promo Slide 1</h5>
                    <p>Deskripsi singkat promo slide 1.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/1200x400/1E8449/FFFFFF?text=Promo+Slide+2" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Promo Slide 2</h5>
                    <p>Deskripsi singkat promo slide 2.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/1200x400/A93226/FFFFFF?text=Promo+Slide+3" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Promo Slide 3</h5>
                    <p>Deskripsi singkat promo slide 3.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Konten Utama (Misalnya, Kategori Unggulan) -->
    <div class="container mb-5">
        <h2>Produk Unggulan</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card category-card">
                    <img src="https://via.placeholder.com/200/FAD7A0/000000?text=Category+1" class="card-img-top" alt="Category 1">
                    <div class="card-body">
                        <h5 class="card-title">Category 1</h5>
                        <p class="card-text">Deskripsi singkat kategori 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card">
                    <img src="https://via.placeholder.com/200/F4D03F/000000?text=Category+2" class="card-img-top" alt="Category 2">
                    <div class="card-body">
                        <h5 class="card-title">Category 2</h5>
                        <p class="card-text">Deskripsi singkat kategori 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card">
                    <img src="https://via.placeholder.com/200/E6B8B2/000000?text=Category+3" class="card-img-top" alt="Category 3">
                    <div class="card-body">
                        <h5 class="card-title">Category 3</h5>
                        <p class="card-text">Deskripsi singkat kategori 3.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card category-card">
                    <img src="https://via.placeholder.com/200/D2B4DE/000000?text=Category+4" class="card-img-top" alt="Category 4">
                    <div class="card-body">
                        <h5 class="card-title">Category 4</h5>
                        <p class="card-text">Deskripsi singkat kategori 4.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk Terbaru -->
    <div class="container">
        <h5 class="mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600;">Produk Terbaru</h5>
        <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card product-card shadow-sm border-0 rounded-3 p-3 text-center">
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top p-3" 
                            alt="{{ $product->name }}" style="max-width: 120px; margin: auto;">
                        <span class="badge bg-primary position-absolute top-0 start-50 translate-middle text-white" 
                            style="padding: 5px 10px; border-radius: 10px; font-size: 14px;">4.5</span>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">{{ $product->name }}</h6>
                        <p class="text-muted small m-0">Size Medium - {{ $product->name }}</p>
                        <p class="fw-bold text-primary m-0">Rp. {{ number_format($product->price, 0, ',', '.' ) }}K</p>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>


@endsection
