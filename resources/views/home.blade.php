@extends('layouts.app')

@section('content')

    {{--  Slider  --}}
    <header id="main-slide">
        <div id="mySlide" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#mySlide" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#mySlide" data-bs-slide-to="1"></li>
                <li data-bs-target="#mySlide" data-bs-slide-to="2"></li>
                <li data-bs-target="#mySlide" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner text-white">

                    <div class="carousel-item active" id="slide1">
                        <div class="container">
                            <div class="d-none d-md-block">
                                <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">
                                        Get<strong>Inspired</strong>
                                </h1>
                                <br>
                                <p class="bg-dark px-2 pb-1 d-inline-block">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, quo. Unde reiciendis expedita assumenda sunt vel commodi autem perferendis quis corrupti voluptatum animi labore facere, consequuntur repellat, quo, mollitia odit!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" id="slide2">
                        <div class="container">
                            <div class="d-none d-md-block">
                                <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">
                                        Get<strong>Inspired</strong>
                                </h1>
                                <br>
                                <p class="bg-dark px-2 pb-1 d-inline-block">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, quo. Unde reiciendis expedita assumenda sunt vel commodi autem perferendis quis corrupti voluptatum animi labore facere, consequuntur repellat, quo, mollitia odit!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item " id="slide3">
                        <div class="container">
                            <div class="d-none d-md-block">
                                <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">
                                        Get<strong>Inspired</strong>
                                </h1>
                                <br>
                                <p class="bg-dark px-2 pb-1 d-inline-block">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, quo. Unde reiciendis expedita assumenda sunt vel commodi autem perferendis quis corrupti voluptatum animi labore facere, consequuntur repellat, quo, mollitia odit!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" id="slide4">
                        <div class="container">
                            <div class="d-none d-md-block">
                                <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">
                                        Get<strong>Inspired</strong>
                                </h1>
                                <br>
                                <p class="bg-dark px-2 pb-1 d-inline-block">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, quo. Unde reiciendis expedita assumenda sunt vel commodi autem perferendis quis corrupti voluptatum animi labore facere, consequuntur repellat, quo, mollitia odit!
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="#mySlide" class="carousel-control-prev" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#mySlide" class="carousel-control-next" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>



            </div>

        </div>
    </header>


    <section id="member-list" class="py-5 bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="">
                    <h1>Member List</h1>
                    <hr class="w-25 mx-auto">
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt non velit eligendi ipsa fugiat deleniti, qui, quisquam tenetur sapiente quae voluptatem. A perspiciatis voluptatem omnis eaque minus nisi eum sequi?
                    </p>
                    {{--  Flash Message  --}}

                    @if(session()->has('pesan'))

                        @if(session()->get('pesan') == 'update')
                        <div class="alert alert-success alert-dismissible w-50 mx-auto fade show">
                                Data <b>{{ session()->get('name') }}</b> berhasil diupdate
                                <button type="button" class="btn-close" data-bs-dismiss="alert" ></button>
                            </div>
                        @endif

                        @if(session()->get('pesan') == 'delete')
                            <div class="alert alert-danger alert-dismissible w-50 mx-auto fade show">
                                Data <b>{{ session()->get('name') }}</b> berhasil dihapus
                                <button type="button" class="btn-close" data-bs-dismiss="alert" ></button>
                            </div>
                        @endif

                    @endif
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @forelse ($users as $user)
                    <div class="col mt-3">
                        <div class="card">
                            <img
                            src="{{asset('img/gambar'.$user->background_profile.'.jpg')}}"
                            alt="background"
                            class="card-img-top">
                            <div class="card-body">
                                <img src="{{asset('storage/uploads/'.$user->gambar_profile)}}"
                                     alt="profile"
                                     class="rounded-circle img-thumbnail">
                                <h5 class="card-title">{{$user->name}}</h5>
                                <p class="card-text">{{$user->bio_profile ?? '...'}}</p>
                                <ul class="fa-ul text-start">

                                    <li class="mb-2">
                                        <span class="fa-li">
                                            <i class="fas fa-clock"></i>
                                        </span>
                                        Join in {{ date('F Y', strtotime($user->created_at)) }}
                                    </li>
                                    <li class="mb-2">
                                        <span class="fa-li">
                                            <i class="fas fa-briefcase"></i>
                                        </span>
                                        {{ $user->pekerjaan ?? '...' }}
                                    </li>
                                    <li class="mb-2">
                                        <span class="fa-li">
                                            <i class="fas fa-home"></i>
                                        </span>
                                        {{ $user->kota ?? '...' }}
                                    </li>
                                    <li class="mb-2">
                                        <span class="fa-li">
                                            <i class="fas fa-birthday-cake"></i>
                                        </span>
                                        {{ date_diff(date_create($user->tanggal_lahir),date_create('now'))->y }}Tahun
                                    </li>
                                    <li class="mb-2">
                                        <span class="fa-li">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        {{ $user->email}}
                                    </li>

                                </ul>
                                @can('update', $user)
                                    <div class="btn-action">
                                        <a href="{{ url('/users/'.$user->id.'/edit') }}" class="btn btn-primary d-inline-block">Edit</a>
                                        <button class="btn btn-danger btn-hapus"
                                                       data-id="{{ $user->id }}"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#DeleteModal">
                                        Hapus
                                        </button>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada data...</p>
                @endforelse
            </div>
        </div>
    </section>

    <div id="DeleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="" id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Konfirmasi</h4>
                        <button type="button" class="btn-close" data-bg-dismiss="modal">

                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center mb-0">Anda yakin akan menghapus User ini</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-success" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn-danger">Ya Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection



