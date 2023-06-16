<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TK1</title>
    <!-- Favicon-->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('template/css/styles.css')}}" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Navigation-->
@include('layouts.header')
{{--content--}}
@yield('content')
{{--footer--}}
@include('layouts.footer')
<form id="form-delete" action="{{route('video.delete')}}" method="post" hidden>
    @csrf
    <p>Are you sure want delete this content?</p>
    <p>Title:</p>
    <p id="title-delete">ADasdada</p>
    <input type="hidden" id="id-delete" name="id">
    <button type="submit" id="button-delete-video" class="btn btn-primary">
        <i class="fas fa-check fa-fw"></i>
        Yes
    </button>
    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
        <i class="fas fa-cancel fa-fw"></i>
        Cancel
    </button>
</form>

@include('layouts.modals.edit')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Core theme JS-->
<script src="{{asset('template/js/scripts.js')}}"></script>
<script>
    @if(session('success'))
    Swal.fire('{{session('success')}}', '', 'success')
    @endif


    var myCarousel = document.querySelector('#recipeCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000
    });

    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    });

    function deleteButton(id, title) {
        Swal.fire({
            icon: 'warning',
            title: 'Do you want to delete the video? <br> Title: ' + title,
            showCancelButton: true,
            confirmButtonText: '<i class="fas fa-check fa-fw"></i> Yes',
            cancelButtonText: '<i class="fa fa-cancel"></i> Cancel',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                document.getElementById('button-delete-video').click();
            }
        })
        document.getElementById('title-delete').innerHTML = title;
        document.getElementById('id-delete').setAttribute('value', id);
    }

    function edit(id, title, description){
        document.getElementById('edit-title').setAttribute('value', title);
        document.getElementById('edit-id').setAttribute('value', id);
        document.getElementById('edit-description').innerText = description;
    }

</script>
</body>
</html>
