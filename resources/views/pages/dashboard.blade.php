@extends('layout.index')
@section('index')
    @include('layout.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layout.nav')
        <div class="container-fluid py-2">
            @if (session('success'))
                <div class="toast-container position-fixed bottom-0 end-0 p-3 ">
                    <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                        data-bs-delay="3000">
                        <div class="toast-header ">
                            <strong class="me-auto">Yey! 🤘🤘</strong>
                            <button type="button" class="badge bg-dark " data-bs-dismiss="toast" aria-label="Close"><i
                                    class="bi bi-x fs-4"></i></button>
                        </div>
                        <div class="toast-body">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
                <script>
                    var toastEl = document.getElementById('liveToast');
                    var toast = new bootstrap.Toast(toastEl, {
                        delay: 2000
                    });
                    toast.show();
                </script>
            @endif
            <div class="row">
                <div class="ms-3">
                    <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
                    <p class="mb-4">
                        CRUD Menu makanan
                    </p>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-2 ps-3">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Jumlah menu</p>
                                    <h4 class="mb-0">{{ $menu->count() }}</h4>
                                </div>
                                <div
                                    class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                    <i class="material-symbols-rounded opacity-10">weekend</i>
                                </div>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                    </div>
                </div>

            </div>
            <div class="row mb-4 mt-4">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6>Data</h6>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <a href="/add-menu" class="btn btn-sm btn-dark fs-4 fw-bolder">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Deskripsi</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Harga</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menu as $m)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                           
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $m->name }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle  text-sm">
                                                    <span class="text-xs font-weight-bold"
                                                        style="display:inline-block;white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">{{ $m->deskripsi }}</span>

                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> {{ $m->harga }} </span>
                                                </td>
                                                <td class="text-center">
                                                    {{-- <span class="text-xs font-weight-bold">%</span> --}}
                                                    <div class="col-md-12">
                                                        <a href="/view/{{ $m->id }}" class="btn btn-dark btn-sm"><i
                                                                class="bi bi-eye text-md"></i></a>
                                                        <a href="/{{ $m->id }}/edit"
                                                            class="btn btn-warning btn-sm"><i
                                                                class="bi bi-pencil text-md"></i></a>
                                                        {{-- <a href="" class="btn btn-danger btn-sm"><i
                                                                class="bi bi-trash3 text-md"></i></a> --}}
                                                        <form action="/menu/{{ $m->id }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick = "return confirm('kamu yakin?')"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="bi bi-trash3 text-md"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.footer')
        </div>
    </main>
    @include('layout.script')
@endsection
