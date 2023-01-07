@extends('layouts.app2')
  
@section('content')
        <!-- Header-->
        <header class="bg-white py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center ">
                    <h1 class="display-5 fw-bolder">Selamat Datang <span class="text-black-50">{{Auth::user()->name}}</span>!  di tempat service elektronik Haji Multazam</h1>
                    <p class="lead fw-normal  mb-0">Silahkan scroll untuk melihat barang yang anda service</p>
                    <br><p class="lead fw-bold">- - - - -</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-3">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($service as $item)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            @if ($item->status == 1)
                                <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sudah Jadi</div>
                            @else
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Belum Jadi</div>
                            @endif

                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body px-2">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">TV Polytron</h5>
                                    <!-- Product price-->
                                    <p>Biaya : Rp. 50.000</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('detail.show', $item->id)}}">Detail Service</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Footer-->
@endsection