<section class="masthead page-section portfolio" id="upload">
    <div class="container">
        <!-- Scedule Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Upload</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form action="{{route('video.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" name="description" required placeholder="description"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="video" accept="video/mp4,video/x-m4v,video/*" id="inputGroupFile01" required>
                    </div>
                    <div class="input-group d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
