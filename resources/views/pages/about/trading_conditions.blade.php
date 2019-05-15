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

    </style>
</head>


<body class="creative-lp">


    <!--Main Navigation-->
    <header>
        @include('partials.nav')
        <div class="view jarallax" style="height: 100vh;">
            <img class="jarallax-img" src='{{url('img/7.jpg')}}' alt="">
            <div class="mask rgba-blue-slight">
                <div class="container flex-center text-center">
                    <div class="row mt-5">
                        <div class="col-md-12 wow fadeIn mb-3  custom-primary-transparent">
                            <h1 class="display-3 mb-2 wow fadeInDown text-white font-size-0" data-wow-delay="0.3s">
                                Standard Trading Conditions</h1>
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

        <div class="container mt-5 mb-5">




            <div class="wow fadeIn" data-wow-delay="0.4s">

                <h1 class="text-center dark-grey-text">
                    <strong> Standard Trading Conditions</strong>
                </h1>
                <hr class="w-25">

                <p class="text-center grey-text font-weight-bold">
                    <strong class="text-break  font-weight-400 grey-text font-weight-bold">

                        The Customer’s attention is drawn to the Clauses hereof which exclude or limit the Company’s
                        liability and these which require the Customer to indemnify the Company in certain
                        circumstances.

                    </strong>
                </p>

            </div>


        </div>


        <section class="mt-3 mb-2 pt-5 pb-2 container">

            <!-- Section heading -->
            <h3 class="text-center title my-2 pt-2 pb-2 dark-grey-text font-weight-bold wow fadeIn"
                data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                <strong>DEFINITIONS AND APPLICATION</strong>
            </h3>

            <hr class="w-25 font-weight-bolder text-black">
            <!-- Grid row -->
            <div class="row wow fadeIn" data-wow-delay="0.4s"
                style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                <!-- Grid column -->
                <div class="col-md-12 mb-2 text-center">

                    <!--Panel-->
                    <div class="text-left">
                        <p class="feature-title title font-weight-bold dark-grey-text text-uppercase spacing mt-4 ">
                            <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                            <strong>In these Conditions:</strong>
                        </p>
                        <p class="grey-text font-weight-bold mx-2">
                            “Company” is the SFFA member trading under these Conditions and this expression includes any
                            parent subsidiary or affiliated company of the Company.
                            “Person" includes persons or any body or bodies corporate.
                            “Owner” means the Owner of the goods (including any packaging, containers or equipment) to
                            which any business concluded under these Conditions relates and the consignee or any other
                            Person who is or may become interested in or in possession or entitled to possession of
                            them.
                            “Customer” means any Person at whose request or on whose behalf the Company undertakes any
                            business or provides advice, information or services.
                        </p>
                    </div>
                    <!--/.Panel-->

                </div>
                <!-- /Grid column -->
            </div>

            <hr>
            <!-- Grid row -->
            <div class="row wow fadeIn" data-wow-delay="0.4s"
                style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                <!-- Grid column -->
                <div class="col-md-12 mb-2 text-center">

                    <!--Panel-->
                    <div class="text-left">
                        <p class="feature-title title font-weight-bold dark-grey-text text-uppercase spacing mt-4 ">
                            <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                            <strong> Subject to Sub-Paragraph:</strong>
                        </p>
                        <p class="grey-text font-weight-bold mx-2">
                            b. below, all and any activities of the Company in the course of business whether gratuitous
                            or not are undertaken subject to these Conditions.
                            c.If any legislation is compulsorily applicable to any business undertaken, these
                            Conditions, shall as regards such business, be read as subject to such legislation and
                            nothing in these Conditions shall be construed as a surrender by the Company of any of its
                            rights or immunities or as an increase of any of its responsibilities or liabilities under
                            such legislation to any extent such part shall as regards such business be overridden to
                            that extent and no further.
                        </p>
                    </div>
                    <!--/.Panel-->

                </div>
                <!-- /Grid column -->
            </div>
            <hr>
            <!-- Grid row -->
            <div class="row wow fadeIn" data-wow-delay="0.4s"
                style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                <!-- Grid column -->
                <div class="col-md-12 mb-2 text-center">

                    <!--Panel-->
                    <div class="text-left">
                        <p class="feature-title title font-weight-bold dark-grey-text text-uppercase spacing mt-4 ">
                            <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                            <strong>The Customer warrants</strong>
                        </p>
                        <p class="grey-text font-weight-bold mx-2">
                            The Customer warrants that he is either the Owner or the authorised agent of the Owner and
                            also that he has authority to accept these Conditions not only for himself but also as agent
                            for and on behalf of the Owner. </p>
                    </div>
                    <!--/.Panel-->

                </div>
                <!-- /Grid column -->
            </div>

            <hr>


            <div class="row wow fadeIn" data-wow-delay="0.4s"
                style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                <!-- Grid column -->
                <div class="col-md-12 mb-2 text-center">

                    <!--Panel-->
                    <div class="text-left">
                        <p class="feature-title title font-weight-bold dark-grey-text text-uppercase spacing mt-4 ">
                            <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                            <strong> authorizing the Customer</strong>
                        </p>
                        <p class="grey-text font-weight-bold mx-2">
                            In authorizing the Customer to enter into any contract with the company and/or in accepting
                            any document issued by the company in connection with such Contract, the Owner irrevocably
                            accepts these Conditions for themselves and their agents and for any parties on whose behalf
                            they or their agents may act, and in particular but without prejudice to the generality of
                            this Clause, they accept that the Company shall have the right to enforce against them
                            jointly and severally any liability of the Customer under these Conditions or to recover
                            from them any sums to be paid to the Company by the Customer which upon proper demand have
                            not been paid.
                    </div>
                    <!--/.Panel-->

                </div>
                <!-- /Grid column -->
            </div>

            <hr>








            <div class="row wow fadeIn" data-wow-delay="0.4s"
                style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                <!-- Grid column -->
                <div class="col-md-12 mb-2 text-center">

                    <!--Panel-->
                    <div class="text-left">
                        <p class="feature-title title font-weight-bold dark-grey-text text-uppercase spacing mt-4 ">
                            <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                            <strong>The Company</strong>
                        </p>
                        <p class="grey-text font-weight-bold mx-2">
                            a. Subject to Clauses 13 and 14 below, the Company shall be entitled to procure any or all
                            of its services as an agent or to provide these services as a principal.
                            b. The offer and acceptance of an inclusive price for the accomplishment of any service or
                            services shall not itself determine whether any such service is or services are to be
                            arranged by the Company acting as agent or to be provided by the Company acting as a
                            contracting principal.
                            c. When acting as an agent the Company does not make or purport to make any contract with
                            the Customer for the carriage, storage, packing or handling of any goods nor for any other
                            physical service in relation to them and acts solely on behalf of the Customer in securing
                            services by establishing Contracts with third parties so that direct contractual
                            relationships are established between the Customer and such third parties.
                            d. The Company shall on demand by the Customer provide evidence of any Contract entered into
                            as agent for the Customer. Insofar as the Company may be in default of this obligation, it
                            shall be deemed to have contracted with the Customer as a principal for the performance of
                            the Customer’s instructions.
                    </div>
                    <!--/.Panel-->

                </div>
                <!-- /Grid column -->
            </div>

            <hr>



            <div class="row wow fadeIn" data-wow-delay="0.4s"
                style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                <!-- Grid column -->
                <div class="col-md-12 mb-2 text-center">

                    <!--Panel-->
                    <div class="text-left">
                        <p class="feature-title title font-weight-bold dark-grey-text text-uppercase spacing mt-4 ">
                            <i class="fas fa-square custom-secondary-text mr-2" aria-hidden="true"></i>
                            <strong>The Customer warrants</strong>
                        </p>
                        <p class="grey-text font-weight-bold mx-2">
                            The Customer warrants that he is either the Owner or the authorised agent of the Owner and
                            also that he has authority to accept these Conditions not only for himself but also as agent
                            for and on behalf of the Owner. </p>
                    </div>
                    <!--/.Panel-->

                </div>
                <!-- /Grid column -->
            </div>

            <hr>


        </section>









    </main>










    @include('partials.footer')

</body>

</html>
