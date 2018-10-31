
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <title>BreakMech:Mechanics at your footstep</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <!--link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700"-->
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="style.default.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>
        nav.navbar {
                background-color: black;
            }
            
            .img {
                max-width: 50%;
            }
    </style>
    <style>
            /* Always set the map height explicitly to define the size of the div
           * element that contains the map. */
            #map {
                height: 100%;
            }
    </style>
</head>

<body>
    <div id="box1" class="home">
        <center>
            <img src="logo.png" class="col-lg-5 mx-auto">
        </center>
    </div>
    <!-- intro end-->
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-responsive col-sm-12">

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i
                    class="fa fa-bars"></i></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#intro" class="nav-link link-scroll">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link link-scroll">About </a></li>
                    <li class="nav-item"><a href="#services" class="nav-link link-scroll">Services</a></li>
                    <li class="nav-item"><a href="#text" class="nav-link link-scroll">Idea</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-scroll" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Mechs Join!</a></li>
                    
                            <div id="id01" class="modal">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <form class="modal-content" action="add_items.php"">
                                <div class="container">
                                    <center><img src="logo.png" class="col-lg-5 mx-auto"></center>
                                    <hr>
                                    
                                    <label for="name"><b>Name</b></label>
                                    <input type="text" placeholder="Enter Name" name="name" required>

                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="email" required>

                                    <label for="contact number"><b>Contact Number</b></label>
                                    <input type="text" placeholder="Enter Contact Number" name="number" required>

                                    <label for="Address"><b>Address</b></label>
                                    <input type="text" placeholder="Enter address" name="address" required>

                                    <label for="Address"><b>Locality</b></label>
                                    <input type="text" placeholder="Enter Locality" name="locality" required>

                                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Policy</a>.</p>

                                    <div class="clearfix">
                                        <button type="submit" class="btn btn-outline-primary"">Sign Up</button>
                                        <button type="
                                            button" onclick="document.getElementById('id01').style.display='none'"
                                            class="btn btn-outline-primary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <script>
                        // Get the modal
                        var modal = document.getElementById('id01');

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                            modal.style.display = "none";
                            }
                        }
                        </script>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--intro-->
    <section id="intro" class="text" style="background-color: #eee">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h3 class="heading">Tell us your location</h3>
                    <p class="lead">We find you the best mechanics in the area.</p>
                    <p>It can't be more easier than this to find mehanics, just tell us your location of breakdown and
                        kaboom we are there for you</p>
                    <p>Never forget to make your feedbacks, it's what drives us closer to perfection</p>
                </div>
                <div class="col-lg-6 col-sm-12"">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro end-->
    <!-- about-->
    <section id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <h3 class="heading">About Us</h3>
                                <p>
                                    <h5>ABHINANDAN PURKAIT</h5>
                                </p>
                            </div>
                            <div class="col-lg-5 mx-auto">
                                <p><img src="mypic.jpg" alt="" class="img rounded-circle img-responsive"></p>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- Services end-->

    <!-- Services-->
    <section id="services" style="background-color: #eee">
        <div class="container">
            <div class="row services">
                <div class="col-lg-12">
                    <h2 class="heading">Services</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="icon"><i class="fa fa-car"></i></div>
                                <h4>Car Mechanics</h4>
                                <p>First website to provide mechanics at doorstep</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Services end-->
    <!-- text page-->
    <section id="text" class="text-page section-inverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="heading">Our Idea</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p>This vehicle management system is fully maintained website where users can search for
                                automobile mechanics related to their
                                location on the case of breakdown. They can even search for nearby hotels if they need.
                                After their service is over they can
                                provide feedbacks regarding the service which will be recorded and thus will be managed
                                by the admin.</p>
                            <p>
                                <h4>Admin</h4>
                            </p>
                            <p>
                                a. Login: Admin need to login with valid login credentials.
                                b. View Mechanics: Admin can view the registered mechanics with their details and has
                                the access to allow or block a mechanics.
                                c. View Users: Admin can view all the registered user details.
                                d. View Feedback: Admin can view all the feedback given by the user and mechanic and
                                based on it they can change.
                            </p>

                        </div>
                        <div class="col-md-6">
                            <p>
                                <h4>Mechanic</h4>
                            </p>
                            <p>
                                a. Register: Mechanics can register with all their information.
                                b. Login: Registered mechanics will be provided access to login only if the Admin will
                                allow or block.
                                c. View Request: Mechanics can view the request which is sent by the user.
                            </p>
                            <p>
                                <h4>User</h4>
                            </p>
                            <p>
                                a. Search Mechanics: User can search for local mechanics on the basis of their
                                locations.
                                b. Search Hotels: User can search hotels in the vicinity and check their ratings, if
                                they want to book, it will be redirected to booking websites.
                                c. Call Mechanic: On selection of the mechanics, the user can send the request to the
                                respective mechanic.
                                d. Report: The user can report if the mechanic doesn�t turn up on time.
                                e. Feedback: User can give their feedback accordingly.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- text page end-->
    <!-- contact-->
    <section id="contact" style="background-color: #fff;" class="text-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="heading">Contact</h2>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <form id="contact-form" method="post" action="#" class="contact-form">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Your firstname *</label>
                                                <input type="text" name="name" placeholder="Enter your firstname"
                                                    required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="surname">Your lastname *</label>
                                                <input type="text" name="surname" placeholder="Enter your  lastname"
                                                    required="required" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="surname">Your email *</label>
                                        <input type="email" name="email" placeholder="Enter your  email" required="required"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname">Your message for us *</label>
                                        <textarea rows="4" name="message" placeholder="Enter your message" required="required"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" name="name" value="Send message" class="btn btn-outline-primary btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p>
                                <h4>Feel free to share your feelings with us.</h4>
                            </p>
                            <p>
                                <h4>Your Opinions Does Matter.</h4>
                            </p>
                            <p class="social"><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a><a
                                    href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a><a href="#"
                                    title="" class="gplus"><i class="fa fa-google-plus"></i></a><a href="#" title=""
                                    class="instagram"><i class="fa fa-instagram"></i></a><a href="#" title="" class="email"><i
                                        class="fa fa-envelope"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer style="background-color: #111;">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">&copy;2018 BreakMech</p>
                </div>
                <div class="col-md-6">
                    <p class="credit mb-md-0 text-center text-md-right">Abhinandan Purkait Creations</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 16
            });
            infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('We Found You !');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNUYrPVjWXvpaTDst1cl7is6aWhRXmAYI&callback=initMap&sensor=true">
    </script>
    <!-- JavaScript files-->
    <script src="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/vendor/popper.js/umd/popper.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/blackandwhite/2-0-0/js/front.js"></script>
</html>