@extends('layout.index')
@section('index')
    <div class="container position-sticky z-index-sticky top-0">
    </div>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="col-xl-2 text-end">
                                <a href="/" class="btn btn-dark btn-sm ">Back</a>
                            </div>
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Tambah Menu</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/add-menu" enctype="multipart/form-data">
                                        @csrf
                                        <label class="form-label">Name</label>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <label class="form-label">Deskripsi</label>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" class="form-control" name="deskripsi">
                                        </div>
                                        <label for="formFile" class="form-label">Upload Gambar</label>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="file" id="formFile" class="form-control" name="gambar">
                                        </div>
                                        <label class="form-label">Harga</label>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" class="form-control" name="harga">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0">Tambah
                                                Menu</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('layout.script')
@endsection
