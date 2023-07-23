<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel paradise</title>

    <?php require('inc/links.php') ?>

    <!-- swiperjs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

</head>
<body>
    
    <section id="title">
        <div class="main-body-section-div relative text-white" style="background: url('images/img.jpg') center center;">
            <div class="container-fluid">
            
                <!--navbar-->
                <?php require('inc/header.php'); ?>
    
                <div class="card ">
                    <div class="card-header">BOOK A ROOM ONLINE</div>
                    <div class="card-body">
                        <h4 class="cc">Arrival</h4>
                        <div class="card-text text-muted"><input class="card-text" type="date"></div><br>
                        <h4 class="cc">Departure</h4>
                        <div class="card-text text-muted"><input class="card-text" type="date"></div><br>
                        <button id="book-now">BOOK NOW
                            <div class="star-1">
                              <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                            </div>
                            <div class="star-2">
                              <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                            </div>
                            <div class="star-3">
                              <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                            </div>
                            <div class="star-4">
                              <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                            </div>
                            <div class="star-5">
                              <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                            </div>
                            <div class="star-6">
                              <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                            </div>
                          </button>
                    </div>
                </div>
        </div>
        
    </section>

    <!--About Us-->
    <div id="about">
        <div class="row aboutrow">
            <div class="col-1 col-lg-6 col-md-6 col-sm-12">
                <h5>ABOUT US</h5>
                <h1>Most Relaxing Place</h1>
                <p>Hotel Paradise is a luxurious hotel that boasts beautiful, modern rooms with stunning views of the surrounding area. Guests can indulge in a range of amenities, including a spa, fitness center, and restaurants serving delicious cuisine. The hotel's stunning outdoor pool is perfect for relaxing and soaking up the sun. Business travelers can take advantage of state-of-the-art conference facilities, while families will appreciate the variety of activities for children. With a prime location and exceptional service, Hotel Paradise is the perfect destination for a memorable vacation or business trip.</p>
                <a href="read_more.php"><button class="my-btn">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Explore me
                </button></a>
            </div>
    
            <div class="col-2 col-lg-6 col-md-6 col-sm-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://th.bing.com/th/id/R.8eb621a27c1cd8bff9e4c791ad0e05cc?rik=e1MFd61rLNdvDA&riu=http%3a%2f%2fsecure.s.forbestravelguide.com%2fimg%2fproperties%2fPropertyImage_GatewayCanyonsResort_Hotel_Exterior_EveningPool_CreditNobleHouseHotelsandResorts.jpg&ehk=FopCI0B%2b7ageZDJVKMelGN3RzyznHhdnY8exRCPM0C0%3d&risl=&pid=ImgRaw&r=0" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://www.standard.ee/wp-content/uploads/2021/06/the-grand-madeleine-bar-scaled.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://i0.wp.com/anniewearsit.com/wp-content/uploads/2017/11/IMG_0987.jpg?w=2868&h=1912&ssl=1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://th.bing.com/th/id/R.a7aead34054c515653368e9e61678473?rik=5cqj58ciaNmxGw&riu=http%3a%2f%2fwww.kronenhof.com%2ffileadmin%2f_processed_%2f6%2fb%2fcsm_ghk_grand_restaurant_sommer_2016__3__24ff615bb1.jpg&ehk=nJeWl5ZNl1nbDKqY3tanta8SreEHxpDmoVH3gf5z8JM%3d&risl=&pid=ImgRaw&r=0" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </div>
    </div>

    <!-- Rooms -->
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Rooms</span>
                    <h2 class="mb-4">Featured Rooms</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch aos-init aos-animate" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
                    <div class="room-wrap d-md-flex flex-md-column-reverse">
                        <a href="room-single.html" class="img img-room" style="background-image: url('https://photos.mandarinoriental.com/is/image/MandarinOriental/dmo-Seven-suites-04-Dubai');">
                        </a>
                        <div class="text p-5 text-center">
                            <h3><a href="room-single.html">Suite Room</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch aos-init aos-animate" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="room-wrap">
                        <a href="room-single.html" class="img img-room" style="background-image: url('https://th.bing.com/th/id/OIP.lF5VK1jCX1Jq0Im8ST1FFgHaE8?pid=ImgDet&rs=1');">
                        </a>
                        <div class="text p-5 text-center">
                            <h3><a href="room-single.html">Family Room</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch aos-init aos-animate" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                    <div class="room-wrap d-md-flex flex-md-column-reverse">
                        <a href="room-single.html" class="img img-room" style="background-image: url('https://images.rosewoodhotels.com/is/image/rwhg/hi-hgv-26330925-rhgmodelbedroom-1');">
                        </a>
                        <div class="text p-5 text-center">
                            <h3><a href="room-single.html">Deluxe Room</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="mb-0 mt-2"><span class="me-3 price">$450 <small>/ night</small></span><a href="#" class="btn-custom">Book Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--awards-->
    <div id="awards">
        <h1>AWARDS</h1>
        <div class="row awardrow">
            <div class="col col-lg-4">
                <i class="fa fa-sharp fa-solid fa-award"></i>
                <h4>Expert Choice Award by Trip Expert (Feb 2019)</h4>
            </div>
            <div class="col col-lg-4">
                <i class="fa fa-solid fa-star"></i>
                <h4>TrustYou  Top Spot</h4>
            </div>
            <div class="col col-lg-4">
                <i class="fa fa-duotone fa-crown"></i>
                <h4>Times Food & Nightlife Awards 2019</h4>
            </div>
        </div>
    </div>

    <!--services-->
    <div id="services">
        <h1 class="tour">OUR HOTEL TOUR </h1>
        <h5><i><b>WALK THROUGH THE CORRIDORS OF THE TIMELESS LUXURY AND HERITAGE SINCE 1903.</b></i></h5>
        <div class="row hotelrow">
            <div class="col col-lg-4">
                <div class="center">
                    <div class="property-card">
                      <a href="#">
                        <div class="property-image" style="background-image:url('images/dmo-The-worlds-most-romantic-hotel-suites-dubai-royal-penthouse-bedroom.webp');">
                          <div class="property-image-title">
                            <h5 class="propertytitle">Luxury Rooms</h5>
                          </div>
                        </div></a>
                      <div class="property-description">
                        <h5> Luxury Rooms </h5>
                        <p class="tourpara">These cozy rooms located in the historic Palace Wing are the gateway to a memorable experience. Perfect for meditation, these  rooms offers you complete tranquillity.</p>
                      </div>
                    </div>
                  </div>

            </div>

            <div class="col col-lg-4">
                <div class="center">
                    <div class="property-card">
                      <a href="#">
                        <div class="property-image" style="background-image:url('images/romantic-suites-with-private-pool-in-dominican-republic-1.jpg');">
                          <div class="property-image-title">
                            <h5 class="propertytitle">Swimming Pools</h5>
                          </div>
                        </div></a>
                      <div class="property-description">
                        <h5> Swimming Pools </h5>
                        <p class="tourpara">Swimming in your own pool gives you a low-impact, relaxing way to exercise, which is important if you want to live a longer, healthier life.</p>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col col-lg-4">
                <div class="center">
                    <div class="property-card">
                      <a href="#">
                        <div class="property-image" style="background-image:url('images/aria-nightlife-jewel-main-room.jpg');">
                          <div class="property-image-title">
                            <h5 class="propertytitle">Party Hall</h5>
                          </div>
                        </div></a>
                      <div class="property-description">
                        <h5> Party Hall </h5>
                        <p class="tourpara">Sometimes all you need to relax is DJ party with your fellow ones .we got it covered with our lavicious party hall where you can dance , enjoy and drink.</p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>    


    <!-- pure counter -->
    <section id="class">
        <div class="row numberrow">
            <div class="col-lg-3">
                <h2>Happy Guests</h2>
                <h3><span
                    data-purecounter-start="10000"
                    data-purecounter-end="48000"
                    data-purecounter-once="true"
                    class="purecounter">0</span>+</h3>
            </div>
            <div class="col-lg-3">
                <h2>Rooms</h2>
                <h3><span
                    data-purecounter-start="200"
                    data-purecounter-end="600"
                    data-purecounter-once="true"
                    class="purecounter">0</span>+</h3>
            </div>
            <div class="col-lg-3">
                <h2>Staff</h2>
                <h3><span
                    data-purecounter-start="500"
                    data-purecounter-end="2000"
                    data-purecounter-once="true"
                    class="purecounter">0</span>+</h3>
            </div>
        </div>
    </section>


    <!--contact page-->
    <div id="contact">
        <h1>CONTACT US<span class="underscore">_</span></h1>
        <div class="row aboutrow">
            <div class="col-md-6">
               <form action="mailto:harshitag374@gmail.com" method="post" enctype="text/plain" id="request" class="main_form">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea"cols="50" rows="5" placeholder="Message" type="type" message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                            <button id="send_btn">
                                <div class="svg-wrapper-1">
                                  <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                      <path fill="none" d="M0 0h24v24H0z"></path>
                                      <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                    </svg>
                                  </div>
                                </div>
                                <span>Send</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--BLOG-->
    <div id="blog" style="background-image: url('images/main.jpg');background-size:cover;">
        <h1 class="blog-head">BLOG</h1>
        <div class="row">
            <div class="col col-lg-4">
                <h3> “Experience true paradise at Hotel Paradise, where luxury meets comfort. Our attentive staff will ensure that your every need is met for a memorable stay in paradise. Book your stay at Hotel Paradise today.”</h3>
            </div>
            <div class="col col-lg-8">
                <div class="row row-1">
                    <div class="col col-lg-6">
                        <img class="blog-img" src="images/1.png">
                    </div>
                    <div class="col col-lg-6">
                        <img class="blog-img" src="images/2.jpg">
                    </div>
                </div>
                <div class="row row-1">
                    <div class="col col-lg-6">
                        <img class="blog-img" src="images/four-seasons-hotel-seoul_photo-via-booking-dot-com.webp">
                    </div>
                    <div class="col col-lg-6">
                        <img class="blog-img" src="images/4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
     

    <?php require('inc/footer.php')?>


     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

     <script src="index.js"></script>

     <style>
        @media screen and (max-width:500px){
            .swiper-cube{
                width:200px;
                height:200px;
                margin-top: -4rem;
                left:5%;
                margin-bottom:5rem;
            }
        }
     </style>

</body>
</html>