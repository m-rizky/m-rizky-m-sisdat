@extends('layout.index')
@section('index')
    @include('layout.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layout.nav')
        <div class="container-fluid py-2">
            <div class="row">
                {{-- <div class="ms-3">
                    <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
                    <p class="mb-4">
                        CRUD Menu makanan
                    </p>
                </div> --}}
                <div class="col-xl-12">
                    {{-- <div class="card">
                        <div class="card-header p-2 ps-3">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="rwo">
                                        <div  class="col-4"><img
                                                src="../assets/img/illustrations/illustration-signup.jpg" alt=""
                                                class="img img-thumbnail mb-2"></div>
                                    </div>
                                    <h4 class="mb-2">Nama</h4>
                                    <p class="text-sm mb-0 text-capitalize">Harga</p>
                                </div>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-2 ps-3">
                            <p class="mb-0 text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, iure
                                dolore reprehenderit id natus ratione, amet explicabo quod culpa sit necessitatibus quo
                                sequi blanditiis soluta accusantium in iste error nisi dignissimos illum maxime sed autem
                                voluptatum delectus? Odit voluptates ex provident laudantium, architecto vel exercitationem
                                repudiandae corporis nesciunt vero omnis dolorum. Velit est quaerat fuga iure non atque
                                distinctio voluptatem, fugit sapiente porro totam nulla quasi minus neque ratione saepe iste
                                officiis consequatur labore nihil dolorum ullam. Laboriosam in assumenda autem laborum
                                doloribus ipsum neque vitae similique officiis fugiat eligendi veritatis, quam nobis. Quia
                                unde, id similique nulla numquam voluptates?</span></p>
                        </div>
                    </div> --}}
                    <div class="card mb-3">

                        <img src="{{ asset('storage/' . $menu->gambar) }}" height="250vh" class="card-img-top img-thumbnail border border-0 me-3" alt="Menu Image">
                        <div class="card-body">
                            <h5 class="card-title"><b>Nama : </b>{{ $menu->name }}</h5>
                            <p class="card-text">Deskripsi : {{ $menu->deskripsi }}</p>
                            <p class="card-text"><small class="text-muted"><i>harga : </i>{{ $menu->harga }}</small></p>
                        </div>
                    </div>
                </div>

            </div>
            @include('layout.footer')
        </div>
    </main>
@endsection
