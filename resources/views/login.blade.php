<!DOCTYPE html>
<html class="full-height">
    <head>
        <title></title>
        @include('includes/head')
        <style type="text/css">
        .intro-2 {
        background: url("http://mdbootstrap.com/img/Photos/Others/images/91.jpg")no-repeat center center;
        background-size: cover;
        }
        .top-nav-collapse {
        background-color: #3f51b5 !important;
        }
        .navbar:not(.top-nav-collapse) {
        background: transparent !important;
        }
        @media (max-width: 768px) {
        .navbar:not(.top-nav-collapse) {
        background: #3f51b5 !important;
        }
        }
        .hm-gradient .full-bg-img {
        background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
        background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%)));
        background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
        }
        .card {
        background-color: rgba(126, 123, 215, 0.2);
        }
        .md-form .prefix {
        font-size: 1.5rem;
        margin-top: 1rem;
        }
        .md-form label {
        color: #ffffff;
        }
        h6 {
        line-height: 1.7;
        }
        @media (max-width: 740px) {
        .full-height,
        .full-height body,
        .full-height header,
        .full-height header .view {
        height: 1040px;
        }
        }
        </style>
    </head>
    <body>
        <!--Main Navigation-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <strong>MDB</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>
            <!--Intro Section-->
            <section class="view intro-2 hm-gradient">
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-7 mt-5">
                                <div class="col-md-6 text-center text-md-left mb-5">
                                    <div class="white-text">
                                        <h1 class="h1-responsive font-bold wow fadeInLeft" data-wow-delay="0.3s">Sign in right now! </h1>
                                        <hr class="hr-light mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                                        <h6 class="wow fadeInLeft" data-wow-delay="0.3s"></h6>
                                        <br>
                                        <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-5">
                                    <!--Form-->
                                    <div class="card wow fadeInRight" data-wow-delay="0.3s" style="width:25em; background-color: rgba(126, 123, 215, 0.2);">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h3 class="white-text">
                                                <i class="fa fa-user white-text"></i> Sign in:</h3>
                                                <hr class="hr-light">
                                            </div>
                                            <!--Body-->
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix white-text"></i>
                                                <input type="text" id="form2" class="form-control">
                                                <label for="form2">Your email</label>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-lock prefix white-text active"></i>
                                                <input type="password" id="form4" class="form-control">
                                                <label for="form4">Your password</label>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-indigo">Sign in</button>
                                                <hr class="hr-light mb-3 mt-4">
                                                <div class="inline-ul text-center d-flex justify-content-center">
                                                    <a class="icons-sm tw-ic">
                                                        <i class="fa fa-twitter white-text"></i>
                                                    </a>
                                                    <a class="icons-sm li-ic">
                                                        <i class="fa fa-linkedin white-text"> </i>
                                                    </a>
                                                    <a class="icons-sm ins-ic">
                                                        <i class="fa fa-instagram white-text"> </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!--Main Navigation-->
        @include('includes/head')
    </body>
</html>