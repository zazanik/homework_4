<?php require_once(ROOT . '/application/template/header.php'); ?>

<h1 class="main-title">Форма создания записи Кафедры</h1>

<form action="/chair/create/" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="submit" value="submit">
</form>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


