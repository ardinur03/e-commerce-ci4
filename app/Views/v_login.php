<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-6">
            <!-- alert gagal login -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-danger m-3 alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="card mt-3 shadow">
                <form class="p-5" action="<?= base_url('login') ?>" method="POST">
                    <h1 class="text-center">Login</h1>
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP:</label>
                        <input type="text" class="form-control" id="nip" name="nip" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>