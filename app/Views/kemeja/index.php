<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section>
    <div class="row">
        <div class="col">
            <h1>Daftar Kemeja</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="kemeja/create" class="btn btn-success btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                Tambah Kemeja
            </a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $brg) : ?>
                        <tr>
                            <th scope="row"><?= $brg['idkemeja'] ?></th>
                            <td><?= $brg['namabrg'] ?></td>
                            <td><?= $brg['stok'] ?></td>
                            <td><?= $brg['harga'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection() ?>