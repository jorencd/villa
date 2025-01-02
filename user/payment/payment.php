<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Villa Solaria</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../user/payment/payment.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

    <!-- PAYMENT SECTION (Initially Visible) -->
    <div class="container mt-5 border px-0 w-75 rounded" id="paymentSection">
        <nav class="navbar d-flex justify-content-start text-light rounded-top px-3">
            <a href="../../user/booking/booking.php" class="text-light"><i class="bi bi-arrow-left-short fs-1"></i></a>
            <span class="text-uppercase text-decoration-none">Book Summary</span>
        </nav>

        <div class="container-fluid p-3">
            <h6 class="text-uppercase fw-normal mt-3">Book Details</h6>
            <p class="text-capitalize opacity-75 m-1">Guest Name: <span class="">Jorence Mendoza</span></p>
            <p class="text-capitalize opacity-75 m-1">Check-in: <span class="">22/Dec</span></p>
            <p class="text-capitalize opacity-75 m-1">Check-out: <span class="">25/Dec</span></p>
            <p class="text-capitalize opacity-75 m-1">Ads-on: <span class="">Wi-Fi</span></p>
            <hr class="table-group-divider">

            <!-- PAYMENT METHOD -->
            <h6 class="text-uppercase fw-normal mt-3">Payment Method</h6>
            <div class="d-flex flex-column w-50 mt-3">
                <input type="radio" class="btn-check" name="options-base" id="option5" autocomplete="off" checked>
                <label class="btn d-flex justify-content-start" for="option5"><i class="bi bi-paypal me-2"></i>PayPal</label>

                <input type="radio" class="btn-check" name="options-base" id="option6" autocomplete="off">
                <label class="btn d-flex justify-content-start text-uppercase" for="option6"><i class="bi bi-credit-card-2-front me-2"></i>Visa</label>

                <input type="radio" class="btn-check" name="options-base" id="option7" autocomplete="off">
                <label class="btn d-flex justify-content-start" for="option7"><i class="bi bi-google me-1"></i>Pay</label>

                <input type="radio" class="btn-check" name="options-base" id="option8" autocomplete="off">
                <label class="btn d-flex justify-content-start" for="option8"><i class="bi bi-apple me-1"></i>Pay</label>
            </div>
            <hr class="table-group-divider">

            <div class="mb-4">
                <h6 class="text-uppercase mt-3 opacity-75">Payment</h6>
                <p class="text-capitalize opacity-75 m-0">sub total: <span></span></p>
                <p class="text-capitalize opacity-75 m-0">ads-on</p>
            </div>
            <hr class="table-group-divider">

            <div>
                <h6 class="text-uppercase mt-3 opacity-75">Total</h6>
                <p class="opacity-75">₱<span>999,999</span></p>
            </div>
            <button class="checkout-btn btn px-5" type="button" data-bs-toggle="modal" data-bs-target="#paymentModal">Checkout</button>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Confirm Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to proceed with the payment?
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-dark px-5" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-dark px-5" id="confirmPaymentButton">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ORDER COMPLETED MESSAGE (Initially Hidden) -->
    <div id="orderCompletedMessage" class="container mt-5 border p-5 w-75 rounded">
        <h4><i class="bi bi-check-circle-fill me-2"></i>Order Completed</h4>
        <p>Thank you for choosing Villa Solaria! Please note that your reservation request is currently under review.
            Kindly wait for our confirmation as we ensure all details are in order to provide you with the best
            experience. Once confirmed, we will notify you with the payment instructions. We appreciate your patience
            and look forward to welcoming you soon!</p>
        <div>
            <a href="#">View status</a>
            <button class="btn" onclick="dismissOrderCompleted()">Dismiss</button>
        </div>
    </div>

    <!-- JS -->
    <script src="../../user/payment/payment.js"></script>

</body>

</html>