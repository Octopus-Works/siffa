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



        <h2 class="h1-responsive font-weight-light my-5 text-center ">
            President of the Association Letter
				<span class="grey-text"><br><small><small>SIFFA</small></small></span>
			</h2>
			<hr style="width:50%">
		<!-- Section: Testimonials v.2 -->
		{{-- <section class="text-center my-5 "> --}}
				<section id="about" class="section py-5">

						<!-- First row -->
						<div class="row mt-5 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
		
							<!-- Place for photo -->
							<div class="col-lg-4 mb-5 flex-center">
								<div class="view z-depth-1">
									<img src="https://mdbootstrap.com/img/Photos/Others/model3.jpg" class="img-fluid z-depth-1" alt="">
								</div>
							</div>
		
							<!-- Text content -->
							<div class="col-lg-7 ml-3">
								<h3 class="font-weight-light"> President of the Association </h3>
								<h6 style="color: #af8b2e !important;" class="font-weight-light my-3">letter</h6>
		
														<hr>
								<p align="justify" class="mt-4"><span>
                                        The Syrian International Freight Forwarders Association (SIFFA) envisions to become the leading association of Freight Forwarders in Syria and the sole representative of the rights and obligations of Syrian International Freight Forwarders.
 
								</span></p>
		
							</div>
		
						</div>
						<!-- /.First row -->
		

						<hr>
						<!-- First row -->
		
                    </section>

	
	</div>



		<!--Second container-->

</main>




</div>





@include('partials.footer')

</body>

</html>

