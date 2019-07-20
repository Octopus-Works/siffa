


		<!DOCTYPE html>

<html lang="en">

<head>

    @include('partials.head')


	<style>

.view>* {
	-webkit-filter: blur(	20px);
  -moz-filter: blur(20px);
  -o-filter: blur(20px);
  -ms-filter: blur(20px);
  filter: blur(20px);
  }

.disableBlur {
	-webkit-filter: blur(0);
  -moz-filter: blur(0);
  -o-filter: blur(0);
  -ms-filter: blur(0);
  filter: blur(0);
}

.list-unstyled{
	-webkit-filter: blur(0px);
  -moz-filter: blur(0px);
  -o-filter: blur(0px);
  -ms-filter: blur(0px);
  filter: blur(0px);
}


		.red-text {

			color: #DD2428 !important;

		}

		.red {

			background-color: #DD2428 !important;

		}

		.black {

			background-color: #231F20 !important;

		}

		.white {

			background-color: #ffffff !important;

		}

	</style>


</head>


<body>

<!-- header start-->

<header>

	@include('partials.nav')

    
	<div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('{{ Voyager::image( $news->img_src ) }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

			<div class="mask  rgba-black-strong disableBlur">
	
				<div class="container h-100 d-flex justify-content-center align-items-center">
	
					<div class="row pt-5 mt-3">
	
						<div class="col-md-12 wow fadeIn mb-3">
	
							<div class="text-center white-text">
	
								<ul class="list-unstyled ">
	
									<li>

									<h1 class="display-4 mt-md-5 mt-lg-0 mb-5 font-weight-bold white-text wow fadeIn"
										data-wow-delay="0.3s">

										<strong>

                                            {{$news->title_en}}


										</strong>

									</h1>

								</li>

								<li>

									<h5 class="white-text description mb-5 wow fadeIn"
                                        data-wow-delay="0.4s">                                
                                        
                                        {{$news->description_en}}


									</h5>

								</li>


							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>


</header>

<!--/.header-->


<main>


	<div class="container mt-5 mb-5 " style=" overflow-wrap: break-word !important;">


        {!!$news->content_en!!}

	</div>


</main>


@include('partials.footer')


<script>

    // object-fit polyfill run

    objectFitImages();


	/* init Jarallax */

    jarallax(document.querySelectorAll('.jarallax'));


    jarallax(document.querySelectorAll('.jarallax-keep-img'), {

        keepImg: true,

    });

</script>

</body>


</html>

