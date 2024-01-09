<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-primary">

    <nav class="navbar bg-primary shadow-lg py-3">
        <div class="container mx-3">
            <img src="<?php echo base_url('assets/img/white.png') ?>" alt="" width="130px">
        </div>
        <a class="btn btn-danger me-4" href="<?php echo base_url('index.php/login/login') ?>">Logout</a>
    </nav>
        <div class="container mt-3">
                <div class="bg-white col-md-12 mt-4 shadow-lg rounded-4 p-5">
                    <h1 class="text-center mb-1"><strong>RENCANA PEMBELAJARAN SEMESTER</strong></h1>
                    <table class="table table-hover table-bordered">
                    <center><a href="<?php echo base_url('index.php/rps/create/'); ?>" class="btn btn-primary m-3">TAMBAH</a></center>
                    <thead>
                        <tr class="table-primary">
                            <th class="satu">No</th>
                            <th class="satu">Nomor RPS</th>
                            <th class="satu">Nama Prodi</th>
                            <th class="satu">Kode Matakuliah</th>
                            <th class="satu">Nama Matakuliah</th>
                            <th class="satu">Dosen Penyusun</th>
                            <th class="satu">NIK Dosen</th>
                            <th class="satu">Tanggal Disusun</th>
                            <th class="satu">Berlaku Mulai</th>
                            <th class="satu">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php $nomor = 1; ?>
                    <?php foreach ($rps_list as $rps): ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $rps->nomor_rps; ?></td>
                            <td><?= $rps->nama_prodi; ?></td>
                            <td><?= $rps->kode_matkul; ?></td>
                            <td><?= $rps->nama_matkul; ?></td>
                            <td><?= $rps->nama_dosen_penyusun; ?></td>
                            <td><?= $rps->nik_dosen_penyusun; ?></td>
                            <td><?= $rps->tgl_disusun; ?></td>
                            <td><?= $rps->tgl_berlaku; ?></td>
                            <td>
                                <a href="<?php echo base_url('index.php/rps/update/' . $rps->id_rps);?>" class="btn btn-warning mb-1 text-white">Edit</a><br>
                                <a href="<?php echo base_url('index.php/rps/delete/' . $rps->id_rps); ?>"class="btn btn-danger mb-1">Hapus</a><br>
                                <a href="<?php echo base_url('index.php/rps/submit/' . $rps->id_rps); ?>"class="btn btn-info text-white">Submit</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                    </table>
                </div>
            </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>