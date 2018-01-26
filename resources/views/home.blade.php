<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        @include('./includes/head')
    </head>
    <body>
        @include('./includes/navbar')
        <main>
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./images/t.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/t2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/t3.jpg" alt="Third slide">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="./images/t.jpg" class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="./images/t2.png" class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="./images/t3.jpg" class="img-fluid"></li>
                </ol>
            </div>
            <!--/.Carousel Wrapper-->
            <div class="container">
                <h1 class="font-bold text-center h1 py-5">MOVIES</h1>
                <!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified indigo darken-4">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">NOW SHOWING</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">COMING SOON</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">EXCLUSIVE</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content card">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <!--Section: Products v.2-->
<section class="pb-3">

    <!--Section heading-->
    <!--Section description-->

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/ts1.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">INSIDIOUS</a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                        
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/ts2.png" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">PADDINGTON 2</a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                        
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/ts3.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">KAALAKAANDI</a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Products v.2-->
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>
        <p></p>
        <p></p>
    </div>
    <!--/.Panel 2-->
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>
        <p></p>
    </div>
    <!--/.Panel 3-->
</div>
       
       <!--Section: Products v.2-->
<section class="pb-3">

    <!--Section heading-->
    <h1 class="font-bold text-center h1 py-5">Events</h1>
    <!--Section description-->
    <p class="section-description"></p>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/event1.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">Boarding Das Tour by Vir Das (Ahmedabad)</a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                        
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/event2.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">CHAOS 2018
                                (AHMEDABAD)
                            </a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/event3.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">Mystery Rooms - A Real Life Escape Experience (Ahmedabad)</a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                        
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->


</section>
<!--Section: Products v.2-->
<section class="pb-3">

    <!--Section heading-->
    <h1 class="font-bold text-center h1 py-5">Sports</h1>
    <!--Section description-->
    <p class="section-description"></p>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/sport1.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">SBI Green Marathon</a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                       
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/sport2.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">The Color Run</a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                       
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="./images/sport3.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                        <h5></h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">FIFA 18 Ultimate Championship Road to FIFA World Cup 2018 Russia</a>
                        </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text"></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong></strong>
                        </span>
                        
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Pricing v.4-->
<section class="text-center pb-3">

    <!--Section heading-->
    <h2 class="font-bold h1 py-5">OFFERS</h2>
    <!--Section description-->
    <p class="section-description"></p>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-r">
            <!--Card-->
            <div class="card z-depth-0">

                <!--Content-->
                <div class="text-center">
                    <div class="card-body">
                        <h3>GIFTS</h3>
                        <div class="flex-center">
                            <div class="card-circle">
                                <i class="fa fa-gift indigo-text"></i>
                            </div>
                        </div>

                        <!--Price-->
                        <h2>
                            <strong></strong>
                        </h2>
                        <p class="grey-text">With GiftMyShow cards, you can gift your friends & family movie & play tickets, concert passes, whatever it is they love for their birthdays, anniversaries or simply for no reason other than how you feel about them. Pretty sweet, aint it?</p>
                        <a class="btn btn-indigo btn-rounded">Buy now</a>
                    </div>
                </div>

            </div>
            <!--Card-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-r">
            <!--Card-->
            <div class="card indigo">

                <!--Content-->
                <div class="text-center white-text">
                    <div class="card-body">
                        <h3>OFFERS</h3>
                        <div class="flex-center">
                            <div class="card-circle">
                                <i class="fa fa-snowflake-o white-text"></i>
                            </div>
                        </div>

                        <!--Price-->
                        <h2>
                            <strong></strong>
                        </h2>
                        <p>Delight yourself with crazy offers while you book your tickets. Whether its cashback, freebies or discounts you're after, there's a can't-miss bargain for every single one of you.</p>
                        <a class="btn btn-outline-white btn-rounded">View Offer</a>
                    </div>
                </div>

            </div>
            <!--Card-->
        </div>
        <!--Grid column-->

        

    </div>
    <!--Grid row-->

</section>
<!--Section: Contact v.3-->
<section class="section mb-5 pt-5">

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12">

            <!--Form with header-->
            <div class="card">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-body form">
                            <!--Header-->
                            <div class="formHeader mb-1 pt-3">
                                <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                            </div>

                            <br>

                            <form>
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form-contact-name" class="form-control">
                                                <label for="form-contact-name" class="">Your name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form-contact-email" class="form-control">
                                                <label for="form-contact-email" class="">Your email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form-contact-phone" class="form-control">
                                                <label for="form-contact-phone" class="">Your phone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form-contact-company" class="form-control">
                                                <label for="form-contact-company" class="">Your company</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="form-contact-message" class="md-textarea"></textarea>
                                            <label for="form-contact-message">Your message</label>
                                            <a class="btn-floating btn-lg blue"><i class="fa fa-send-o"></i></a>
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-body contact text-center">
                            <div class="container">
                                <div class="mb-5">
                                    <h3>Contact information</h3>
                                </div>

                                <ul class="contact-icons">
                                    <li><i class="fa fa-map-marker"></i>
                                        <p>Ahmedabad</p>
                                    </li>

                                    <li><i class="fa fa-phone"></i>
                                        <p>+ 01 234 567 89</p>
                                    </li>

                                    <li><i class="fa fa-envelope"></i>
                                        <p>hello@example.com</p>
                                    </li>
                                </ul>

                                <hr class="hr-light mb-4 mt-4">

                                <ul class="inline-ul text-center list-unstyled">
                                    <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a></li>
                                    <li><a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            <!--/Form with header-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Contact v.3-->
<!--Section: Pricing v.4-->
<!--Section: Products v.2-->
<!--Section: Products v.2-->                    
            </div>
        </main>
        @include('./includes/scripts')
        
    </body>
</html>