
<!DOCTYPE html>
<html lang="en">

<head>
        @include('partials.head')
  <!-- Your custom scripts -->
  <style type="text/css">

  </style>
</head>

<body class="homepage-v2">

    <!--Main Navigation-->
    <header>
            @include('partials.nav')
            <div class="view jarallax" style="height: 100vh;">
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

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo12.jpg" class="img-fluid"
                      alt="Second sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo3.jpg" class="img-fluid"
                      alt="Thrid sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row text-center">

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo13.jpg" class="img-fluid"
                      alt="Second sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo15.jpg" class="img-fluid"
                      alt="Thrid sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row text-center">

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo10.jpg" class="img-fluid"
                      alt="Second sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo11.jpg" class="img-fluid"
                      alt="Thrid sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row text-center">

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid"
                      alt="Second sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo4.jpg" class="img-fluid"
                      alt="Thrid sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row text-center">

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo14.jpg" class="img-fluid"
                      alt="Second sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                  <!-- Featured image -->
                  <div class="view overlay z-depth-1 mb-2">
                    <img src="https://mdbootstrap.com/img/Photos/Others/laptop1.jpg" class="img-fluid"
                      alt="Thrid sample image">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Excerpt -->
                  <a href="" class="teal-text text-center text-uppercase font-small">
                    <h6 class="mb-3 mt-3 font-weight-bold ">Travel
                      <a class="grey-text font-small"> - 14.09.2018</a>
                    </h6>
                  </a>
                  <h4 class="mb-3 text-uppercase font-weight-bold dark-grey-text spacing">
                    <strong>title of the news</strong>
                  </h4>
                  <p class="text-justify dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores.Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione
                    voluptatem.
                  </p>

                  <hr class="pb-0 mb-0">

                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-twitter grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-google-plus-g grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-linkedin-in grey-text"></i>
                  </a>
                  <a class="nav-link waves-effect waves-light mt-2">
                    <i class="fab fa-instagram grey-text"></i>
                  </a>

                  <hr class="pt-0 mt-0">
                </div>
                <!-- Grid column -->

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



            <!-- Grid column -->
            <div class="col-lg-6 col-md-6">
              <h6 class="font-weight-bold mt-5 mb-3">LATESTS POSTS</h6>
              <hr class="mb-5">
              <!-- Grid row -->
              <div class="row mt-4">

                <!-- Grid column -->
                <div class="col-4">

                  <!-- Image -->
                  <div class="view overlay z-depth-1 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo12.jpg" class="img-fluid" alt="Post">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Second column -->
                <div class="col-8 mb-1">

                  <!-- Post data -->
                  <div class="">
                    <p class="mb-1">
                      <a href="#!" class="text-hover font-weight-bold">Sed ut in perspiciatis unde omnis</a>
                    </p>
                    <p class="font-small grey-text">
                      <em>July 22, 2017</em>
                    </p>
                  </div>

                </div>
                <!-- Second column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-4">

                  <!-- Image -->
                  <div class="view overlay z-depth-1 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo11.jpg" class="img-fluid" alt="Post">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Second column -->
                <div class="col-7 mb-1">

                  <!-- Post data -->
                  <div class="">
                    <p class="mb-1">
                      <a href="#!" class="text-hover font-weight-bold">At vero eos et accusamus et </a>
                    </p>
                    <p class="font-small grey-text">
                      <em>July 22, 2017</em>
                    </p>
                  </div>

                </div>
                <!-- Second column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-4">

                  <!-- Image -->
                  <div class="view overlay z-depth-1 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo15.jpg" class="img-fluid" alt="Post">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Second column -->
                <div class="col-7 mb-1">

                  <!-- Post data -->
                  <div class="">
                    <p class="mb-1">
                      <a href="#!" class="text-hover font-weight-bold">Nemo enim ipsam voluptatem</a>
                    </p>
                    <p class="font-small grey-text">
                      <em>July 22, 2017</em>
                    </p>

                  </div>

                </div>
                <!-- Second column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-6 col-md-6">
              <h6 class="font-weight-bold mt-5 mb-3">OLDER POSTS</h6>
              <hr class="mb-5">
              <!-- Grid row -->
              <div class="row mt-4">

                <!-- Grid column -->
                <div class="col-4">

                  <!-- Image -->
                  <div class="view overlay z-depth-1 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo1.jpg" class="img-fluid" alt="Post">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Second column -->
                <div class="col-8 mb-1">

                  <!-- Post data -->
                  <div class="">
                    <p class="mb-1">
                      <a href="#!" class="text-hover font-weight-bold">Sed ut in perspiciatis unde omnis</a>
                    </p>
                    <p class="font-small grey-text">
                      <em>July 22, 2017</em>
                    </p>

                  </div>

                </div>
                <!-- Second column -->

              </div>
              <!-- Grid row -->


              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-4">

                  <!-- Image -->
                  <div class="view overlay z-depth-1 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid" alt="Post">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Second column -->
                <div class="col-7 mb-1">

                  <!-- Post data -->
                  <div class="">
                    <p class="mb-1">
                      <a href="#!" class="text-hover font-weight-bold">At vero eos et accusamus et </a>
                    </p>
                    <p class="font-small grey-text">
                      <em>July 22, 2017</em>
                    </p>

                  </div>

                </div>
                <!-- Second column -->

              </div>
              <!-- Grid row -->


              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-4">

                  <!-- Image -->
                  <div class="view overlay z-depth-1 mb-3">
                    <img src="https://mdbootstrap.com/img/Photos/Others/photo4.jpg" class="img-fluid" alt="Post">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Second column -->
                <div class="col-7 mb-1">

                  <!-- Post data -->
                  <div class="">
                    <p class="mb-1">
                      <a href="#!" class="text-hover font-weight-bold">Nemo enim ipsam voluptatem</a>
                    </p>
                    <p class="font-small grey-text">
                      <em>July 22, 2017</em>
                    </p>
                  </div>

                </div>
                <!-- Second column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
      </div>

    </section>
    <!-- Latest posts -->

  </main>
  <!-- Main layout -->



  @include('partials.footer')

  <!-- Custom scripts -->


</body>

</html>
