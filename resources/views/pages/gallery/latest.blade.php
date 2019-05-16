









      <!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')

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
        @include('partials.nav')
        <div class="view jarallax" style="height: 100vh;" data-jarallax='{"speed": 0.2}'>
            <img class="jarallax-img" src='{{url('img/3.jpg')}}' alt="">
            <div class="mask rgba-blue-slight">
                <div class="container flex-center text-center">
                    <div class="row mt-5">
                        <div class="col-md-12 wow fadeIn mb-3  custom-primary-transparent">
                            <h1 class="display-3 mb-2 wow fadeInDown text-white font-size-0" data-wow-delay="0.3s">
                                    Gallery</h1>
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
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid">
                      </a>
                    </figure>
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" />
                      </a>
                    </figure>
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" />
                      </a>
                    </figure>
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" class="img-fluid" />
                      </a>
                    </figure>
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" />
                      </a>
                    </figure>
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" class="img-fluid" />
                      </a>
                    </figure>
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" class="img-fluid" />
                      </a>
                    </figure>
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" />
                      </a>
                    </figure>
              
                    <figure class="col-md-4">
                      <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg" data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="img-fluid" />
                      </a>
                    </figure>
              
                  </div>
              
                </div>
              </div>
        
        

</div>
 
<hr class="w-25 mt-5 mb-5">
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
          <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
          <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
        </div>
        <!--/.Controls-->
      
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
      
          <!--First slide-->
          <div class="carousel-item active">
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(42).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(8).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
          </div>
          <!--/.First slide-->
      
          <!--Second slide-->
          <div class="carousel-item">
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(53).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(47).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(26).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
          </div>
          <!--/.Second slide-->
      
          <!--Third slide-->
          <div class="carousel-item">
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(64).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(51).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(59).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(63).jpg"
                  alt="Card image cap">
              </div>
            </div>
      
          </div>
          <!--/.Third slide-->
      
        </div>
        <!--/.Slides-->
      
      </div>
      <!--/.Carousel Wrapper-->
    </main>










    @include('partials.footer')

</body>

</html>
