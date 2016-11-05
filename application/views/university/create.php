<?php require_once(ROOT . '/application/template/header.php'); ?>


<form action="/university/create/" method="post">
    <p><input type="text" name="name" placeholder="name"></p>
    <p><input type="text" name="city" placeholder="city"></p>
    <p><input type="text" name="link" placeholder="link"></p>
    <input type="submit" value="SEND">
</form>

<h2 style="color: red;"><?php echo $error['empty-name']; ?></h2>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


