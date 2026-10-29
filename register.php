<?php
date_default_timezone_set('Europe/Moscow');
$currentHour = (int)date('H');
$body_class = ($currentHour >= 20 || $currentHour < 6) ? 'dark-theme' : '';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Регистрация - Лесные волонтёры">
    <meta name="author" content="Эко-волонтёрство">
    <link rel="stylesheet" href="content/css/style.css">
    <link rel="stylesheet" href="content/css/forms.css">
    <title>Регистрация - Лесные волонтёры</title>
    <style>
        body.register-body {
            background-image: url('content/images/forest-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .register-wrapper {
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
            max-width: 450px;
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
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid white;
            color: #333;
        }
        
        .glass-card input:focus {
            background: white;
            border-color: #7cb342;
        }

        .glass-card button {
            background: #7cb342;
        }
        .glass-card button:hover {
            background: #689f38;
        }
        .glass-card button[type="reset"] {
            background: rgba(255, 255, 255, 0.3);
            color: white;
            border: 1px solid white;
        }
        .glass-card button[type="reset"]:hover {
            background: rgba(255, 255, 255, 0.5);
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

<body class="register-body <?php echo $body_class; ?>">
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

    <div class="register-wrapper">
        <div class="glass-card">
            <table>
                <tr>
                    <td>
                        <form method="post" action="login.php">
                            <fieldset>
                                <legend>Регистрация</legend>
                                <p>
                                    <label for="username">Имя пользователя:</label>
                                    <input type="text" id="username" name="username" placeholder="Введите имя" required>
                                </p>
                                <p>
                                    <label for="email">Электронная почта:</label>
                                    <input type="email" id="email" name="email" placeholder="user@example.com" required>
                                </p>
                                <p>
                                    <label for="password">Пароль:</label>
                                    <input type="password" id="password" name="password" required>
                                </p>
                                <p>
                                    <label for="confirm_password">Подтвердите пароль:</label>
                                    <input type="password" id="confirm_password" name="confirm_password" required>
                                </p>
                                <p>
                                    <input type="checkbox" id="agree" name="agree" required>
                                    <label for="agree" style="display: inline; font-weight: normal;">Согласен с правилами платформы</label>
                                </p>
                                <p>
                                    <button type="submit">Зарегистрироваться</button>
                                    <button type="reset">Очистить</button>
                                </p>
                                <p style="text-align: center; margin-top: 15px;">
                                    <a href="login.php" style="color: white; text-decoration: underline;">Уже есть аккаунт? Войти</a>
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