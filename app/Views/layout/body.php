<?= $this->extend('layout/basic'); ?>

<?= $this->section('body'); ?>

<?= $this->include('layout/navbar'); ?>

<?= $this->renderSection('content'); ?>

<?= $this->include('layout/footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<?= $this->endSection(); ?>