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


<body class="authorpage-v2">


    <!--Main Navigation-->
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
										President of the Association Letter</h1>
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



  <!-- Main Layout -->
  <main>

		<div class="container-fluid mt-md-0 mt-5 mb-5">
	
		  <!-- Grid row -->
		  <div class="row" style="margin-top: -75px;">
	
			<!-- Grid column -->
			<div class="col-md-12 px-lg-5">
			  <!-- Card -->
			  <div class="card pb-5 mx-md-3">
				<div class="card-body">
	
				  <div class="container">
	
						<h2 class="h1-responsive font-weight-light my-5 text-center ">
								President of the Association Letter
									<span class="custom-secondary-text"><br><small><small>SIFFA</small></small></span>
								</h2>
								<hr style="width:50%">
	
					<!-- Grid row -->
					<div class="row pt-lg-5 pt-3">
	
					  <!-- Grid column -->
					  <div class="col-md-4 mb-3">
						<img src="https://mdbootstrap.com/img/Photos/Others/model1.jpg" class="img-fluid z-depth-1">
					  </div>
					  <!-- Grid column -->
	
					  <!-- Grid column -->
					  <div class="col-md-7 ml-xl-5">
						<form>
	
						  <!-- Grid row -->
						  <div class="row">
	
							<p class="dark-grey-text article">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
							  accusantium
							  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
							  veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
							  enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
							  sed quia consequuntur magni dolores eos qui ratione voluptatem. </p>
	
							<blockquote class="blockquote">
							  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
								erat a ante.</p>
							  <footer class="blockquote-footer">Someone famous in
								<cite title="Source Title">Source Title</cite>
							  </footer>
							</blockquote>
	
							<p class="dark-grey-text article"> Ut enim ad minima veniam, quis nostrum exercitationem ullam
							  corporis suscipit
							  laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel
							  eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
							  consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
	
						  </div>
						  <!-- Grid row -->
	
						  <!-- Grid row -->
						  <div class="row mb-2 mt-2">
	
							<li class="dark-grey-text article list-unstyled">
							  <strong>Nulla volutpat aliquam velit:</strong>
							  <ul>
								<li>Phasellus iaculis neque</li>
								<li>Purus sodales ultricies</li>
								<li>Vestibulum laoreet porttitor sem</li>
								<li>Ac tristique libero volutpat at</li>
							  </ul>
							</li>
	
						  </div>
						  <!-- Grid column -->
	
					  </div>
					  <!-- Grid Column -->
	
					</div>
	
				  </div>
	
				</div>
				<!-- Card -->
			  </div>
			  <!-- Grid column -->
	
			</div>
			<!-- Grid row -->
		  </div>
	
		</div>
	  </main>
	  <!-- Main Layout -->


{{-- 
	<div class="container">



        <h2 class="h1-responsive font-weight-light my-5 text-center ">
            President of the Association Letter
				<span class="grey-text"><br><small><small>SIFFA</small></small></span>
			</h2>
			<hr style="width:50%">

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
 
								</span></p>
		
							</div>
		
						</div>
						<!-- /.First row -->
		

						<hr>
						<!-- First row -->
		
                    </section>

	
	</div>

 --}}

		<!--Second container-->

</main>




</div>





@include('partials.footer')

</body>

</html>

















