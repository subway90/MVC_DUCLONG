<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CDN font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- CDN bootstrap icon -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
  <!-- CDN JS Bootstrap 5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
  <!-- CDN CSS Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
  <!-- CDN JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- CSS Custom -->
  <link rel="stylesheet" href="<?= URL ?>assets/css/custom.css">
  <!-- JS Custom -->
  <script src="<?= URL ?>assets/js/custom.js"></script>
  <!-- JS Ajax Product -->
  <script src="<?= URL ?>assets/js/ajax_product.js"></script>
  <!-- JS Ajax Cart -->
  <script src="<?= URL ?>assets/js/ajax_cart.js"></script>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= URL_STORAGE ?>system/logo.png" type="image/x-icon">
  <!-- Font Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- Flatpickr CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- Flatpickr JS -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <!-- Title -->
  <title><?= isset($title) ? $title : WEB_NAME ?></title>
</head>

<?= toast_show() ?>

<body>

  <div id="spinner">
    <div style="width: 8px; height: 8px;" class="spinner-grow text-danger" role="status">
    </div>
    <div style="width: 12px; height: 12px;" class="spinner-grow text-warning mx-2" role="status">
    </div>
    <div style="width: 16px; height: 16px;" class="spinner-grow text-success" role="status">
    </div>
    <div style="width: 20px; height: 20px;" class="spinner-grow text-danger mx-2" role="status">
    </div>
    <div style="width: 24px; height: 24px;" class="spinner-grow text-warning" role="status">
    </div>
  </div>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container px-lg-0">
      <a class="navbar-brand text-uppercase fw-bold d-flex align-items-center" href="/">
        <img width="40" class="me-3" src="<?= URL_STORAGE ?>system/logo.png" alt="DUCLONG LOGO">
        duc long global co.,ltd
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-brown"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item text-center">
            <a class="nav-link px-lg-3" aria-current="page" href="/ve-chung-toi">Về chúng tôi</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link px-lg-3" aria-current="page" href="/dich-vu">Dịch vụ</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link px-lg-3" aria-current="page" href="/du-an">Dự án</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link px-lg-3" aria-current="page" href="/tuyen-dung">Tuyển dụng</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link px-lg-3" aria-current="page" href="/lien-he">Liên hệ</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link ps-lg-3" aria-current="page" href="/tin-tuc">Tin tức</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>