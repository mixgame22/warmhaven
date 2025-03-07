<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Если пользователь не вошел, перенаправляем на страницу входа
    exit();
}

// Подключение к базе данных
// ... (код подключения к БД)

// Получаем информацию о пользователе
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
</head>
<body>
    <h1>Добро пожаловать, <?php echo $user['username']; ?></h1>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Discord: <?php echo $user['discord']; ?></p>
    <img src="<?php echo $user['profile_picture']; ?>" alt="Профиль" style="width:100px;height:100px;">
    
    <?php if ($user['status'] == 'pending') { ?>
        <h2>Ваша заявка на доступ</h2>
        <p>Статус: Ожидает рассмотрения</p>
    <?php } elseif ($user['status'] == 'approved') { ?>
        <h2>Доступ к мессенджеру</h2>
        <a href="messenger.php">Перейти к мессенджеру</a>
    <?php } ?>

    <h2>Подать заявку на доступ</h2>
    <form action="submit_application.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Ваш ник" required>
        <input type="file" name="payment_proof" required>
        <button type="submit">Подать заявку</button>
    </form>
</body>
</html>
