<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
        <style>

        </style>        
    </head>


    <body>
        <!--Main Navigation-->
        <header>
            @include('partials.nav')

        </header>
        <!--Main Navigation-->
        <main>


                <div style="margin-top: 180px !important;" class="container">
                        <!-- Section: Contact v.3 -->
                            <section class="contact-section my-5" >
                                <form id="form_contact">
        
                                    <!-- Form with header -->
                                    <div class="card">
                                
                                    <!-- Grid row -->
                                    <div class="row">
                                
                                        <!-- Grid column -->
                                        <div class="col-lg-8">
                                
                                        <div class="card-body form">
                                
                                            <!-- Header -->
                                            <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>
                                
                                            <!-- Grid row -->
                                            <div class="row">
                                
                                            <!-- Grid column -->
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                <input type="text" id="form-contact-name" name="name" class="form-control">
                                                <label for="form-contact-name" class="">Your name</label>
                                                </div>
                                            </div>
                                            <!-- Grid column -->
                                            <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                    <input type="text" id="form-contact-nationality" name="nationality" class="form-control">
                                                    <label for="form-contact-nationality" class="">Your nationality</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Grid row -->
                                     
                                            <div class="row">
                                                    <!-- Grid column -->
                                                     <!-- Grid column -->
                                                     <div class="col-md-12">
                                                            <div class="md-form mb-0">
                                                            <input type="text" id="form-contact-email" name="email" class="form-control">
                                                            <label for="form-contact-email" class="">Your email</label>
                                                            </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                    <!-- Grid column -->
                                                    <div class="col-md-12">
                                                        <div class="md-form mb-0">
                                                        <input type="text" id="form-contact-subject" name="subject"  class="form-control">
                                                        <label for="form-contact-subject" class="">Email subject</label>
                                                        </div>
                                                    </div>
                                                    <!-- Grid column -->
                                            </div>
                                            <!-- Grid row -->
      
                                            <!-- Grid row -->
                                
                                            <!-- Grid row -->
                                            <div class="row">
                                
                                            <!-- Grid column -->
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                <textarea id="form-contact-message" class="form-control md-textarea" name="message"  rows="3"></textarea>
                                                <label for="form-contact-message">Your message</label>
                                                <a class="btn-floating btn-lg blue"  onclick="validateForm()" >
                                                    <i class="far fa-paper-plane amber"></i>
                                                </a>
                                                <div id="status"></div>
                                                </div>
                                            </div>
                                            <!-- Grid column -->
                                
                                            </div>
                                            <!-- Grid row -->
                                
                                        </div>
                                
                                        </div>
                                        <!-- Grid column -->
                                
                                        <!-- Grid column -->
                                        <div class="col-lg-4">
                                
                                        <div style="background-color: #353B48 !important;" class="card-body contact text-center h-100 white-text">
                                
                                            <h3 class="my-4 pb-2">Contact information</h3>
                                            <ul class="text-lg-left list-unstyled ml-4">
                                            <li>
                                                <p><i class="fas fa-map-marker-alt pr-2 amber-text"></i>Marjeh Square, Damascus Tower, 7th Floor, Suite No. 12</p>
                                            </li>
                                            <li>
                                                <p><i class="fas fa-phone pr-2 amber-text"></i>+963 11 231 6166</p>
                                            </li>
                                            <li>
                                                <p><i class="fas fa-envelope pr-2 amber-text"></i>info@syffa.com</p>
                                            </li>
                                            </ul>
                                            <hr class="hr-light my-4">
                                            <ul class="silver-text list-inline text-center list-unstyled">
                                            <li class="silver-text list-inline-item">
                                                <a class="silver-text p-2 fa-lg tw-ic">
                                                <i class="silver-text fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="silver-text list-inline-item">
                                                <a class="silver-text p-2 fa-lg li-ic">
                                                <i class="silver-text fab fa-linkedin-in"> </i>
                                                </a>
                                            </li>
                                            <li class="silver-text list-inline-item">
                                                <a class="silver-text p-2 fa-lg ins-ic">
                                                <i class="silver-text fab fa-instagram"> </i>
                                                </a>
                                            </li>
                                            </ul>
                                
                                        </div>
                                
                                        </div>
                                        <!-- Grid column -->
                                
                                    </div>
                                    <!-- Grid row -->
                                
                                    </div>
                                    <!-- Form with header -->
                                </form>
                        </section>
                                <!-- Section: Contact v.3 -->
                    </div>            
 
        </main>
        @include('partials.footer')
        <script>
            //parllax
            // object-fit polyfill run
                objectFitImages();

                /* init Jarallax */
                jarallax(document.querySelectorAll('.jarallax'));

                jarallax(document.querySelectorAll('.jarallax-keep-img'), {
                    keepImg: true,
                });
           //
                function validateForm() {
                    console.log("test")
                var name =  document.getElementById('form-contact-name').value;
                if (name == "") {
                    $('#status').css("color", "red");
                    document.getElementById('status').innerHTML = "Name cannot be empty";
                    return false;
                }


                var nationality =  document.getElementById('form-contact-nationality').value;
                if (nationality == "") {
                    $('#status').css("color", "red");
                    document.getElementById('status').innerHTML = "Nationality cannot be empty";
                    return false;
                }

                var email =  document.getElementById('form-contact-email').value;
                if (email == "") {
                    $('#status').css("color", "red");
                    document.getElementById('status').innerHTML = "Email cannot be empty";
                    return false;
                } else {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if(!re.test(email)){
                        $('#status').css("color", "red");
                        document.getElementById('status').innerHTML = "Email format invalid";
                        return false;
                    }
                }
                var subject =  document.getElementById('form-contact-subject').value;
                if (subject == "") {
                    $('#status').css("color", "red");
                    document.getElementById('status').innerHTML = "Subject cannot be empty";
                    return false;
                }
                var message =  document.getElementById('form-contact-message').value;
                if (message == "") {
                    $('#status').css("color", "red");
                    document.getElementById('status').innerHTML = "Message cannot be empty";
                    return false;
                }
               

                $('#status').css("color", "#4285f4");
	
                $( "#status" ).html('<div class="fa-3x"><i class="fas fa-spinner fa-spin"></i></div>');

                document.getElementById('status').innerHTML = "Sending...";

                var json = JSON.stringify(jQuery('#form_contact').serializeArray());
                console.log(json)

                $.ajax({
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },                    
                    url : "/contact",
                    type: "POST",
                    data : JSON.parse(json),
                    success: function(data, textStatus, jqXHR)
                    {
                       $('#status').css("color", "green");
                       $('#status').text("Thank you for contacting us");

                     
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                     {
                      $('#status').text(jqXHR);
                     }
                });
              
                }




              </script>        
    </body>

</html>
