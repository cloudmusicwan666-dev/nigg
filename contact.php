<?php
$activePage = 'contact.php';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <h1>联系我们</h1>
        <p>商务合作、批量采购及售后服务，请通过以下方式与我们联系。</p>
    </div>
</section>
<section class="contact-section">
    <div class="container grid two">
        <div>
            <h2>客服与门店合作</h2>
            <p>工作时间：周一至周日 10:00-22:00</p>
            <ul class="contact-list">
                <li><strong>热线：</strong>400-168-0103</li>
                <li><strong>邮箱：</strong><a href="mailto:support@vapingbus.com">support@vapingbus.com</a></li>
                <li><strong>微信：</strong>搜索「VapingBus」官方账号</li>
            </ul>
            <h3>线下体验店</h3>
            <p>上海市徐汇区漕溪北路 188 号<br>深圳市福田区福华一路 99 号</p>
        </div>
        <div>
            <h2>在线留言</h2>
            <form class="contact-form" action="#" method="post">
                <label for="name">姓名</label>
                <input type="text" id="name" name="name" required>

                <label for="phone">手机号</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="message">需求说明</label>
                <textarea id="message" name="message" rows="5" placeholder="请输入采购数量、目标城市等信息"></textarea>

                <button type="submit" class="btn primary">提交</button>
            </form>
        </div>
    </div>
</section>
<section class="map-section">
    <div class="container">
        <h2>仓储与配送</h2>
        <p>我们在华东、华南设有仓储中心，支持顺丰、京东等快递渠道，确保产品快速送达。</p>
        <div class="map-placeholder" role="img" aria-label="仓储网络示意图"></div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
