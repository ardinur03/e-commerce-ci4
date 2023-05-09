<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <?= $this->include('components/navbar') ?>
    <?= $this->include('components/cart') ?>
<?= $this->endSection() ?>