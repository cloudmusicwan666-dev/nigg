<?php
$activePage = 'products.php';
$products = include __DIR__ . '/includes/data/products.php';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <h1>热卖产品</h1>
        <p>原装正品现货供应，支持门店自提与快递配送。</p>
    </div>
</section>
<section class="product-section" id="starter-kits">
    <div class="container">
        <h2>入门套装</h2>
        <div class="grid three">
            <?php foreach ($products['starterKits'] as $item): ?>
                <article class="product-card">
                    <div class="product-image placeholder" role="img" aria-label="<?= htmlspecialchars($item['name']) ?>"></div>
                    <div class="product-info">
                        <h3><?= htmlspecialchars($item['name']) ?></h3>
                        <p><?= htmlspecialchars($item['tagline']) ?></p>
                        <p class="flavors">口味：<?= htmlspecialchars(implode(' / ', $item['flavors'])) ?></p>
                        <p class="price"><?= htmlspecialchars($item['price']) ?></p>
                        <a class="btn ghost" href="brand-relx.php">查看详情</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="product-section" id="pods">
    <div class="container">
        <h2>烟弹补给</h2>
        <div class="grid three">
            <?php foreach ($products['pods'] as $item): ?>
                <article class="product-card">
                    <div class="product-image placeholder" role="img" aria-label="<?= htmlspecialchars($item['name']) ?>"></div>
                    <div class="product-info">
                        <h3><?= htmlspecialchars($item['name']) ?></h3>
                        <p><?= htmlspecialchars($item['tagline']) ?></p>
                        <p class="flavors">口味：<?= htmlspecialchars(implode(' / ', $item['flavors'])) ?></p>
                        <p class="price"><?= htmlspecialchars($item['price']) ?></p>
                        <a class="btn ghost" href="brand-relx.php#flavors">更多口味</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="product-section" id="accessories">
    <div class="container">
        <h2>官方配件</h2>
        <div class="grid three">
            <?php foreach ($products['accessories'] as $item): ?>
                <article class="product-card">
                    <div class="product-image placeholder" role="img" aria-label="<?= htmlspecialchars($item['name']) ?>"></div>
                    <div class="product-info">
                        <h3><?= htmlspecialchars($item['name']) ?></h3>
                        <p><?= htmlspecialchars($item['tagline']) ?></p>
                        <p class="price"><?= htmlspecialchars($item['price']) ?></p>
                        <a class="btn ghost" href="contact.php">咨询库存</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="cta-banner">
    <div class="container">
        <h2>批量采购与门店合作</h2>
        <p>支持品牌加盟、线下门店一件代发。联系我们获取个性化报价。</p>
        <a class="btn primary" href="contact.php">立即联系</a>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
