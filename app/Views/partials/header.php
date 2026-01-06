<header class="site-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container justify-content-iron-start">
            <a class="navbar-brand" href="/">
                <img src="<?= base_url('assets/svg/logo.svg') ?>" alt="IRONSOFTWARE" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav">
                    <?php if (!empty($nav) && is_array($nav)) : ?>
                        <?php foreach ($nav as $item) : ?>
                            <li class="nav-item">
                                <?php if (!empty($item['hasDropdown'])) : ?>
                                    <a class="nav-link nav-link-dropdown" href="<?= esc($item['url']) ?>" aria-expanded="false">
                                        <?= esc(strtoupper($item['title'])) ?>
                                        <span class="dropdown-arrow"></span>
                                    </a>
                                <?php else : ?>
                                    <a class="nav-link" href="<?= esc($item['url']) ?>"><?= esc(strtoupper($item['title'])) ?></a>
                                <?php endif ?>
                            </li>
                        <?php endforeach ?>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</header>