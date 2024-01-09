<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div id="sidebar" class="bg-primary shadow-lg">
    <img class="mb-4" src="<?php echo base_url('assets/img/white.png') ?>" width="150px" alt="">
    <a href="#">Dashboard</a>
    <a href="#">Tambah Data (+)</a>
</div>

<div id="navbar" class="bg-primary shadow-lg d-flex justify-content-between">
    <h4 class="ms-4 text-white">Hallo!, Anda login sebagai </h4>
    <a class="btn btn-danger" href="#">Logout</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>