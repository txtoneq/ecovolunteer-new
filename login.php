<?php
date_default_timezone_set('Europe/Moscow');
$currentHour = (int)date('H');
$body_class = ($currentHour >= 20 || $currentHour < 6) ? 'dark-theme' : '';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Вход в систему - Лесные волонтёры">
    <meta name="author" content="Эко-волонтёрство">
    <link rel="stylesheet" href="content/css/style.css">
    <link rel="stylesheet" href="content/css/forms.css">
    <title>Вход - Лесные волонтёры</title>
    <style>
        body.login-body {
            background-image: url('content/images/forest-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            padding: 0;
            margin: 0;
        }

        .login-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 60px);
            padding: 20px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(15px); 
            -webkit-backdrop-filter: blur(15px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        
        .glass-card table {
            box-shadow: none;
            background: transparent;
            width: 100%;
            margin: 0;
        }
        
        .glass-card td {
            padding: 0;
            background: transparent;
        }

        .glass-card fieldset {
            border: 2px solid rgba(255, 255, 255, 0.5);
            background: transparent;
            box-shadow: none;
        }

        .glass-card legend {
            color: white;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }

        .glass-card label {
            color: white;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .glass-card input[type="text"],
        .glass-card input[type="email"],
        .glass-card input[type="password"] {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid white;
            color: #333;
        }
        
        .glass-card input:focus {
            background: white;
        }

        
        .login-btn {
            background: #7cb342 !important;
            color: white !important;
            border-radius: 20px;
            padding: 8px 20px !important;
        }
        .login-btn:hover {
            background: #689f38 !important;
        }
    </style>
</head>

<body class="login-body <?php echo $body_class; ?>">
    <nav id="navigation">
        <ul id="menu">
            <li><a href="index.php">О НАС</a></li>
            <li><a href="index.php">О ПЛАТФОРМЕ</a></li>
            <li><a href="index.php">ВОЛОНТЁРСКИЕ ПРОГРАММЫ</a></li>
            <li><a href="index.php">КОНКУРС</a></li>
            <li><a href="index.php">СПОНСОРАМ</a></li>
            <li><a href="index.php">НОВОСТИ</a></li>
            <li><a href="index.php">КОНТАКТЫ</a></li>
            <li><a href="login.php" class="login-btn">ВОЙТИ</a></li>
        </ul>
    </nav>

    <div class="login-wrapper">
        <div class="glass-card">
            <table>
                <tr>
                    <td>
                        <form method="get" action="index.php">
                            <fieldset>
                                <legend>Вход в систему</legend>
                                <p>
                                    <label for="email">Электронная почта:</label>
                                    <input type="email" id="email" name="email" placeholder="user@example.com" required>
                                </p>
                                <p>
                                    <label for="password">Пароль:</label>
                                    <input type="password" id="password" name="password" required>
                                </p>
                                <p>
                                    <button type="submit">Войти</button>
                                    <button type="reset">Очистить</button>
                                </p>
                                <p style="text-align: center; margin-top: 15px;">
                                    <a href="register.php" style="color: white; text-decoration: underline;">Нет аккаунта? Зарегистрироваться</a>
                                </p>
                            </fieldset>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>