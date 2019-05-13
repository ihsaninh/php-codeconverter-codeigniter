<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#00BCD4" />
  <meta name="msapplication-navbutton-color" content="#00BCD4" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#00BCD4" />
  <title>Code Converter</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  <link rel="icon" href="<?= base_url('assets/img/logo.png');?>">
</head>
<body>  
  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="/">
      <span class="title">Code Converter</span>
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">Choose Conversion</a>
        <div id="navbarDropdown" class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
        <?php foreach($submenu as $sm): ?>
          <a class="dropdown-item" href="<?= base_url($sm['url']); ?>"><?= $sm['title']; ?></a>
        <?php endforeach; ?>
        </div>
      </li>
    </ul>
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link" href="getmyip.html"></i>MyIP</a>
      <a class="nav-item nav-link" href="md5hashgenerator.html"></i>MD5 Hash</a>
      <a class="nav-item nav-link" href="ipcalc.html"></i>IPCalc</a>
      <a class="nav-item nav-link" href="about.html"></i>About</a>
    </div>
  </div>
</nav>