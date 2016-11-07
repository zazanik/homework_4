<?php require_once(ROOT . '/application/template/header.php'); ?>

    <h1 class="main-title">Форма создания записи универа</h1>

    <form action="/university/edit/<?php echo $resultItem['id']; ?>" method="post">
        <p><input type="text" name="name" placeholder="name" value="<?php echo $resultItem['name']; ?>"></p>
        <input name="submit" type="submit" value="SEND">
    </form>

<?php require_once(ROOT . '/application/template/footer.php'); ?>