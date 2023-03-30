<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>CMS</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/themify-icons.css')}}">
    <!-- Bootstrap + Steller main styles -->
    <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/homePage.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span style="font-size:48px; font-width:bold; color:#5050B2;">CMS</span>
                <!-- <img src="{{asset('assets/images/logo1.png')}}" alt=""> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home" style="color:#5050B2;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn rounded ml-4" style="background-color: #5050B2; color:#fff;" href="{{ url('admin/login') }} ">Admin Login</a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navibation -->

    <!-- Page Header -->
    <header class="header" id="home"  style="height:420px; background-color:#F5F5F5;">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">Welcome to</h6>
                <h6 class="title" style="font-size:45px;">College Monitoring System (CMS)</h6>
                <p>National University, Bangladesh</p>

                <div class="buttons pt-3">
                    <a class="btn rounded" href="{{ route('login') }}" style="background-color: #5050B2; color:#fff; border:1px solid red; width:300px;">College Login</a>
                    <!-- <button class="btn btn-dark rounded">DOWNLOAD IINSTRUCTION</button> -->
                </div>      
            </div>              
            <div class="img-holder">
                <img src="{{asset('assets/images/logo1.png')}}" alt="" style=" width: 72%;">
            </div>      
        </div>  

        <!-- Header-widget -->
        <div class="widget">
            <div class="widget-item">
                <h2>1240000</h2>
                <p>Number of Students</p>
            </div>
            <div class="widget-item">
                <h2>2760</h2>
                <p>Number of Colleges</p>
            </div>
            <div class="widget-item">
                <h2>40000</h2>
                <p>Number of Teachers</p>
            </div>
        </div>
    </header>
    <!-- End of Page Header -->
    
    <!-- About section -->
    <section id="about" class="section mt-3" style="height:500px;">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="col-md-3">
                    <img src="{{asset('assets/images/CMS_ALL_NEW_BLACK.gif')}}" alt="" class="img-thumbnail mb-4">
                </div>
                <div class="pl-md-4 col-md-9">
                    <h6 class="title">Introduction</h6>
                    <!-- <p class="subtitle">UI/UX Designer</p> -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, pariatur, aperiam aut autem voluptas odit. Odio ducimus delectus totam sed aliquam sequi praesentium mollitia, illum repudiandae quidem quod, magni magnam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, eius, nam. Quo praesentium qui temporibus voluptatum, facilis aliquid eligendi fugiat beatae neque inventore non. Laborum repellendus consequatur ullam voluptatum asperiores.</p>
                    <button class="btn btn-primary rounded mt-3">READ MORE</button>                   
                </div>
            </div>
        </div>
    </section>

       <!-- Hire me section -->
       <!-- <section class="bg-gray p-0 section" style="background-color:#F5F5F5;">
        <div class="container">
            <div class="card bg-primary">
                <div class="card-body text-light">
                    <div class="row align-items-center">
                        <div class="col-sm-9 text-center text-sm-left">
                            <h5 class="mt-3">Login to</h5>
                            <p class="mb-3">College Monitoring System (CMS)</p>
                        </div>
                        <div class="col-sm-3 text-center text-sm-right">
                            <a class="btn btn-light rounded" href="{{ url('college/login') }}">College Login</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>       -->
    <!-- End od Hire me section. -->

    <!-- Service section -->
    <section id="service" class="section" style="background-color:#F5F5F5;">
        <div class="container text-center">
            <h6 class="subtitle">Service</h6>
            <h6 class="section-title mb-4">What CMS Will Do</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row">
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-crown"></i>
                            <h5>Monitor Colleges</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-desktop"></i>
                            <h5>Communication</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-mobile"></i>
                            <h5>Digitalize Processing</h5>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-bar-chart"></i>
                            <h5>SEO</h5>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End of Sectoin -->

      <!-- Blog Section -->
      <section id="blog" class="section" style=" ">
        <div class="container text-center">
            <h6 class="subtitle">Support</h6>
            <h6 class="section-title mb-4">Call for Help!</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row text-left">
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">College Monitoring Dpt.</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">ICT Dpt.</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                      
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Admin CMS</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testmonial Section -->
    <section id="testmonial" class="section" style="height:400px; background-color:#F5F5F5;">
        <div class="container text-center">
            <h6 class="subtitle">Testmonial</h6>
            <h6 class="section-title mb-4">What People Say About CMS</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-1.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Emma Re</h1>
                                <h1 class="subtitle">Graphic Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-2.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">James Bert</h1>
                                <h1 class="subtitle">Web Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-3.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Michael Abra</h1>
                                <h1 class="subtitle">Web Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of testmonial section -->

  

    <!-- Contact Section -->
    <section id="contact" class="position-relative section" style="height:880px; margin-top:-130px;">
        
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.283556676228!2d90.37794331448761!3d23.950411187024105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4ac7e91b29f%3A0xe707d27208e45689!2sNational%20University%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1674066665403!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>      
    </section>
    <!-- End of Contact Section -->

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.nu.ac.bd" target="_blank">National University, Bangladesh.</a></p>
                </div>
                <div class="col-sm-6">
                    <div class="socials">
                        <a class="social-item" href="javascript:void(0)"><i class="ti-facebook"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-google"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-github"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <!-- End of page footer -->
	
	<!-- core  -->
    <script src="{{asset('assets/js/selectBox/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('assets/js/selectBox/bootstrap.bundle.js')}}"></script>
    <!-- bootstrap 3 affix -->
    <script src="{{asset('assets/js/selectBox/bootstrap.affix.js')}}"></script>

    <!-- steller js -->
    <script src="{{asset('assets/js/selectBox/steller.js')}}"></script>
   

</body>
</html>
