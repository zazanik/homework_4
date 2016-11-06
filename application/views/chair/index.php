<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>Назва</td>
    </tr>

    <?php foreach ($chairList as $chairItem) : ?>
        <tr>
            <td><?php echo $chairItem['name']; ?></td>
            <td>edit</td>
            <td>delete</td>
        </tr>

    <?php endforeach; ?>

    <tr>
        <td><a href="/chair/create/">Создать запись</a></td>
        <td></td>
        <td></td>
    </tr>

</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


