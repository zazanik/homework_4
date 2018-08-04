<?php require_once(ROOT . '/application/template/header.php'); ?>

    <h1 class="main-title">Форма создания записи универа</h1>

    <form action="/university/edit/<?php echo $universitiesItem['id']; ?>" method="post">
        <p><input type="text" name="name" placeholder="name" value="<?php echo $universitiesItem['name']; ?>"></p>
        <p><input type="text" name="city" placeholder="city" value="<?php echo $universitiesItem['city']; ?>"></p>
        <p><input type="text" name="link" placeholder="link" value="<?php echo $universitiesItem['link']; ?>"></p>
        <input name="submit" type="submit" value="SEND">
    </form>

<?php require_once(ROOT . '/application/template/footer.php'); ?>