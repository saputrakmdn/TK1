<section class="page-section bg-primary text-white mb-0" id="videos">
    <div class="container">
        <!-- Trainer Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Videos</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($videos as $video)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <video class="img-fluid" style="width: 380px;" controls>
                                            <source src="{{asset('video/'.$video->file_video)}}" type="video/mp4">
                                        </video>
                                        <h5 class="card-title text-secondary">{{$video->title}}</h5>
                                        <p class="card-text text-black-50">{{$video->description}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <button class="btn btn-warning" onclick="edit({{$video->id}}, '{{$video->title}}', '{{$video->description}}')" data-bs-toggle="modal" data-bs-target="#edit-modal">
                                                        <i class="fas fa-pen fa-fw"></i>
                                                        Edit
                                                    </button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button class="btn btn-danger" onclick="deleteButton({{$video->id}}, '{{$video->title}}')">
                                                        <i class="fas fa-trash fa-fw"></i>
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev w-auto" data-bs-target="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" data-bs-target="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
