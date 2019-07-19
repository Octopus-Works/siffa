<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('partials.head')
    <title>Office Information</title>

    <style>
        body {
            line-height: 2rem !important;
        }


        hr {
            border-top: 1px solid rgba(255, 191, 0, 0.51);
        }

        p {
            font-size: 17px !important;
        }

    </style>


</head>

<body>

    <!-- Navigation -->




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
    

    <main style="">

            <div class="container mt-5 mb-5 ">




                    <div class="row">

                            <!--Grid column-->
                            <div class="col-12 mb-4">
                          
                              <!-- Card -->
                              <div class="card gradient-card">
                          
                                  <div class="card-image" style="background-image: url({{url('img/3.jpg')}})">
                          
                                    <!-- Content -->
                                    <a href="#!">
                                      <div class="text-white  text-center h-100 mask blue-gradient-rgba">
                                        <div class="text-center  p-3">
                                        <h1 class=" text-center">{{ $user->shippingoffice->name }}</h1>
                                        <div class="second-content align-self-center mx-auto text-center">
                                                <i class="fa fa-truck fa-3x"></i>
                                              </div>
                                 
                                     
                                        </div>
            
                                      </div>
                                    </a>
                          
                                  </div>
                          
                                  <!-- Data -->
        
                          
                                  <!-- Content -->
                                  <div class="card-body white">
        
                                            <!--Image-->
                                            <div class="view overlay">
                                                @if (isset($image))
                                                    <img src="{{ $image->url}}"  style="min-height:383px; min-width:400px" class="img-fluid z-depth-1" alt="">
                                                @endif
                                                <div class="mask rgba-white-slight"></div>
                                            </div>
                                            <!--/.Image-->
        
                                    <h4 class="text-uppercase font-weight-bold my-4 text-center">Details</h4>
        
                                            <p class="text-muted text-center" align="justify">Office Owner Name: {{ $user->userdetail->fullname }} </p>
                                            <p class="text-muted text-center" align="justify">Phone Number: {{ $user->userdetail->phone_number}}</p>
                                            <p class="text-muted text-center" align="justify">Mobile Number: {{$user->userdetail->mobile_number }}</p>
                                            <p class="text-muted text-center" align="justify">Main Branch Address: {{ $user->shippingoffice->city}}</p>
                                            <p class="text-muted text-center" align="justify">E-mail: {{ $user->email }}</p>
                                            <p class="text-muted text-center" align="justify">Website: {{ $user->userdetail->website }}</p>
                                  </div>
                          
                              </div>
                              <!-- Card -->
                          
                            </div>
                            <!--Grid column-->
                    </div>

        
        

                
            </div>








    </main>
    <!-- Main layout -->

    <!-- Footer -->
    @include('partials.footer')

    <!-- Footer -->

    <!-- SCRIPTS -->
    <script>
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

    </script>


</body>

</html>
