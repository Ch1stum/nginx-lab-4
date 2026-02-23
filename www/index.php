<?php
session_start();
?>
<?php if (isset($_SESSION['username'])): ?>
    <p>Данные из сессии:</p>
    <ul>
        <li>Имя: <?= $_SESSION['username'] ?></li>
        <li>Возраст: <?= $_SESSION['userage'] ?></li>
        <li>Email: <?= $_SESSION['email'] ?></li>
        <li>Тема: <?= $_SESSION['theme'] ?></li>
        <li>Материалы: <?= $_SESSION['materials'] ?></li>
        <li>Формат: <?= $_SESSION['format'] ?></li>
        <li>Дата: <?= $_SESSION['date'] ?></li>
    </ul>
<?php else: ?>
    <p>Данных пока нет.</p>
<?php endif; ?>

<a href="form.html">Заполнить форму</a> |
<a href="view.php">Посмотреть все данные</a>