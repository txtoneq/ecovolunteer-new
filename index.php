<?php
date_default_timezone_set('Europe/Moscow');
$currentHour = (int)date('H');
$body_class = ($currentHour >= 20 || $currentHour < 6) ? 'dark-theme' : '';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Лесные волонтёры - платформа волонтёров России">
    <meta name="author" content="Эко-волонтёрство">
    <link rel="stylesheet" href="content/css/style.css">
    <title>Лесные волонтёры - Вместе мы сила!</title>
</head>

<body class="<?php echo $body_class; ?>">
    <?php include 'header.php'; ?>

    <section id="hero">
        <div class="hero-content">
            <h1>Лесные волонтёры</h1>
            <p class="hero-slogan">Вместе - мы сила!</p>
        </div>
    </section>

    <section id="platform" class="container">
        <div class="about-section">
            <div class="about-text">
                <h2>О ПЛАТФОРМЕ</h2>
                <?php
                $text = "«Лесные волонтёры» — платформа волонтёров России, объединяющая волонтёрские проекты. Здесь встречаются люди и организации, заинтересованные в сохранении лесов: те, кому нужна помощь, и те, кто готов её оказать.";
                $words = explode(' ', $text);
                $allText = "Лесные волонтёры Вместе мы сила О платформе " . $text;
                $allText = $allText . " Волонтёрские программы ";
                $allText = $allText . "Волонтёрство в нацпарке Зюраткуль Июнь август ";
                $allText = $allText . "Помощь ботаническому саду на Алтае Июнь август ";
                $allText = $allText . "Постройка экотропы на Байкале Июль ";
                $allText = $allText . "Волонтёрство в парке Ергаки Удалённое участие ";
                $allText = $allText . "Помощь в борьбе с лесными пожарами Удалённое участие ";
                $allText = $allText . "Помощь парку на Сахалине Удалённое участие ";
                $allText = $allText . "Помощь учёным-фенологам Удалённое участие ";
                $allText = $allText . "Помощь экоактивистам в Красноярском крае Декабрь 2025 декабрь 2026 ";
                $allText = $allText . "Экопоходы в Екатеринбурге Май октябрь 2026";
                $allWords = explode(' ', $allText);
                $vowels = 0;
                $letters = "аеёиоуыэюяАЕЁИОУЫЭЮЯ";

                for ($i = 0; $i < mb_strlen($allText, 'UTF-8'); $i++) {
                    $letter = mb_substr($allText, $i, 1, 'UTF-8');

                    if (strpos($letters, $letter) !== false) {
                        $vowels++;
                    }
                }
                ?>
                <p class="about-text-paragraph">
                    <?php
                    for ($i = 0; $i < count($words); $i++) {
                        if (($i + 1) % 2 == 0) {
                            echo '<span class="word-even">' . $words[$i] . '</span> ';
                        } else {
                            echo '<span class="word-odd">' . $words[$i] . '</span> ';
                        }
                    }
                    ?>
                </p>
                <p class="text-statistics">
                    Количество гласных букв: <?php echo $vowels; ?><br>
                    Количество слов: <?php echo count($allWords); ?>
                </p>
                <button class="btn-primary">ПОДРОБНЕЕ</button>
            </div>
            <div class="about-image">
                <img src="content/images/girl-planting.jpg" alt="Волонтёр сажает дерево">
            </div>
        </div>
    </section>

    <section id="programs" class="container">
    <h2 class="section-title">ВОЛОНТЁРСКИЕ ПРОГРАММЫ</h2>
    
    <div class="programs-grid">
        <div class="program-card" style="background-image: url('content/images/prog1.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Волонтёрство в нацпарке «Зюраткуль»</h3>
                <p>Июнь - август</p>
            </div>
        </div>

        <div class="program-card" style="background-image: url('content/images/prog2.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Помощь ботаническому саду на Алтае</h3>
                <p>Июнь - август</p>
            </div>
        </div>

        <div class="program-card" style="background-image: url('content/images/prog3.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Постройка экотропы на Байкале</h3>
                <p>Июль</p>
            </div>
        </div>

        <div class="program-card" style="background-image: url('content/images/prog4.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Волонтёрство в парке «Ергаки»</h3>
                <p>Удалённое участие</p>
            </div>
        </div>

        <div class="program-card" style="background-image: url('content/images/prog5.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Помощь в борьбе с лесными пожарами</h3>
                <p>Удалённое участие</p>
            </div>
        </div>

        <div class="program-card" style="background-image: url('content/images/prog6.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Помощь парку на Сахалине</h3>
                <p>Удалённое участие</p>
            </div>
        </div>

        <div class="program-card" style="background-image: url('content/images/prog7.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Помощь учёным-фенологам</h3>
                <p>Удалённое участие</p>
            </div>
        </div>

        <div class="program-card" style="background-image: url('content/images/prog8.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Помощь экоактивистам в Красноярском крае</h3>
                <p>Декабрь 2025 - декабрь 2026</p>
            </div>
        </div>

        <div class="program-card" style="background-image: url('content/images/prog9.jpg');">
            <div class="card-info">
                <img src="content/images/leaf.png" alt="leaf" class="card-leaf">
                <h3>Экопоходы в Екатеринбурге</h3>
                <p>Май - октябрь 2026</p>
            </div>
        </div>
    </div>
</section>

    <?php include 'footer.php'; ?>
</body>

</html>