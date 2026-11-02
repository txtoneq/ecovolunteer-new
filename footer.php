<footer>
    <div class="footer-content">
        <img src="content/images/logo.png" alt="Лесные волонтёры" class="footer-logo">
        <nav class="footer-nav">
            <a href="#about">О НАС</a>
            <a href="#platform">О ПЛАТФОРМЕ</a>
            <a href="#programs">ВОЛОНТЁРСКИЕ ПРОГРАММЫ</a>
            <a href="#contacts">КОНТАКТЫ</a>
        </nav>
        <p class="footer-title">Лесные волонтёры</p>
        <p class="footer-subtitle">платформа волонтёров России</p>
        <?php
        $newYear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
        $days = ceil(($newYear - time()) / 86400);
        ?>
        <p class="footer-date">Сегодня: <?php echo date('d.m.Y'); ?></p>
        <p class="footer-date">До Нового года осталось дней: <?php echo $days; ?></p>
    </div>
</footer>
