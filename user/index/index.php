<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Villa Mirales</title>

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../user/index/index.css">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php include '../../components/navbar/navbar.php'; ?>

  <!-- Landing Page Section -->
  <div id="home" class="container-fluid landing-page vh-100">
    <h1 class="text-light">Villa Solaria</h1>
    <a href="../../user/booking/booking.php">
      <button type="button" class="btn btn-outline-light mt-3 p-2">
        Book Now<i class="bi bi-arrow-up-right"></i>
      </button>
    </a>
  </div>

  <!-- WHAT WE OFFER Section -->
  <?php include '../../user/offer/what-we-offer.php'; ?>

  <!-- ABOUT US -->
  <?php include '../../user/about/about.php'; ?>

  <!-- ALL ROOM Section -->
  <?php include '../../user/room/all-room.php'; ?>

  <!-- Footer Section -->
  <?php include '../../components/footer/footer.php'; ?>

  <!-- Floating Button -->
  <button type="button" class="btn-float btn btn-secondary">
    <i class="bi bi-telephone-fill"></i>
  </button>

  <script src="../../user/index/index.js"></script>
</body>

</html>