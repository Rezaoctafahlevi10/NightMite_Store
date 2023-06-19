@extends('layouts.navbar')
@section('content')
    <section id="homepage" class="my-5">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators" >
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Fashion_cover_page.jpg" class="d-block w-100"width="100%" height="450px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="New_collection.jpg" class="d-block w-100" width="100%" height=450px alt="...">
                </div>
                <div class="carousel-item">
                    <img src="new_arrivals.jpg" class="d-block" width="100%" height="450px" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <main class="text-center">
        <h1 class="mb-4">Products</h1>
        @yield('contents')
    </main>
    <section>
        <div class="container mt-5">
            <div class="row align-items-start">
                <div class="col">
                    <h1>Tentang Kami </h1>
                    <p>Pusat perbelanjaan pakaian terbesar di Tunjungan Plaza, Surabaya </p>
                </div>
                <div class="col">
                    <div class="card py-2" style="border-radius: 10px">
                        <h3 class="text-center">NightMite Store Tunjungan Plaza Surabaya </h3>
                        <img src="https://asset-3s.3second.co.id/p/store/web_1667652960_ciwalk.jpeg" height="100px" width="150px" style="border-radius: 20px 20px;margin-left: 150px" alt="">
                        <p class="mt-3 text-center">Jl. Basuki Rahmat No.8-12, Kedungdoro, Kec. Tegalsari, Surabaya, Jawa Timur 60261</p>
                        <form action="https://goo.gl/maps/d6fuX2VCK4gvzzWz6" method="get">
                            <button type="submit" class="btn btn-primary" style="margin-left: 180px">Lihat Maps</button>
                        </form>
                    </div>
                </div>
                <div class="col-2">
                    <h5>Pelayanan</h5> 
                    <p>Jam dan hari kerja</p> 
                    <p>09.00 - 20.00</p> 
                    <p>Senin - Minggu</p>
                </div>
            </div>
        </div>
    </section>
@endsection

