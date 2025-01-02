<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="../../user/about/about.css">
    <style>
        .carousel-item img {
            height: 100vh;
            object-fit: cover;
            width: 100%;
        }

        .carousel-item .overlay {
            height: 100vh;
        }

        .carousel-item h1 {
            font-family: "Geometria";
            font-size: 54px;
            font-weight: 300;
            left: 140px;
            top: 70px;
        }

        .carousel-item p {
            font-family: "Geometria";
            font-size: 18px;
            font-weight: 100;
            left: 140px;
        }
    </style>
</head>

<body>
    <div id="about" class="container-fluid mt-5 px-0">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active position-relative">
                    <div class="overlay"></div>

                    <h1 class="d-none d-md-block">WHY WE EXIST</h1>
                    <p class="d-none d-md-block w-75">At Villa Solaria, we believe that true relaxation comes from being immersed in the natural beauty and tranquility of a serene environment.
                        Our resort exists to provide an escape from the fast-paced world, offering a peaceful sanctuary where guests can reconnect with nature, unwind, and indulge in unparalleled luxury.
                        <span style="display: block; width: 75%;">Surrounded by lush landscapes and stunning vistas, Villa Solaria is dedicated to offering an unforgettable experience, combining world-class service with the perfect blend of comfort,
                            elegance, and harmony. Whether you're seeking a romantic getaway, a family vacation, or a retreat for self-renewal, Villa Solaria is your home away from home.</span>
                    </p>
                    <img src="../../assets/image/about-us.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img src="../../assets/image/about-us.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img src="../../assets/image/about-us.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</body>

</html>