<section class="product-band-section">
<div class="product-band-bg-blur"></div>
    <div class="product-band-header-zone">
        <div class="container section-container">
            <div class="product-band-header">
                <h2 class="product-band-heading">
                    <span>
                        <?= esc($productBand['heading'] ?? '') ?>
                    </span>
                    <div class="product-band-badge">
                        <img src="<?= base_url('assets/svg/band-badge.svg') ?>" alt="IRONPDF" class="product-band-badge-img">
                    </div>
                </h2>
            </div>
            <ul class="product-band-bullets">
                <?php if (!empty($productBand['bullets'])): ?>
                    <?php foreach ($productBand['bullets'] as $i => $bullet): ?>
                        <li class="product-band-bullet-item"><span class="bullet-prefix">#</span>
                            <?= esc($bullet) ?>
                        </li>
                        <?php if ($i < count($productBand['bullets']) - 1): ?>
                            <li class="product-band-divider" aria-hidden="true"></li>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>
            </ul>
        </div>
    </div>

    <div class="product-band-content-zone">
        <div class="container section-container">
            <div class="product-band-text">
                <p class="product-band-intro">The new <span>IronPDF library for C++</span> will enhance the C++ developer's tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs.</p>
                <p class="product-band-intro"><span>IronPDF for C++</span> will help developers create C++ applications that can do all of these PDF processing tasks and more, with speed, precision, control, and excellence.</p>
            </div>
        </div>
    </div>
</section>