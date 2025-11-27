<h1>List Data Buku Tamu</h1>
<a href="index.php?page=create" class="btn btn-primary">Input Buku Tamu</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Komentar</th>
            <th scope="col">Waktu</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require 'koneksi.php';
        $tampil = $koneksi->query("SELECT * FROM tamu");
        //looping data tamu
        $no = 1;
        while ($data = $tampil->fetch_assoc()) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['komentar'] ?></td>
                <td><?= $data['date_created'] ?></td>
                <td>
                    <a href="index.php?id=<?= $data['id'] ?>&page=edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>