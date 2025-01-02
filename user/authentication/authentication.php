<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In/Sign Up - Villa Solaria</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../user/authentication/authentication.css">

    <script src="../../user/booking/booking.js"></script>

    <style>
        .bg-cover {
            background-image: url('../../assets/image/footer.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
    </style>

</head>

<body>
    <nav class="navbar fixed-top">
        <div class="container-fluid d-flex flex-row justify-content-start align-items-center">
            <a href="../../user/booking/booking.php"><i class="bi bi-arrow-left-short fs-1 text-dark"></i></a>
            <a class="navbar-brand text-dark " href="../../user/index/index.php">
                Villa Solaria
            </a>
        </div>
    </nav>

    <div class="container-fluid vh-100">
        <div class="row">
            <!-- IMAGE -->
            <div class="col-12 col-md-5 p-0 d-none d-md-block bg-cover"></div>
            <!-- LOG IN / SIGN UP -->
            <div class="col-12 col-md-7 mt-5 mt-md-0">
                <div class="container d-flex justify-content-center align-items-center">
                    <img class="img-fluid mt-3" src="../../assets/image/logo-black.png" height="100" width="100">
                </div>

                <div class="container">
                    <!-- Sign In Section -->
                    <div id="signin-section">
                        <h3 class="text-center text-uppercase">sign in</h3>

                        <div class="container-fluid w-75">
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control border-0 border-bottom shadow-none rounded-0" id="floatingInput" placeholder="name@example.com">
                                <label class="opacity-75" for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control border-0 border-bottom shadow-none rounded-0" id="floatingPassword" placeholder="Password">
                                <label class="opacity-75" for="floatingPassword">Password</label>
                            </div>
                            <!-- FORGOT PASSWORD -->
                            <div class=" d-flex justify-content-end">
                                <a class="text-capitalize text-secondary mt-2" href="#">forgot password?</a>
                            </div>

                            <!-- SIGN IN BUTTON -->
                            <div class=" d-flex justify-content-center mt-5">
                                <button class="btn text-capitalize text-light w-75 rounded-4">sign in</button>
                            </div>
                        </div>

                        <p class="text-center mt-3">or</p>

                        <p style="color: #D3AB8B !important;" class="text-center mt-3 px-5">Unlock exclusive perks like
                            extended checkouts, complimentary breakfast, and more when you join for free.</p>

                        <p class="text-capitalize text-center mt-4">Not a member? <a class="text-decoration-none text-dark fw-bold" href="#" onclick="toggleSignup()">Sign Up
                                Now</a></p>
                    </div>

                    <!-- Sign Up Section -->
                    <div id="signup-section" class="d-none">
                        <h3 class="text-center text-uppercase" style="color: #d3ab8b">Sign Up</h3>

                        <form action="../user_auth/Signup.php" method="POST" class="container-fluid w-75">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control border-0 border-bottom shadow-none rounded-0" id="signUpFirstName" name="first_name" placeholder="First Name" required>
                                <label for="signUpFirstName">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border-0 border-bottom shadow-none rounded-0" id="signUpLastName" name="last_name" placeholder="Last Name" required>
                                <label for="signUpLastName">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control border-0 border-bottom shadow-none rounded-0" id="signUpEmail" name="email" placeholder="Email Address" required>
                                <label for="signUpEmail">Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control border-0 border-bottom shadow-none rounded-0" id="signUpPassword" name="password" placeholder="Password" required>
                                <label for="signUpPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control border-0 border-bottom shadow-none rounded-0" id="signUpConfirmPassword" name="confirm_password" placeholder="Confirm Password" required>
                                <label for="signUpConfirmPassword">Confirm Password</label>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn text-capitalize text-light w-75 rounded-4">Sign Up</button>
                            </div>
                        </form>

                        <p class="text-center mt-3">Already a member? <a class="text-decoration-none text-dark fw-bold" href="#" onclick="toggleSignup()">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSignup() {
            const signinSection = document.getElementById("signin-section");
            const signupSection = document.getElementById("signup-section");

            if (signinSection.classList.contains("d-none")) {
                signinSection.classList.remove("d-none");
                signupSection.classList.add("d-none");
            } else {
                signinSection.classList.add("d-none");
                signupSection.classList.remove("d-none");
            }
        }
    </script>
</body>

</html>