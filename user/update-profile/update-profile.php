<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile - Villa Solaria</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../user/update-profile/update-profile.css">

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
                    <a class="nav-link" aria-current="page" href="../../user/booking/booking.php">BOOK</a>
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

    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-md-9">
                <h3 class=" text-uppercase fw-lighter mt-3">your account</h3>
                <div class="container mt-3 pb-5">
                    <h6 class=" text-uppercase fw-normal mt-3">personal information</h6>
                    <div class="form-group mt-3">
                        <div class="row gx-5 gy-3">
                            <div class=" col-sm-12 col-md-6">
                                <label class=" text-capitalize" for="name">first name</label>
                                <input type="text" class="form-control" id="name" placeholder="" required>
                            </div>
                            <div class=" col-sm-12 col-md-6">
                                <label class=" text-capitalize" for="name">last name</label>
                                <input type="text" class="form-control" id="name" placeholder="" required>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <label class=" text-capitalize" for="name">phone</label>
                                <input type="number" class="form-control" id="number" placeholder="" required>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class=" text-capitalize" for="name">mobile phone</label>
                                <input type="number" class="form-control" id="number" placeholder="" required>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <label class="text-capitalize" for="name">email address</label>
                                <input type="email" class="form-control" id="email" placeholder="" required>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class=" text-capitalize" for="name">confirm email address</label>
                                <input type="email" class="form-control" id="email" placeholder="" required>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12 col-md-9">
                <div class="container mt-3 pb-5">
                    <h6 class=" text-uppercase fw-normal mt-3">password</h6>
                    <div class="form-group mt-5">
                        <div class="row gx-5 gy-3 pb-5">
                            <div class=" col-sm-12 col-md-6">
                                <label class=" text-capitalize" for="name">password</label>
                                <input type="password" class="form-control" id="password" placeholder="" required>

                                <p class="mt-3">At least 8 characters long, case sensitive, can contain !$#%, no spaces,
                                    not the same
                                    as previous password or login</p>
                            </div>
                            <div class=" col-sm-12 col-md-6">
                                <label class=" text-capitalize" for="name">confirm password</label>
                                <input type="password" class="form-control" id="password" placeholder="" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button class="cancel-btn btn btn-outline-dark text-uppercase px-5 me-2" type="button">cancel</button>
                    <button class="update-btn btn text-uppercase px-5" type="button">update</button>
                </div>
            </div>

            <div class="col"></div>
        </div>
    </div>

    <br><br><br><br><br>
</body>

</html>