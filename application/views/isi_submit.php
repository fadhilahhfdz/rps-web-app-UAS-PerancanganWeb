<h5><strong>MATA KULIAH: <?php echo $rps->nama_matkul ?> (<?php echo $rps->kode_matkul ?>)</strong></h5>
<hr>
<h5><strong>Program Studi: <?php echo $rps->nama_prodi ?></strong></h5>
<table class="table-bordered text-center">
    <thead>
        <tr class="fw-bold">
            <td>Nomor</td>
            <td>Tgl. Berlaku Mulai</td>
            <td>Tgl. Disusun</td>
            <td>Revisi</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $rps->nomor_rps ?></td>
            <td><?php echo $rps->tgl_berlaku; ?></td>
            <td><?php echo $rps->tgl_disusun; ?></td>
            <td>00</td>
        </tr>
    </tbody>
</table>