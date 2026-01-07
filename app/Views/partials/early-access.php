<section class="early-access-section">
<div class="early-access-bg-blur"></div>
    <div class="early-access-header-zone">
        <div class="container section-container">
            <div class="early-access-content">
                <h2 class="early-access-heading">Early Access to <span>C++ PDF Library</span></h2>
                <div class="early-access-description-wrapper">
                    <p class="early-access-description"><?= esc($earlyAccess['body'] ?? '') ?></p>
                </div>
                <div class="early-access-cards">
                    <?php if (!empty($earlyAccess['cards'])): ?>
                        <?php foreach ($earlyAccess['cards'] as $card): ?>
                            <div class="early-access-card">
                                <div class="early-access-badge <?= strtolower(str_replace(' ', '-', $card['status'])) ?>">
                                    <span># <?= esc($card['status']) ?></span>
                                </div>
                                <div class="early-access-card-content">
                                    <div class="early-access-logo">
                                        <img src="<?= base_url('assets/svg/for-' . $card['platform'] . '.svg') ?>" alt="IronPDF for <?= esc(ucfirst($card['platform'])) ?>" class="early-access-logo-img" width="112" height="40">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>

    <div class="early-access-cta-zone">
        <div class="container section-container">
            <div class="early-access-cta-content">
                <h2 class="early-access-cta-heading">Sign up to our <span>Beta Program</span></h2>
                <form class="early-access-form" action="#" method="post">
                    <div class="early-access-form-group">
                        <label for="early-access-email" class="visually-hidden">Email address</label>
                        <input 
                            type="email" 
                            id="early-access-email"
                            class="early-access-email-input" 
                            placeholder="Enter email address" 
                            required
                            aria-label="Email address"
                        >
                        <button type="submit" class="early-access-submit-btn">
                            <?= esc($cta['button'] ?? 'Sign up now') ?> ▸
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
