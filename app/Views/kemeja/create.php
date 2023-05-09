<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<section>
    <div class="row">
        <div class="col">
            <h1>Tambah Kemeja</h1>
        </div>
    </div>

    <!-- munculkan error validasi -->
    <?php if (session()->getFlashdata('validation')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('validation')->listErrors() ?>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-8">
            <form action="<?= base_url('admin/kemeja') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="namabrg" value="<?= set_value('namabrg') ?>" placeholder="Nama Barang">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="<?= set_value('stok') ?>" placeholder="Stok">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="<?= set_value('harga') ?>" placeholder="Harga">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Diskon</label>
                    <input type="number" class="form-control" id="harga" name="diskon" value="<?= set_value('diskon') ?>" placeholder="Diskon">
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat</label>
                    <input type="number" step="any" class="form-control" id="berat" name="berat" value="<?= set_value('berat') ?>" placeholder="Berat">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="namafile" placeholder="Gambar">

                    <div class="image-preview d-none">
                        <img src="" alt="Image Preview" class="image-preview__image img-thumbnail">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    const gambar = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.image-preview');

    gambar.addEventListener('change', function() {
        const file = this.files[0];

        imgPreview.classList.remove('d-none');

        if (file) {
            const reader = new FileReader();

            imgPreview.style.display = 'block';

            reader.addEventListener('load', function() {
                imgPreview.querySelector('img').setAttribute('src', this.result);
            });

            reader.readAsDataURL(file);
        } else {
            imgPreview.style.display = null;
            imgPreview.querySelector('img').setAttribute('src', '');
        }
    });
</script>
<?= $this->endSection() ?>