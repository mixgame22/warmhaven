<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Страница не найдена - СПГ ФБР</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="icon" type="image/png" href="content/favicon.png">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #121212;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 100px;
            background-color: #121212;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            width: 40px;
            height: 40px;
            margin-right: 15px;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #f3ec22;
        }

        header nav a {
            margin-left: 40px;
            font-size: 1rem;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            transition: background 0.3s;
            border-radius: 10px;
        }

        header nav a:hover {
            background-color: #383838;
        }

        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 100px;
            text-align: center;
        }

        .main-text {
            max-width: 600px;
            margin-top: 160px;
        }

        .main-text h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #fdf50d;
        }

        .main-text p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #d4ce14;
        }

        .buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .button {
            padding: 15px 30px;
            font-size: 1.2rem;
            background-color: #f3ec22;
            color: #121212;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #beb926;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            color: #bdbdbd;
        }

        .custimskip {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0; 
            width: 100%; 
            box-sizing: border-box;
            background-color: #121212;
            padding: 20px 40px;
            text-align: center;
            color: #bdbdbd;
        }
    </style>
</head>
<body>

<header>
    <div class="logo-container">
        <div class="logo">ФБР</div>
    </div>
    <nav>
        <a href="index.html">Главная</a>
        <a href="info.html">О нас</a>
        <a href="gallery.html">Галерея</a>
    </nav>
</header>

<section class="main-content">
    <div class="main-text">
        <h1>Страница не найдена</h1>
        <p>К сожалению, запрашиваемая вами страница не существует.</p>
        <div class="buttons">
            <button class="button" onclick="window.location.href='index.html'">Назад на главную</button>
        </div>
    </div>
</section>

<footer class="custimskip">
    <p>© 2024 Все права не защищены | СПГ ФБР.</p>
    <p>sp worlds 2024: <a href="http://spworlds.ru" style="color: #f3ec22;">spworlds.ru</a></p>
</footer>


</body>
</html>
