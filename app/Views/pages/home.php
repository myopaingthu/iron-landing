<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="hero-illustration">
    <img src="<?= base_url('assets/svg/hero-art.svg') ?>" alt="" class="hero-art-img" width="805" height="710" fetchpriority="high">
</div>

<?= $this->include('partials/header') ?>

<main>
    <?= $this->include('partials/hero') ?>
    <?= $this->include('partials/product-band') ?>
    <?= $this->include('partials/why-section') ?>
    <?= $this->include('partials/early-access') ?>
</main>

<?= $this->endSection() ?>