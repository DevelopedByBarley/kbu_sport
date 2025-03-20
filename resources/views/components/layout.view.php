<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/resources/bootstrap/css/bootstrap.css?v=<?= time() ?>">
  <link rel="stylesheet" href="/resources/css/main.css?v=<?= time() ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <title><?= APP_NAME ?></title>
</head>

<body>
  
  <?php require_once view_path('components/navbar') ?>
  <?php require_once view_path('components/toast') ?>
  
  <?= $root ?>
  
  <?php require_once view_path('components/cookie-banner') ?>

  
  <script type="module" src="/resources/js/main.js?v=<?= time() ?>"></script>
  <script src="/resources/js/api.js?v=<?= time() ?>"></script>
  <script src="/resources/bootstrap/js/bootstrap.bundle.js?v=<?= time() ?>"></script>
</body>

</html>