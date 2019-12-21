
<!DOCTYPE html>
<html lang="en">

<head>
        @include('partials.head_ar')
  <!-- Your custom scripts -->
  <style type="text/css">
.teal-text {
    color: #ffc107!important;
}


.pagination .page-item.active .page-link:hover {
    background-color: #ffc107;
}



a {
    cursor: pointer;
    text-decoration: none;
    color: #3d5e9e;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

.pagination .page-item.active .page-link {
    -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    transition: all .2s linear;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    background-color: #ffc107;
    color: #fff;
}
  </style>
</head>

<body class="homepage-v2">

    <!--Main Navigation-->
    <header>
            @include('partials.nav_ar')
            <div class="view jarallax" style="height: 100vh;" data-jarallax='{"speed": 0.2}'>
                <img class="jarallax-img" src='{{url('img/3.jpg')}}' alt="">
                <div class="mask rgba-blue-slight">
                    <div class="container flex-center text-center">
                        <div class="row mt-5">
                            <div class="col-md-12 wow fadeIn mb-3  custom-primary-transparent">
                                <h1 class="display-3 mb-2 wow fadeInDown text-white font-size-0" data-wow-delay="0.3s">
                                    By-Laws</h1>
                                <h5 class="text-uppercase mb-3 mt-1 custom-secondary-text font-weight-bold wow fadeIn"
                                    data-wow-delay="0.4s">SYFFA</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Main Navigation-->
    
  <!-- Main layout -->
  <main class="pt-5">

    <!-- Intro -->
    <section>

      <div class="container-fluid text-center">
        <img src="https://mdbootstrap.com/img/Photos/Others/nature3.jpg" class="img-fluid" alt="First sample image">
        <!-- Excerpt -->
        <h1 class="text-center dark-grey-text pb-3">
          <strong class="custom-secondary-text">SYFFA</strong> News</h1>

        <p class="grey-text text-center mb-4 text-uppercase spacing">Welcome on my blog. </p>

        <!-- Grid row -->
        <div class="row flex-center">

          <!-- Grid column -->
          <div class="col-md-10 col-xl-5">
            <p class="grey-text text-center">
              <em>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas. Nemo enim
                ipsam voluptatem quia voluptas sit aspernatur."</em>
            </p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>

    </section>
    <!-- Intro -->

    <!-- Blog section -->
    <section>

      <div class="container">

        <hr class="my-5">

        <!-- Blog -->
        <div class="row mt-5 pt-3">

          <!-- Main listing -->
          <div class="col-lg-12 col-12 mt-1">

            <!-- Section: Blog v.3 -->
            <section class="pb-3 text-center text-lg-left">

              <!-- Grid row -->
              <div class="row text-center">
@foreach ($event as $item)
    
                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                  <img src="{{Voyager::image($item->img_src)}}" class="img-fluid"
                      alt="Second sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
     
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                  <strong>{{$item->title_ar}}</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">

                      {{$item->description_ar}}
                  </p>

                  <hr class="pb-0 mb-0">
                </div>
                <!-- Grid column -->

                @endforeach

              </div>
              <!-- Grid row -->



            </section>
            <!-- Section: Blog v.3 -->


            <!-- Pagination dark grey -->
            <nav class="mb-5 pb-2">
              <ul class="pagination pg-darkgrey flex-center">
                <!-- Arrow left -->
                <li class="page-item">
                  <a class="page-link" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>

                <!-- Numbers -->
                <li class="page-item active">
                  <a class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link">5</a>
                </li>

                <!-- Arrow right -->
                <li class="page-item">
                  <a class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- Pagination dark grey -->

          </div>
          <!-- Main listing -->

        </div>
        <!-- Blog -->

      </div>

    </section>
    <!-- Blog section -->

    <!-- Latest posts -->
    <section>

      <div class="container-fluid grey lighten-3 mb-0 pb-0">
        <div class="container">
          <!-- Grid row -->
          <div class="row">







          </div>
          <!-- Grid row -->

        </div>
      </div>

    </section>
    <!-- Latest posts -->

  </main>
  <!-- Main layout -->



  @include('partials.footer_ar')

  <!-- Custom scripts -->


</body>

</html>
