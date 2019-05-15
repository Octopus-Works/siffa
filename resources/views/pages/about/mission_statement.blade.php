<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')

<style>

@media (max-width: 740px)
{
	html, body, header, .view {
	height: unset !important;
}

}

</style>
</head>


<body class="creative-lp">


    <!--Main Navigation-->
    <header>
        @include('partials.nav')
        <div class="view jarallax" style="height: 100vh;">
            <img class="jarallax-img" src="https://mdbootstrap.com/img/Photos/Others/img%20%2844%29.jpg" alt="">
            <div class="mask rgba-blue-slight">
                <div class="container flex-center text-center">
                    <div class="row mt-5">
                        <div class="col-md-12 wow fadeIn mb-3">
                            <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s">About us</h1>
                            <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn" data-wow-delay="0.4s">Siffa</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Main Navigation-->



<main>

	<div class="container">


		<hr>

		<!-- Section: About 2-->
		<section id="about" class="section about mt-5 mb-5 pb-3 wow fadeIn" data-wow-delay="0.2s">

            <div class="row pt-4 mt-5">

                <!-- Grid column -->
                <div class="col-lg-12 col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                    <!-- Secion heading -->
                    <h3 class="mb-2 dark-grey-text title font-weight-bold wow fadeIn text-center" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                        <strong>Our mission</strong>
                    </h3>

                    <!-- Description -->
                    <p align="justify" class="grey-text text-center">

                        <h6 class="feature-title title font-weight-bold dark-grey-text  spacing mt-4 mx-4">
                            <i class="fas fa-square orange-text mr-2" aria-hidden="true"></i>
                            <strong>SIFFA aims to be the driving force behind the development of the freight forwarding industry in Syria by setting the standards, 
                                protecting the interest of member freight forwarders and ensuring that Syrian freight forwarders have the capacity to participate 
                                successfully in the global trading arena.</strong>
                        </h6>

                        
                    </p>

                </div>
                <!-- Grid column -->


            </div>

		</section>
		<!-- Section: About 2-->
        <hr>
	
	</div>



		<!--Second container-->

</main>




</div>





@include('partials.footer')

</body>

</html>

