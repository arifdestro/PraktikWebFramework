<!-- Menammpilkan data dari tabel user -->
<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>

<body>
    <center>
        <h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
    </center>
    <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
    <center>
        <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
    </center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($user as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->pekerjaan ?></td>
                <td>
                    <?php echo anchor('crud/edit/' . $u->id, 'Edit'); ?>
                    <?php echo anchor('crud/hapus/' . $u->id, 'Hapus'); ?>
                </td>
            </tr>
        <?php } ?>
    </table>

    <center><a href="<?php echo base_url('login/logout'); ?>">Logout</a></center>
</body>

</html>