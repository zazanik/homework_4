<?php require_once(ROOT . '/application/template/header.php'); ?>

<h1 class="main-title">Форма создания записи универа</h1>

<form action="/university/create/" method="post">
    <p><input type="text" name="name" placeholder="name"></p>
    <p><input type="text" name="city" placeholder="city"></p>
    <p><input type="text" name="link" placeholder="link"></p>
    <input type="submit" value="SEND">
</form>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


