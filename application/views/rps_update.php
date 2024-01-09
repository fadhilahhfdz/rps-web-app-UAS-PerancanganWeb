<!-- application/views/rps_update.php -->
<html>
<head>
    <title>Form Edit RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>
<body class="bg-primary">
    <nav class="navbar bg-primary shadow-lg py-3">
        <div class="container mx-3">
        <img src="<?php echo base_url('assets/img/white.png') ?>" alt="" width="130px">
        </div>
        <a class="btn btn-danger me-4" href="<?php echo base_url('index.php/login/login') ?>">Logout</a>
    </nav>
    <div class="container d-md-flex position-absolute top-50 start-50 translate-middle justify-content-center mt-4">
        <div class="card mb-3 w-50">
            <div class="card-body">
            <h4 class="card-title pt-2 pb-2 text-center"><strong>Form Edit RPS</strong></h4>
            <hr>
            <?php echo form_open('rps/update/' . $rps->id_rps); ?>
            <div class="row">
                    <div class="mb-3 col-6">
                        <label for="nomor_rps" class="form-label">Nomor RPS:</label>
                        <input type="text" name="nomor_rps" class="form-control" value="<?php echo $rps->nomor_rps; ?>" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="prodi" class="form-label">Nama Prodi:</label>
                        <input type="text" name="prodi" class="form-control" value="<?php echo $rps->nama_prodi; ?>" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="kode_matkul" class="form-label">Kode Matakuliah:</label>
                        <input type="text" name="kode_matkul" class="form-control" value="<?php echo $rps->kode_matkul; ?>" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="nama_matkul" class="form-label">Nama Matakuliah:</label>
                        <input type="text" name="nama_matkul" class="form-control" value="<?php echo $rps->nama_matkul; ?>" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="nama_dosen" class="form-label">Nama Dosen Penyusun:</label>
                        <input type="text" name="nama_dosen" class="form-control" value="<?php echo $rps->nama_dosen_penyusun; ?>" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="nik_dosen" class="form-label">Nik Dosen Penyusun:</label>
                        <input type="text" name="nik_dosen" class="form-control" value="<?php echo $rps->nik_dosen_penyusun; ?>" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="tgl_berlaku" class="form-label">Tanggal Mulai Berlaku:</label>
                        <input type="text" name="tgl_berlaku" class="form-control" value="<?php echo $rps->tgl_berlaku; ?>" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="<?php echo base_url('index.php/rps'); ?>"class="btn btn-danger">batal</a>
                        <input type="submit" value="Simpan" class="btn btn-success ms-2">
                    </div>
            <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
