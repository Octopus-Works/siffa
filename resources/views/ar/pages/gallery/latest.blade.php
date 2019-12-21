









      <!DOCTYPE html>
      <html lang="en">
      
      <head>
          @include('partials.head_ar')
      
          <style>
              @media (max-width: 740px) {
      
                  html,
                  body,
                  header,
                  .view {
                      height: unset !important;
                  }
      
              }
      
              .scrollspy-example {
                  height: 700px;
              }
      
              .nav-pills .nav-link.active,
              .nav-pills .show>.nav-link {
      
                  background-color: #3d5e9e;
              }
      
              @media (min-width: 768px) {
      .carousel-multi-item-2 .col-md-3 {
      float: left;
      width: 25%;
      max-width: 100%; } }
      
      .carousel-multi-item-2 .card img {
      border-radius: 2px; }
      
          </style>
      
      
      
      </head>
      
      
      <body class="creative-lp">
      
      
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
                                          معرض الصور</h1>
                                  <h5 class="text-uppercase mb-3 mt-1 custom-secondary-text font-weight-bold wow fadeIn"
                                      data-wow-delay="0.4s">SYFFA</h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
          <!--Main Navigation-->
      
      
      
          <main>
      
      
      <div class="container mb-5 mt-5">
      
              <div class="container  text-center">
                      <div class="row mt-5">
                          <div class="col-md-12 wow fadeIn mb-3 ">
                              <h1 class="display-3 mb-2 wow fadeInDown dark-grey-text text-white font-size-0" data-wow-delay="0.3s">
                                 Gallery</h1>
                              <h5 class="text-uppercase mb-3 mt-1 custom-secondary-text font-weight-bold wow fadeIn"
                                  data-wow-delay="0.4s">SYFFA</h5>
                          </div>
                      </div>
                      <hr class="w-25 mt-2 mb-2">
              <div class="row">
                      <div class="col-md-12">
                    
                        <div id="mdb-lightbox-ui"></div>
                    
                        <div class="mdb-lightbox">
                    
                            @foreach ($gallery as $item)
                                              
                                      
                            <figure class="col-md-4 px-1 py-1">
      
                            <a href="{{Voyager::image($item->img_src)}}"
                                    data-size="1600x1067">
      
                                    <img style="width:450px; height: 450px" src="{{Voyager::image($item->img_src)}}"
                                        class="img-fluid" alt="sample image">
      
                                </a>
      
                            </figure>
      
                            @endforeach
                    
                        </div>
                    
                      </div>
                    </div>
              
              
      
      </div>
       
      
          </main>
      
      
      
      
      
      
      
      
      
      
          @include('partials.footer_ar')
      
      </body>
      
      </html>
      