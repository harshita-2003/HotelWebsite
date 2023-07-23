<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paradise-Rooms</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paradise</title>
    
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="css/read_more.css">
</head>
<body style="background-image:url('images/img.jpg')">
    
    

    <div class="container py-4">

        <?php require('inc/header.php')?>

        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center" style="color: white;">OUR ROOMS</h2>
            <div class="h-line bg-dark"></div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size :18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size :18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none mr-2 ">
                                    <label class="form-label" for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none mr-2 ">
                                    <label class="form-label" for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none mr-2 ">
                                    <label class="form-label" for="f3">Facility three</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size :18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">

                <div class="card mb-3 shadow" style="background-color:white;margin:0; width: 100%; min-height: 30%;">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="images/simpleroom .jpg" class="img-fluid rounded" alt="">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3" style="font-family: 'RobotoDraft', 'Roboto', sans-serif;">Suite Room</h5>
                            <div class="features ms-3 mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Sofa
                                </span>
                            </div>

                            <div class="facilities ms-3 mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room Heater
                                </span>
                            </div>

                            <div class="guests ms-3 mb-2">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                   2 Children
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 my-4" style="text-align:center;">
                            <h6 class="mb-4"> ₹10,000 per Night</h6>
                            <a href="#" class="btn btn-md w-100 text-white custom-bg shadow-none mb-2" style="background-color: red;">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none" style="background-color:azure;color:black;">More Details</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 shadow" style="background-color:white;margin:0; width: 100%; min-height: 30%;">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="https://cache.marriott.com/marriottassets/marriott/MNLAP/mnlap-guestroom-0118-hor-clsc.jpg?interpolation=progressive-bilinear&" class="img-fluid rounded" alt="">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3" style="font-family: 'RobotoDraft', 'Roboto', sans-serif;">Family Room</h5>
                            <div class="features ms-3 mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <div class="facilities ms-3 mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room Heater
                                </span>
                            </div>

                            <div class="guests ms-3 mb-2">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                   4 Children
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 my-4" style="text-align:center;">
                            <h6 class="mb-4"> ₹20,000 per Night</h6>
                            <a href="#" class="btn btn-md w-100 text-white custom-bg shadow-none mb-2" style="background-color: red;">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none" style="background-color:azure;color:black;">More Details</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card mb-3 shadow" style="background-color:white;margin:0; width: 100%; min-height: 30%;">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="https://th.bing.com/th/id/R.c5843673b6d7bd6ccaa4a6cb5075dda5?rik=K3uDwdW4LMSFaA&riu=http%3a%2f%2fwww.packingmysuitcase.com%2fwp-content%2fuploads%2f2016%2f04%2faccommdation-992296_1280.jpg&ehk=0QwYSaMGPBCPvxOAlEcOxFsFzFmpjaxocF%2bwxuNcX3k%3d&risl=&pid=ImgRaw&r=0" class="img-fluid rounded" alt="">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3" style="font-family: 'RobotoDraft', 'Roboto', sans-serif;">Deluxe Room</h5>
                            <div class="features ms-3 mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Sofa
                                </span>
                            </div>

                            <div class="facilities ms-3 mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room Heater
                                </span>
                            </div>

                            <div class="guests ms-3 mb-2">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                   2 Children
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 my-4" style="text-align:center;">
                            <h6 class="mb-4"> ₹10,000 per Night</h6>
                            <a href="#" class="btn btn-md w-100 text-white custom-bg shadow-none mb-2" style="background-color: red;">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none" style="background-color:azure;color:black;">More Details</a>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>


    <?php require('inc/footer.php') ?>

</body>
</html>