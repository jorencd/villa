<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking - Villa Solaria</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../user/my-booking/my-booking.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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
                    <a class="nav-link" aria-current="page" href="../../user/booking/booking.php">BOOK</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../../user/my-booking/my-booking.php">MY BOOKING</a>
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
    <!-- PHOTO TAGLINE -->
    <div class="bg-image container-fluid d-flex justify-content-center align-items-center p-3 mt-5">
        <p class="text-light p-3">If you wish to cancel your booking, please contact us directly for assistance. Our
            team at Villa Solaria is here to help ensure a smooth cancellation process and address any questions you may
            have. You can reach us via email at info@example.com or call us at +1 (555) 123-4567. Thank you for choosing
            Villa Solaria!</p>
    </div>

    <!-- MY RESERVATION -->
    <div class="container mt-5">
        <h5 class="text-capitalize fw-medium opacity-75 my-4">My Reservation</h5>
        <div class="container">
            <div class="row border d-flex align-items-center p-3">
                <div class="col-md-1 col-sm-12 py-2">
                    <i class="bi bi-journal-check rounded-circle p-3 fs-2 text-light"></i>
                </div>
                <div class="col-md-8 col-sm-12 py-4 ps-md-5">
                    <h6 class="text-capitalize">there are no reservations</h6>
                    <p class="text-capitalize">you can book a new reservation bt clicking the "book reservation" button.
                    </p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <a href="../../user/booking/booking.php"><button class="btn-reserve btn text-capitalize p-3" type="button">book
                            reservation</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- RESERVED -->
    <div class="reserved container mt-3">
        <div class="container">
            <div class="row border rounded">
                <div class="col-md-2 col-12 logo border-end d-flex flex-row justify-content-center align-items-center">
                    <img class="img-fluid" src="../../assets/image/logo-white.png">
                </div>
                <div class="col-md-1 col-12">
                    <p class="text-capitalize text-center rotated-text">villa solaria</p>
                </div>
                <div class="col-md-4 col-12 text-capitalize my-3">
                    <p class="text-capitalize m-0">check-in date: <span></span></p>
                    <p class="text-capitalize m-0">check-in date: <span></span></p>
                    <p class="text-capitalize m-0">check-out date: <span></span></p>
                    <p class="text-capitalize m-0">number of guest: <span></span></p>
                </div>
                <div class="col-md-3 col-12 p-3">
                    <p class="text-capitalize m-0">total amount paid:<span></span></p>
                    <p class="text-capitalize m-0">payment status: <span></span></p>
                    <p class="text-capitalize m-0">booking status: <span></span></p>
                </div>
                <div class=" col-12 col-md-2">
                    <p class="">Booking ID: </p>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br>
</body>

</html>