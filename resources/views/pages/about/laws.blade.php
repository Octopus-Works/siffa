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



    </style>
</head>


<body class="creative-lp">


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



    <main>

        <div class="container mt-5 mb-5">




            <div class="wow fadeIn" data-wow-delay="0.4s">

                <h1 class="text-center dark-grey-text">
                    <strong>By-Laws</strong>
                </h1>
                <hr class="w-25"> 

                <p class="text-center grey-text font-weight-bold">
                    <strong class="text-break  font-weight-400 grey-text font-weight-bold">
                        Freight Forwarders Association

                        in the Syrian Arab Republic
                        
                        Proclaimed under No. 518 of 2002
                        
                        Damascus
                        
                        Statute of Freight Forwarders Association
                        
                        Statute of Freight Forwarders.        

                    </strong>
                </p>
                <p >
                <strong >
                </strong>
            </p>
            </div>


            <div class="row">
                <div class=" col-sm-4 col-lg-3">
                    <nav id="navbar-example3" class="navbar navbar-light custom-primary-transparent flex-column mt-4 ">
                        <a class="navbar-brand custom-secondary-text" href="#">laws</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link active text-white" href="#item-1">Chapter One</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ml-3 my-1 text-white" href="#item-1-1">Item1</a>
                            </nav>
                            <a class="nav-link text-white" href="#item-2">Item2</a>
                            <a class="nav-link text-white" href="#item-3">Item3</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ml-3 my-1 text-white" href="#item-3-1">Item 3-1</a>
                                <a class="nav-link ml-3 my-1 text-white" href="#item-3-2">Item 3-2</a>
                            </nav>
                        </nav>
                    </nav>
                </div>

                <div class="col-sm-8 col-lg-9">
                    <div data-spy="scroll" class="scrollspy-example z-depth-1 mt-4 grey-text font-weight-bold" data-target="#navbar-example3"
                        data-offset="0">
                        <h4 id="item-1">Item 1</h4>
                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they
                            sold out
                            qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit
                            seitan
                            mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg
                            hoodie minim
                            qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson
                            aesthetic.
                            Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                        <h5 id="item-1-1">Association Name – Location – Term</h5>
                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they
                            sold out
                            qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit
                            seitan
                            mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg
                            hoodie minim
                            qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson
                            aesthetic.
                            Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>

                        <h4 id="item-2">Item 2</h4>
                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they
                            sold out
                            qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit
                            seitan
                            mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg
                            hoodie minim
                            qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson
                            aesthetic.
                            Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                        <h4 id="item-3">Item 3</h4>
                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they
                            sold out
                            qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit
                            seitan
                            mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg
                            hoodie minim
                            qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson
                            aesthetic.
                            Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                        <h5 id="item-3-1">Item 3-1</h5>
                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they
                            sold out
                            qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit
                            seitan
                            mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg
                            hoodie minim
                            qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson
                            aesthetic.
                            Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                        <h5 id="item-3-2">Item 3-2</h5>
                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they
                            sold out
                            qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit
                            seitan
                            mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg
                            hoodie minim
                            qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson
                            aesthetic.
                            Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>










    @include('partials.footer')

</body>

</html>
