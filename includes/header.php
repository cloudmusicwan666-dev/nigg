<?php
$activePage = $activePage ?? basename($_SERVER['PHP_SELF']);
$navItems = [
    'index.php' => '首页',
    'products.php' => '热卖产品',
    'brand-relx.php' => 'RELX 专区',
    'guides.php' => '电子烟指南',
    'contact.php' => '联系我们'
];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VapingBus 官方商城，为您带来 RELX 以及更多电子烟品牌的优质体验。">
    <title>VapingBus 官方站</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="<?= htmlspecialchars(str_replace('.php', '', $activePage)) ?>">
<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="index.php" aria-label="VapingBus 首页">
                <span class="logo-mark">V</span>
                <span class="logo-text">VapingBus</span>
            </a>
        </div>
        <nav class="main-nav" aria-label="主导航">
            <button class="nav-toggle" aria-expanded="false" aria-controls="nav-menu">菜单</button>
            <ul id="nav-menu">
                <?php foreach ($navItems as $file => $label): ?>
                    <li class="<?= $file === $activePage ? 'active' : '' ?>">
                        <a href="<?= $file ?>"><?= htmlspecialchars($label) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
<main class="site-main">
