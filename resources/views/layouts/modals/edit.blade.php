<div class="portfolio-modal modal fade" id="edit-modal" tabindex="-1" aria-labelledby="car1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h3 class="text-secondary text-uppercase mb-0">Edit</h3>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <form action="{{route('video.update')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="edit-title" name="title" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea type="text" class="form-control" id="edit-description" name="description" required placeholder="description"></textarea>
                                        </div>
                                        <input type="hidden" id="edit-id" name="id">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="video" accept="video/mp4,video/x-m4v,video/*" id="inputGroupFile01">
                                        </div>
                                        <div class="input-group d-grid gap-2 col-6 mx-auto">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
