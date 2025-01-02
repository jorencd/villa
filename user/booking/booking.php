<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now - Villa Solaria</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../user/booking/booking.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="../../user/booking/booking.js"></script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a href="../../user/index/index.php"><i class="bi bi-arrow-left-short fs-1 text-light"></i></a>
            <a class="navbar-brand text-light" href="../../user/index/index.php">Villa Solaria</a>
            <div></div>
        </div>
    </nav>

    <!-- NAVLINKS -->
    <div class="container-fluid p-3 mt-5 pt-5  d-flex justify-content-between">
        <div>
            <ul class="navbar-nav d-flex flex-row justify-content-around">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../user/booking/booking.php">BOOK</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../user/my-booking/my-booking.php">MY BOOKING</a>
                </li>
            </ul>
        </div>

        <!-- LOG IN BUTTON -->
        <div class=" d-flex flex-row justify-content-center align-items-center">
            <div class="dropdown">
                <button class="btn btn-outline-dark text-uppercase rounded-circle p-2 me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    jm
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-capitalize" href="#">jorence mendoza</a></li>
                    <li><a class="dropdown-item text-capitalize" href="../../user/update-profile/update-profile.php">update profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-capitalize" href="../../user/authentication/authentication.php">log out</a></li>
                </ul>
            </div>
            <a href="../../user/authentication/authentication.php">
                <button class="btn btn-outline-secondary" style="font-family: Geometria; font-weight:400;" type="button">Log In</button>
            </a>
        </div>
    </div>

    <!-- HEADING -->
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-uppercase" style="font-family: Geometria; font-weight:bold; font-size: 54px;">book your stay</h1>
        <p class="text-uppercase opacity-75">experience something new</p>
    </div>

    <!-- IMAGE AND DATE SELECTION -->
    <div class="container-fluid p-0 position-relative">
        <img src="../../assets/image/landing-page.jpg" alt="">

        <div class="bg-light rounded shadow position-absolute top-100 start-50 translate-middle">
            <div class="row p-3 d-flex align-items-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <label for="checkin" class="text-uppercase opacity-75">check in</label>
                    <div class="custom-date-picker">
                        <input type="text" id="checkin" placeholder="dd/ mm" readonly>
                        <i class="bi bi-chevron-down d-none d-md-block"></i>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <label for="checkout" class="text-uppercase opacity-75">check out</label>
                    <div class="custom-date-picker">
                        <input type="text" id="checkout" placeholder="dd/ mm" readonly>
                        <i class="bi bi-chevron-down d-none d-md-block"></i>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button class="check-availability-btn w-100">Check Availability</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FORM  -->
    <div class="container">
        <div class="mt-5 pt-5 form-container">
            <form action="#" method="POST">
                <div class="row mt-5 mt-md-0">
                    <!-- 1st Column -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="First Name" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="room-type">Room Type</label>
                                    <select class="form-select mt-3" id="room-type" required>
                                        <option value="">Please Select</option>
                                        <option value="single">Single</option>
                                        <option value="double">Double</option>
                                        <option value="suite">Suite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="num-guests">Number of Guests</label>
                                    <input type="number" class="form-control mt-3" id="num-guests" placeholder="Enter Number" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="add-ons">Add-ons</label>
                            <select class="form-select mt-3" id="add-ons" required>
                                <option value="">Please Select</option>
                                <option value="breakfast">Breakfast</option>
                                <option value="spa">Spa</option>
                                <option value="airport">Airport Transfer</option>
                            </select>
                        </div>
                    </div>

                    <!-- 2nd Column -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control mt-3" id="email" placeholder="Your Email Address" required>
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="checkin">Check In</label>
                                    <input type="text" class="form-control mt-3" id="checkin" placeholder="Select Date" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="checkout">Check Out</label>
                                    <input type="text" class="form-control mt-3" id="checkout" placeholder="Select Date" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="facilities">Facilities</label>
                            <select class="form-select mt-3" id="facilities" required>
                                <option value="">Please Select</option>
                                <option value="pool">Swimming Pool</option>
                                <option value="gym">Gym</option>
                                <option value="wifi">Free Wi-Fi</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Message Section -->
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control mt-3 p-3" id="message" rows="3" placeholder="Write a message"></textarea>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-5">
                    <!-- Submit Button -->
                    <a href="../../user/payment/payment.php">
                        <button class="btn px-5 text-uppercase" type="button">submit</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>