<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Villa Mirales</title>

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../user/room/all-room.css">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

  <style>
    .room-qoute h6 {
      font-family: "Geometria" !important;
      font-size: 24px !important;
      font-weight: 400 !important;
    }

    .block h1, .block h5, .nav .nav-item .nav-link{
      font-family: "Geometria" !important;;
    }

    .block .room-header {
      font-size: 54px !important;
      font-weight: 500 !important;
    }
  </style>
</head>

<body>
  <div id="rooms" class="container-fluid p-0">
    <div class="room-qoute container-fluid p-5 mt-5">
      <h6 class="text-light text-center">"Sometimes the best therapy is a vacation, a chance to pause and reset."</h6>
    </div>

    <div class="block container mt-5">
      <h1 class="room-header text-center">ROOM GALLERY</h1>
      <h5 class="room-sub-header text-center">ROOM GALLERY</h5>
    </div>

    <div class="room-nav container-fluid mt-5">
      <div class="d-flex justify-content-start justify-content-md-center overflow-auto">
        <ul class="nav flex-row flex-nowrap">
          <li class="nav-item">
            <a class="nav-link active" href="#">KING ROOM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">QUEEN ROOM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SINGLE ROOM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DOUBLE ROOM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">TWIN ROOM</a>
          </li>
        </ul>
      </div>
    </div>


    <div class="container mt-3">
      <div class="row gy-4">
        <div class="room-card-container" data-room-type="KING ROOM">
          <?php include '../../user/room/king-room.php'; ?>
        </div>
        <div class="room-card-container" data-room-type="QUEEN ROOM">
          <?php include '../../user/room/queen-room.php'; ?>
        </div>
        <div class="room-card-container" data-room-type="SINGLE ROOM">
          <?php include '../../user/room/single-room.php'; ?>
        </div>
        <div class="room-card-container" data-room-type="DOUBLE ROOM">
          <?php include '../../user/room/double-room.php'; ?>
        </div>
        <div class="room-card-container" data-room-type="TWIN ROOM">
          <?php include '../../user/room/twin-room.php'; ?>
        </div>
      </div>
    </div>

  </div>

  <script src="../../user/room/all-room.js"></script>
</body>

</html>