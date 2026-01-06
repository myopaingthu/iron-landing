<section class="hero-section">
    <div class="container section-container">
        <div class="hero-content">
            <div class="hero-text-block">
                <div class="hero-logo">
                    <img src="<?= base_url('assets/svg/ironpdf-logo.svg') ?>" alt="IronPDF for C++" class="hero-logo-img" width="232" height="40">
                </div>
                <div class="hero-text-content">
                    <p class="hero-kicker"><?= esc($hero['kicker'] ?? '') ?></p>
                    <h1 class="hero-title">
                        <span class="hero-title-line1"><?= esc($hero['titleLine1'] ?? '') ?></span>
                        <span class="hero-title-line2"><?= esc($hero['titleLine2'] ?? '') ?></span>
                    </h1>
                    <p class="hero-subtitle"><?= esc($hero['subtitle'] ?? '') ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-form-wrapper">
        <div class="container section-container">
            <div class="hero-form-block">
                <div class="hero-form-header">
                    <h2 class="hero-form-title"><?= esc($hero['formTitle'] ?? '') ?></h2>
                    <p class="hero-form-subtitle"><?= esc($hero['formSubtitle'] ?? '') ?></p>
                </div>
                <form class="hero-form" action="#" method="post">
                    <input type="email" class="hero-input" placeholder="<?= esc($hero['formPlaceholder'] ?? 'Enter email adress') ?>" aria-label="Email address" required>
                    <button type="submit" class="hero-button">
                        <span><?= esc($hero['formButton'] ?? 'Sign up now') ?></span>
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 1L6.5 6L1.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </form>
                <div class="hero-badge-row">
                    <span class="hero-badge"><?= esc($hero['badgeText'] ?? '') ?></span>
                    <p class="hero-badge-note">
                        <span>IronPDF Beta Program also coming soon for</span> Python | Node.JS | Java
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>